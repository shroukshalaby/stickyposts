<script type="text/javascript" src="https://www.gstatic.com/firebasejs/7.5.2/firebase-app.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/firebasejs/7.5.2/firebase-messaging.js"></script>
<link rel="manifest" href="https://stickyposts.net/Firebase-Notification/manifest.json">
<script type="text/javascript" src="https://stickyposts.net/Firebase-Notification/firebase_init.js"></script>
<script type="text/javascript">

    popups_queue = [];
    page_url = '<?= $_SERVER['HTTP_HOST'] . strtok(strtok($_SERVER['REQUEST_URI'], '#'), '?') ?>';
    welcome_page = page_url.indexOf('stickyposts.net/sticky/index') !== false || page_url.indexOf('stickyposts.net/sticky/landing2/Landing') !== false;
    var disable=[];
    const messaging = firebase.messaging();
    messaging.requestPermission()
        .then(function () {
            //  console.log('Notification permission granted.');
            if (isTokenSentToServer()){
                token = getToken();
                getRegToken(false);
                newToken = getToken();
                if (token != newToken){
                    //  console.log('token changed');
                    changeToken(token, newToken);
                }
                checkPopUpsStatus(token);
            }
            else{
                getRegToken(true);
            }
        })
        .catch((err) => {
// 			console.log('Unable to get permission to notify.', err);

            if (isTokenSaved()){
                token = getToken();
                checkPopUpsStatus(token);
            }
            else{

                //enforce popups because of we have no tokens

                $.ajax({
                    url: 'https://crmmrkt.com/api/popups/getByPage/',
                    method: 'POST',
                    data: 'url=' + page_url
                }).done(function (all_popups){

                    popups = JSON.parse(all_popups);

                    // first show => last come

                    var keys = Object.keys(disable);

                    for(var i = 0; i < keys.length; i++){

                        if (popups.hasOwnProperty('data') && popups['data'].hasOwnProperty(keys[i])){
                            popups_queue.push(popups['data'][keys[i]]);
                        }

                    }

                    popups_queue.sort(function(a, b) {
                        return b.show_after_secs - a.show_after_secs
                    });

                    last_pop = popups_queue[popups_queue.length-1];
                    if (popups_queue.length == 1) last_pop = null;

                    if (welcome_page){
                        if (localStorage.getItem('welcome') != 'shown'){
                            $('#welcome').modal({
                                backdrop:false,
                                show:true
                            });
                            localStorage.setItem('welcome','shown')
                            $('#welcome').on('hidden.bs.modal', function () {
                                showPopUps(popups_queue.length, last_pop);
                            });
                        }
                        else{
                            showPopUps(popups_queue.length, last_pop);
                        }
                    }
                    else{
                        showPopUps(popups_queue.length, last_pop);
                    }

                });

            }

        });

    messaging.onMessage(function (payload){
        //  console.log("Message Received " + payload);

        notificationTitle = payload.data.title;
        notificationOptions = {
            body : payload.data.body,
            image : payload.data.image,
            icon : payload.data.icon,
        };

        Notification.requestPermission(function(status) {
            // console.log('Notification permission status:', status);

            var notification = new Notification(notificationTitle, notificationOptions);

            notification.addEventListener('click', function (){

                event.preventDefault(); // prevent the browser from focusing the Notification's tab
                window.open(payload.data.url, '_blank');

            });

        });

    });

    function checkPopUpsStatus(token){
        var disable=[];
        $.ajax({
            url: 'https://stickyposts.net/Firebase-Notification/popups.php',
            method: 'post',
            data: 'token=' + token
        }).done(function (result){
            disable = JSON.parse(result);

            $.ajax({
                url: 'https://crmmrkt.com/api/popups/getByPage/',
                method: 'POST',
                data: 'url=' + page_url
            }).done(function (all_popups){
                popups = JSON.parse(all_popups);

                // first show => last come

                var keys = Object.keys(disable);

                for(var i = 0; i < keys.length; i++){

                    if (disable[keys[i]] == 0 && popups.hasOwnProperty('data') && popups['data'].hasOwnProperty(keys[i])){

                        popups_queue.push(popups['data'][keys[i]]);

                    }

                }

                popups_queue.sort(function(a, b) {
                    return b.show_after_secs - a.show_after_secs
                });

                last_pop = popups_queue[popups_queue.length-1];
                if (popups_queue.length == 1) last_pop = null;

                if (welcome_page){
                    if (localStorage.getItem('welcome') != 'shown'){
                        $('#welcome').modal({
                            backdrop:false,
                            show:true
                        });
                        localStorage.setItem('welcome','shown');
                        $('#welcome').on('hidden.bs.modal', function () {
                            showPopUps(popups_queue.length, last_pop);
                        });
                    }
                    else{
                        showPopUps(popups_queue.length, last_pop);
                    }
                }
                else{
                    showPopUps(popups_queue.length, last_pop);
                }

            });
        });
    }

    function getRegToken(run){
        messaging.getToken()
            .then((currentToken) => {
                if (currentToken) {
                    saveToken(currentToken);
                    // 			console.log(currentToken);
                    setToken(currentToken);
                    setTokenSentToServer(true);
                    if (run) checkPopUpsStatus(currentToken);
                } else {
                    // console.log('No Instance ID token available. Request permission to generate one.');
                    setTokenSentToServer(false);
                    setTokenSaved(false);
                }
            }).catch((err) => {
            // console.log('An error occurred while retrieving token. ', err);
            setTokenSentToServer(false);
            setTokenSaved(false);
        });
    }

    function setTokenSentToServer(sent){
        window.localStorage.setItem('sentToServer', sent ? 1 : 0);
    }

    function isTokenSentToServer(){
        return window.localStorage.getItem('sentToServer') == 1;
    }

    function setTokenSaved(sent){
        window.localStorage.setItem('notificationTokenSaved', sent ? 1 : 0);
    }

    function isTokenSaved(){
        return window.localStorage.getItem('notificationTokenSaved') == 1;
    }

    function setToken(token){
        window.localStorage.setItem('notificationToken', token);
        setTokenSaved(true);
    }

    function getToken(){
        return window.localStorage.getItem('notificationToken');
    }

    function saveToken(currentToken){
        $.ajax({
            url: 'https://stickyposts.net/Firebase-Notification/tokens.php',
            method: 'POST',
            data: 'saveToken=1&token=' + currentToken
        }).done(function (result){
            // console.log(result);
        });
    }

    function changeToken(oldToken, newToken){
        $.ajax({
            url: 'https://stickyposts.net/Firebase-Notification/tokens.php',
            method: 'POST',
            data: 'changeToken=1&oldToken=' + currentToken + '&newToken=' + currentToken
        }).done(function (result){
            // console.log(result);
        });
    }

    function showPopUps(size, last_popup){

        if (size <= 0)
            return ;

        if (size == 1){
            popup = popups_queue.pop();

            if (last_popup != null){
                $('#popup_load').on('hidden.bs.modal', function () {
                    setTimeout(function(){
                        if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                            $('#popup_load').find('.popup_body').html(popup.popup_body);
                            $('#popup_load').modal('toggle');
                            // console.log('popup_show ' + next_popup.popup_id);
                            showPopUps(popups_queue.length, popup);
                        }
                        else{
                            popups_queue.push(popup);

                            $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                                showPopUps(popups_queue.length , popup);
                            });
                        }
                    }, popup.show_after_secs * 1000);
                });
            }
            else{
                setTimeout(function(){
                    if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                        $('#popup_load').find('.popup_body').html(popup.popup_body);
                        $('#popup_load').modal('show');
                        // console.log('popup_show ' + popup.popup_id);
                        // console.log('last_popup');
                        showPopUps(popups_queue.length, null);
                    }
                    else{
                        popups_queue.push(popup);

                        $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                            showPopUps(popups_queue.length , null);
                        });
                    }
                }, popup.show_after_secs * 1000);
            }

        }

        if (size > 1){
            popup = popups_queue.pop();

            setTimeout(function(){
                if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                    $('#popup_load').modal('show');
                    // this popup id
                    $('#popup_load').on('hidden.bs.modal', function () {
                        next_popup = popups_queue.pop();
                        setTimeout(function(){
                            if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                                $('#popup_load').find('.popup_body').html(popup.popup_body);
                                // next popup id
                                $('#popup_load').modal('toggle');
                                // console.log('popup_show ' + next_popup.popup_id);
                                showPopUps(popups_queue.length, next_popup);
                            }
                            else{
                                popups_queue.push(next_popup);

                                $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                                    showPopUps(popups_queue.length , next_popup);
                                });
                            }
                        }, next_popup.show_after_secs * 1000);
                    });
                }
                else{
                    popups_queue.push(popup);

                    $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                        showPopUps(popups_queue.length , popup);
                    });
                }
            }, popup.show_after_secs * 1000);

        }
    }

    function showPopUpsBySlug(size, last_popup){

        if (size <= 0)
            return ;

        if (size == 1){
            popup = popups_queue.pop();

            if (last_popup != null){
                $('#' + last_popup.popup_id).on('hidden.bs.modal', function () {
                    setTimeout(function(){
                        if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                            $('#' + popup.popup_id).modal('toggle');
                            // console.log('popup_show ' + next_popup.popup_id);
                            showPopUpsBySlug(popups_queue.length, popup);
                        }
                        else{
                            popups_queue.push(popup);

                            $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                                showPopUpsBySlug(popups_queue.length , popup);
                            });
                        }
                    }, popup.show_after_secs * 1000);
                });
            }
            else{
                setTimeout(function(){
                    if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                        $('#' + popup.popup_id).modal('show');
                        // console.log('popup_show ' + popup.popup_id);
                        // console.log('last_popup');
                        showPopUpsBySlug(popups_queue.length, null);
                    }
                    else{
                        popups_queue.push(popup);

                        $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                            showPopUpsBySlug(popups_queue.length , null);
                        });
                    }
                }, popup.show_after_secs * 1000);
            }

        }

        if (size > 1){
            popup = popups_queue.pop();

            setTimeout(function(){
                if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                    $('#' + popup.popup_id).modal('show');

                    $('#' + popup.popup_id).on('hidden.bs.modal', function () {
                        next_popup = popups_queue.pop();
                        setTimeout(function(){
                            if ($("#myModal, #modal_compare, #resources_popups, .loaders, .loader").hasClass('show') == false){
                                $('#' + next_popup.popup_id).modal('toggle');
                                // console.log('popup_show ' + next_popup.popup_id);
                                showPopUpsBySlug(popups_queue.length, next_popup);
                            }
                            else{
                                popups_queue.push(next_popup);

                                $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                                    showPopUpsBySlug(popups_queue.length , next_popup);
                                });
                            }
                        }, next_popup.show_after_secs * 1000);
                    });
                }
                else{
                    popups_queue.push(popup);

                    $('#myModal, #modal_compare, #resources_popups, .loaders, .loader').on('hidden.bs.modal', function () {
                        showPopUpsBySlug(popups_queue.length , popup);
                    });
                }
            }, popup.show_after_secs * 1000);

        }
    }


</script>
<?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/firebase.blade.php ENDPATH**/ ?>