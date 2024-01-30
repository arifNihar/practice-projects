<?php $__env->startSection('head'); ?>
<?php echo $__env->yieldContent('subhead'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('../layout/components/mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('../layout/components/top-bar', ['class' => 'top-bar-boxed--top-menu'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            <?php $__currentLoopData = $top_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuKey => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;'); ?>" class="<?php echo e($first_level_active_index == $menuKey ? 'top-menu top-menu--active' : 'top-menu'); ?>">
                        <div class="top-menu__icon">
                            <i data-lucide="<?php echo e($menu['icon']); ?>"></i>
                        </div>
                        <div class="top-menu__title">
                            <?php echo e($menu['title']); ?>

                            <?php if(isset($menu['sub_menu'])): ?>
                                <i data-lucide="chevron-down" class="top-menu__sub-icon"></i>
                            <?php endif; ?>
                        </div>
                    </a>
                    <?php if(isset($menu['sub_menu'])): ?>
                        <ul class="<?php echo e($first_level_active_index == $menuKey ? 'top-menu__sub-open' : ''); ?>">
                            <?php $__currentLoopData = $menu['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuKey => $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;'); ?>" class="top-menu">
                                        <div class="top-menu__icon">
                                            <i data-lucide="activity"></i>
                                        </div>
                                        <div class="top-menu__title">
                                            <?php echo e($subMenu['title']); ?>

                                            <?php if(isset($subMenu['sub_menu'])): ?>
                                                <i data-lucide="chevron-down" class="top-menu__sub-icon"></i>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                    <?php if(isset($subMenu['sub_menu'])): ?>
                                        <ul class="<?php echo e($second_level_active_index == $subMenuKey ? 'top-menu__sub-open' : ''); ?>">
                                            <?php $__currentLoopData = $subMenu['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastSubMenuKey => $lastSubMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e(isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;'); ?>" class="top-menu">
                                                        <div class="top-menu__icon">
                                                            <i data-lucide="zap"></i>
                                                        </div>
                                                        <div class="top-menu__title"><?php echo e($lastSubMenu['title']); ?></div>
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </nav>
    <!-- END: Top Menu -->
    <!-- BEGIN: Content -->
    <div class="content content--top-nav">
        <?php echo $__env->yieldContent('subcontent'); ?>
    </div>
    <!-- END: Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Stock-Modren-ui\resources\views////layout/top-menu.blade.php ENDPATH**/ ?>