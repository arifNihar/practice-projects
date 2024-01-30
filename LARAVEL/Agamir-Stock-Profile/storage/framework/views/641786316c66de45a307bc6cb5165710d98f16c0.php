<?php $__env->startSection('body'); ?>
    <body class="py-5">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('../layout/components/dark-mode-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('../layout/components/main-color-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        <!-- END: JS Assets-->

        <?php echo $__env->yieldContent('script'); ?>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadrizkia/Desktop/Projects/midone-laravel/rubick-laravel/resources/views////layout/main.blade.php ENDPATH**/ ?>