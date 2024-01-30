<?php $__env->startSection('head'); ?>
    <?php echo $__env->yieldContent('subhead'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('../layout/components/mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('../layout/components/top-bar', ['class' => 'top-bar-boxed--simple-menu'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="flex overflow-hidden h-max">
        <!-- BEGIN: Simple Menu -->
        <nav class="side-nav side-nav--simple">
            <ul>
                <?php $__currentLoopData = $simple_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuKey => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($menu == 'devider'): ?>
                        <li class="side-nav__devider my-6"></li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;'); ?>" class="<?php echo e($first_level_active_index == $menuKey ? 'side-menu side-menu--active' : 'side-menu'); ?>">
                                <div class="side-menu__icon">
                                    <i data-lucide="<?php echo e($menu['icon']); ?>"></i>
                                </div>
                                <div class="side-menu__title">
                                    <?php echo e($menu['title']); ?>

                                    <?php if(isset($menu['sub_menu'])): ?>
                                        <div class="side-menu__sub-icon <?php echo e($first_level_active_index == $menuKey ? 'transform rotate-180' : ''); ?>">
                                            <i data-lucide="chevron-down"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <?php if(isset($menu['sub_menu'])): ?>
                                <ul class="<?php echo e($first_level_active_index == $menuKey ? 'side-menu__sub-open' : ''); ?>">
                                    <?php $__currentLoopData = $menu['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuKey => $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;'); ?>" class="<?php echo e($second_level_active_index == $subMenuKey ? 'side-menu side-menu--active' : 'side-menu'); ?>">
                                                <div class="side-menu__icon">
                                                    <i data-lucide="activity"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    <?php echo e($subMenu['title']); ?>

                                                    <?php if(isset($subMenu['sub_menu'])): ?>
                                                        <div class="side-menu__sub-icon <?php echo e($second_level_active_index == $subMenuKey ? 'transform rotate-180' : ''); ?>">
                                                            <i data-lucide="chevron-down"></i>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                            <?php if(isset($subMenu['sub_menu'])): ?>
                                                <ul class="<?php echo e($second_level_active_index == $subMenuKey ? 'side-menu__sub-open' : ''); ?>">
                                                    <?php $__currentLoopData = $subMenu['sub_menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastSubMenuKey => $lastSubMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e(isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;'); ?>" class="<?php echo e($third_level_active_index == $lastSubMenuKey ? 'side-menu side-menu--active' : 'side-menu'); ?>">
                                                                <div class="side-menu__icon">
                                                                    <i data-lucide="zap"></i>
                                                                </div>
                                                                <div class="side-menu__title"><?php echo e($lastSubMenu['title']); ?></div>
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
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav>
        <!-- END: Simple Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <?php echo $__env->yieldContent('subcontent'); ?>
        </div>
        <!-- END: Content -->
    </div>
     <?php echo $__env->make('../layout/components/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codeman/Desktop/practice-projects/LARAVEL/Agamir-Stock-Profile/resources/views////layout/simple-menu.blade.php ENDPATH**/ ?>