
<script type="text/javascript">

    function assign_url(url, key, value, empty = 1){
        url_last = '';
        if (url.indexOf("#") !== -1){
            url_last = url.substring(url.indexOf("#"), url.length);
            url = url.substring(0, url.indexOf("#"));
        }
        assigned_value = (url.indexOf('?') !== -1 || empty != 1 ? '&' : '?') + key + '=' + value;
        return url + assigned_value + url_last;
    }

    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    function updateURL(url, url_params, marketing_params, proper_url){

        marketing_params.forEach(function(param) {

            if (proper_url && url_params[param])   url = assign_url(url, param, url_params[param]);

        });

        return url;
    }

    function createLangURL(url, url_params){

        url_params.forEach(function(param) {

            if (param != 'language')
                url = assign_url(url, param, url_params[param], !url_params['language']);

        });

        return url;
    }

    $(document).ready(function() {

        url_params = getUrlVars();
        marketing_params = ['assigned_employee', 'activity', 'task', 'platform', 'landing_page', 'landing_category', 'source', 'assigned_b2b_id', 'assigned_b2b_source', 'invited_by'];
        txt_params = {'platform' : 1, 'source' : 1, 'landing_page' : 1, 'landing_category' : 1, 'assigned_b2b_source' : 1};
        lang_url_params = createLangURL('', url_params);

        marketing_params.forEach(function(param) {

            $('input:hidden[name=' + param + ']').remove();

            $('form').append('<input type="hidden" name="' + param + '" value="' + (url_params[param] ? url_params[param] : (txt_params[param] ? '' : 0))  + '">');

        });

        $('a[href]').each(function(index, element) {
            url = $(element).attr('href');

            proper_url = (url.indexOf(".php") !== -1 || url.indexOf(".php#") !== -1 || url.indexOf("/blog/") !== -1 || url.indexOf("/LMS") !== -1 || url.indexOf("/support-ticket") !== -1) ? 1 : 0;
            url = updateURL(url, url_params, marketing_params, proper_url);

            $(element).attr('href', url);
        });
    });

</script>
<?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/helpers/marketing.blade.php ENDPATH**/ ?>