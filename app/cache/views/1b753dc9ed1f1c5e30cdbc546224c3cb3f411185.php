<?php $__env->startPush('head'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php $__env->stopPush(); ?>
<script>
    function sweetAlertHelper(sweetConfig) {
        let timerInterval
        if (sweetConfig.type === 'error') {
            Swal.fire({
                icon: 'error',
                title: '',
                html: sweetConfig.message,
            })
        } else if (sweetConfig.type === 'success') {
            Swal.fire({
                title: '',
                icon: 'success',
                html: sweetConfig.message,
                timer: sweetConfig.timer ?? 0,
                timerProgressBar: sweetConfig.showProgress ?? false,
                onBeforeOpen: () => {
                    if (sweetConfig.timer != null) {
                        Swal.showLoading();
                        timerInterval = setInterval(() => {
                            const content = Swal.getContent();
                            if (content) {
                                const b = content.querySelector('b');
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, sweetConfig.timer)
                    }
                },
                onClose: () => {
                    if (sweetConfig.timer != null) {
                        clearInterval(timerInterval)
                    }
                }
            }).then(function () {
                if (sweetConfig.redirect != null)
                    window.location.assign(sweetConfig.redirect);
            });
        } else if (sweetConfig.type === 'question') {
            Swal.fire({
                title: sweetConfig.message,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: sweetConfig.confirmButtonText,
                cancelButtonText: sweetConfig.cancelButtonText
            }).then((result) => {
                if (result.isConfirmed) {
                    if (sweetConfig.mutation === 'resendVerification') {
                        var csrfName = '<?php echo e(getci()->security->get_csrf_token_name()); ?>',
                            csrfHash = '<?php echo e(getci()->security->get_csrf_hash()); ?>';
                        sweetAlertHelper({'type': 'loading', 'visible': true});
                        $.ajax({
                            url: "/ajax/resendactivation",
                            type: 'post',
                            data: {
                                [csrfName]: csrfHash,
                                email: sweetConfig.data.email,
                                type:  sweetConfig.data.type,
                                href: window.location.href,
                            },
                            success: function (data) {
                                csrfName = data.csrfName;
                                csrfHash = data.csrfHash;
                                sweetAlertHelper(data.sweetConfig);
                            }
                        });


                    }

                }
            })
        } else if (sweetConfig.type === 'loading') {
            if (sweetConfig.visible === true) {
                Swal.fire({
                    title: sweetConfig.message ?? '',
                    onBeforeOpen() {
                        Swal.showLoading()
                    },
                    onAfterClose() {
                        Swal.hideLoading()
                    },
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                })
            } else {
                Swal.close()
            }

        }
        if (sweetConfig.mutation === 'logout') {

        }

    };
</script>
<?php $__env->startPush('scripts'); ?>
    <?php if(_s('sweetMessage')): ?>
        <script>
            sweetAlertHelper(JSON.parse(<?php echo json_encode(_sPull('sweetMessage'), 15, 512) ?>));
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?><?php /**PATH F:\Laravel-Projects\StickyPost2\inc\themes\frontend\pure\views/sticky/layout/partials/common/sweetalert.blade.php ENDPATH**/ ?>