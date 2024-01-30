<?php $__env->startSection('body'); ?>
    <body class="py-5 md:py-0">
        <?php echo $__env->yieldContent('content'); ?>


        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        <!-- END: JS Assets-->

        <?php echo $__env->yieldContent('script'); ?>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codeman/Downloads/Entertech-Stock-Profile/resources/views////layout/main.blade.php ENDPATH**/ ?>