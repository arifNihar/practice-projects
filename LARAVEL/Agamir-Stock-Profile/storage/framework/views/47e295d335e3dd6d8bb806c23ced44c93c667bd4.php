<?php $__env->startSection('subhead'); ?>
    <title>Open B.O Account - Entertech</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subcontent'); ?>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y box col-span-12 2xl:col-span-6 bg-primary">
            <div class="flex flex-row items-center justify-center p-5">
                <h2 class="text-xl font-medium items-center font-semibold text-white">Open B.O Account</h2>
            </div>
        </div>
        <div class="intro-y box col-span-12 2xl:col-span-6">
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
                    <div class="intro-y box p-5">
                      <div class="form-group uftcl-about">
                        <label class="form-label uppercase font-semibold">Fax Number</label>
                        <input type="text" class="form-control h-[50px]" name="fax_number">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Statement Cycle Code</label>
                        <input type="text" class="form-control h-[50px]" name="statement_cycle_code">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">B.O Short Name</label>
                        <input type="text" class="form-control h-[50px]" name="bo_short_name" required="">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Second Holder Short Name</label>
                        <input type="text" class="form-control h-[50px]" name="second_holder_short_name">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Third Holder Short Name</label>
                        <input type="text" class="form-control h-[50px]" name="third_holder_short_name">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Passport Number</label>
                        <input type="text" class="form-control h-[50px]" name="passport_number">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Passport Issue Date</label>
                        <input type="text" class="datepicker form-control h-[50px] block mx-auto" data-single-mode="true" name="passport_issue_date" id="">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Passport Expiry Date</label>
                        <input type="text" class="datepicker form-control h-[50px] block mx-auto" data-single-mode="true" name="passport_expiry_date" id="">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Passport Issue Place</label>
                        <input type="text" class="form-control h-[50px]" name="passport_issue_place">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Bank Name</label>
                        <input type="text" class="form-control h-[50px]" name="bank_name">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Bank Branch Name</label>
                        <input type="text" class="form-control h-[50px]" name="bank_branch_name">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Bank Account Number</label>
                        <input type="text" class="form-control h-[50px]" name="bank_account_number" required="">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Electronic Dividend Flag</label>
                        <input type="text" class="form-control h-[50px]" name="electronic_dividend_flag">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Tax Exemption Flag</label>
                        <input type="text" class="form-control h-[50px]" name="tax_exemption_flag">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Tax Identification Number</label>
                        <input type="text" class="form-control h-[50px]" name="tax_identification_number">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Exchange ID</label>
                        <input type="text" class="form-control h-[50px]" name="exchange_id">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Trading ID</label>
                        <input type="text" class="form-control h-[50px]" name="trading_id">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Bank Routine Number</label>
                        <input type="text" class="form-control h-[50px]" name="bank_routine_number">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Bank Identification Code</label>
                        <input type="text" class="form-control h-[50px]" name="bank_identification_code">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">International Bank Account Number</label>
                        <input type="text" class="form-control h-[50px]" name="international_bank_account_number">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Bank Swift Code</label>
                        <input type="text" class="form-control h-[50px]" name="bank_swift_code">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">First Holder National ID</label>
                        <input type="text" class="form-control h-[50px]" name="first_holder_national_id">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Second Holder National ID</label>
                        <input type="text" class="form-control h-[50px]" name="second_holder_national_id">
                      </div>
                      <div class="form-group mt-5">
                        <label class="form-label uppercase font-semibold">Third Holder National ID</label>
                        <input type="text" class="form-control h-[50px]" name="third_holder_national_id">
                      </div>

                        <div class="text-right mt-5">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-[150px] h-[50px] mr-1 uppercase font-semibold font-medium">Cancel</button>
                            <button type="button" class="btn btn-primary w-[150px] h-[50px] uppercase font-medium">Save Account</button>
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout/' . $layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codeman/Downloads/Entertech-Stock-Profile/resources/views/pages/admin_panel/bo/open_bo_account.blade.php ENDPATH**/ ?>