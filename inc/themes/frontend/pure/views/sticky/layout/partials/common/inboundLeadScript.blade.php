<script>

    function form_validation($form, $filedName) {
        $form.find('.form-control').removeClass("is-invalid")
        $form.find('[name="' + $filedName + '"]').addClass("is-invalid")
    }
    var form = $('{{$selector}}');
    $(form).submit(function (e) {
        sweetAlertHelper({'type': 'loading', 'visible': true});
        e.preventDefault();
        var csrfName = '{{getci()->security->get_csrf_token_name() }}',
            csrfHash = '{{ getci()->security->get_csrf_hash() }}';
        $.ajax({
            url: "/ajax/inbondLead",
            type: 'post',
            data: {
                [csrfName]: csrfHash,
                form_data: $(this).serialize(),
                href: window.location.href,
                type: '{{$type}}'
            },
            success: function (data) {
                csrfName = data.csrfName;
                csrfHash = data.csrfHash;
                if (data.status === "success")
                    form.trigger('reset')
                sweetAlertHelper(data.sweetConfig);
                form_validation(form, data.filedName)

            }
        });

    });
</script>