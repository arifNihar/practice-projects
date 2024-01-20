<?php $__env->startSection('subhead'); ?>
    <title>User Analytics - Entertech</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subcontent'); ?>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-3">
                    <div class="intro-y flex items-center h-10 float-right">

                        <button class="dropdown-toggle btn px-2 box mr-2" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i class="w-4 h-4" data-lucide="plus"></i>
                            </span>
                        </button>
                        <button class="btn btn-primary shadow-md mr-2">Add New User</button>
                    </div>
                </div>

                <div class="col-span-12 mt-3">
                    <div class="grid grid-cols-12 gap-6 mt-0">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary"><?php echo e($card_data->TOT_USER); ?></div>
                                    <div class="text-base text-slate-500 mt-1">TOTAL USER</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary"><?php echo e($card_data->FREE_USER); ?></div>
                                    <div class="text-base text-slate-500 mt-1">FREE USER</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary"><?php echo e($card_data->PREMIUM_USER); ?></div>
                                    <div class="text-base text-slate-500 mt-1">PREMIUM USER</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 mt-6 text-primary"><?php echo e($card_data->ADMIN_USER); ?></div>
                                    <div class="text-base text-slate-500 mt-1">ADMIN USER</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-9">
            <div class="col-span-12 mt-3">
                <div class="intro-y flex items-center h-10 float-right">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                    </div>
                </div>
            </div>
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                <th class="text-center whitespace-nowrap">SI</th>
                                <th class="whitespace-nowrap">IMAGES</th>
                                <th class="whitespace-nowrap text-left">USER NAME</th>
                                <th class="text-center whitespace-nowrap">USER TYPE</th>
                                <th class="text-center whitespace-nowrap">EMAIL ADDRESS</th>
                                <th class="text-center whitespace-nowrap">CONTACT NUMBER</th>
                                <th class="text-center whitespace-nowrap">JOINED AT</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $si=1;
                            ?>
                            <?php $__currentLoopData = $get_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="intro-x">
                                    <td class="text-center"><?php echo e($si); ?></td>
                                    <td class="w-25">
                                        <div class="flex">
                                            <div class="w-10 h-10 image-fit zoom-in">
                                                <img alt="Entertech - Stock Profile" class="tooltip rounded-5" src="<?php echo e(asset('build/assets/images/profile-1.jpg')); ?>" title="<?php echo e($val->name); ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left"><?php echo e($val->name); ?></td>
                                    <td class="text-center "><?php echo e($val->user_type); ?></td>
                                    <td class="text-center"><?php echo e($val->email); ?></td>
                                    <td class="text-center"><?php echo e($val->mobile); ?></td>
                                    <td class="text-center"><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d',  $val->joined_date)->format('d F Y')); ?></td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit-user-modal">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                   $si += 1;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="mt-3">
                        <?php echo e($get_data->links('pagination::tailwind')); ?>

                    </div>
                </div>
                <!-- END: Data List -->
            </div>
            <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                <button type="button" class="btn btn-danger w-24">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div id="edit-user-modal" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                           <div class="px-5 pb-3 text-center">
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <!-- BEGIN: Form Layout -->
                                    <div class="intro-y box p-5">
                                          <!-- text input -->
                                      <div class="form-group">
                                        <label class="form-label uppercase font-semibold">USER NAME</label>
                                        <input type="text" class="form-control h-[50px]" name="bo_identification_number" required="">
                                      </div>
                                      <div class="form-group mt-5">
                                        <label class="form-label uppercase font-semibold">NAME</label>
                                        <input type="text" class="form-control h-[50px]" name="bo_type" required="">
                                      </div>
                                      <div class="form-group mt-5">
                                        <label class="form-label uppercase font-semibold">EMAIL ADDRESS</label>
                                        <input type="text" class="form-control h-[50px]" name="bo_category" required="">
                                      </div>
                                      <div class="form-group mt-5">
                                        <label class="form-label uppercase font-semibold">JOINED DATE</label>
                                        <input type="text" class="form-control h-[50px]" name="dp_internal_reference_number">
                                      </div>
                                      <div class="form-group mt-5">
                                        <label class="form-label uppercase font-semibold">CONTACT NUMBER</label>
                                        <input type="text" class="form-control h-[50px]" name="name_of_first_holder">
                                      </div>
                                    </div>
                                    <!-- END: Form Layout -->
                                </div>
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <!-- BEGIN: Form Layout -->
                                    <div class="intro-y box p-8">
                                        <div class="form-group font-semibold mt-3 mb-3">
                                          <label>User Access</label>
                                        </div>
                                        <ul>
                                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                  <div class="form-check mt-3 mb-3">
                                                    <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input mr-2" name="edit_permission" value="<?php echo e($permission->permission_name); ?>">
                                                      <?php echo e(ucwords(str_replace("_", " ", $permission->permission_name))); ?>

                                                    </label>
                                                  </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <!-- END: Form Layout -->
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center justify-items-center">
                                <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary  w-32 mr-2 mb-2">Cancel</button>
                                <button type="button" class="btn btn-primary w-32 mr-2 mb-2">
                                    <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/' . $layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codeman/Desktop/practice-projects/LARAVEL/Agamir-Stock-Profile/resources/views/pages/admin_panel/user_activity/user_analytics.blade.php ENDPATH**/ ?>