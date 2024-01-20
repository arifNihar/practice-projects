<!DOCTYPE html>
<!--
Template Name: Enigma - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="<?php echo e($dark_mode ? 'dark' : ''); ?><?php echo e($color_scheme != 'default' ? ' ' . $color_scheme : ''); ?>">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="<?php echo e(asset('build/assets/images/logo.svg')); ?>" rel="shortcut icon">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="Entertech">
    <meta name="author" content="AGAMIRIT">

    <?php echo $__env->yieldContent('head'); ?>

    <!-- BEGIN: CSS Assets-->
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<?php echo $__env->yieldContent('body'); ?>

</html>
<?php /**PATH /home/codeman/Downloads/Entertech-Stock-Profile/resources/views////layout/base.blade.php ENDPATH**/ ?>