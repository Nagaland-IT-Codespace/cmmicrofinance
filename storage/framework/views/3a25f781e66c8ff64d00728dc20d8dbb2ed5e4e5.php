
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Edit User Details
      </div>
      <div class="card-body">
          <form class="" action="<?php echo e(route('userMaster.update', $data->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_method" value="PUT">

            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($data->name); ?>" required>
              </div>

              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($data->email); ?>" required>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="mobile">Mobile No</label>
                <input type="text" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" value="<?php echo e($data->mobile); ?>" required>
              </div>

              <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                  <option value="<?php echo e($data->role); ?>" selected ><?php echo e($data->role); ?></option>
                  <option disabled> -- Select -- </option>
                  <option value="ADMIN">ADMIN</option>
                  <option value="DC">DC</option>
                  <option value="DEPT">DEPT</option>
                </select>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="district">District</label>
                <select class="form-control" id="district" name="district">
                  <option value="<?php echo e($data->district); ?>" selected ><?php echo e($data->district); ?></option>
                  <option disabled> -- Select -- </option>
                  <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($district->id); ?>"><?php echo e($district->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="dept">Department</label>
                <select class="form-control" id="dept" name="dept">
                  <option value="<?php echo e($data->dept); ?>" selected><?php echo e($data->dept); ?></option>
                  <option disabled> -- Select -- </option>
                  <?php $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($dept->id); ?>"><?php echo e($dept->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-sm btn-primary">Update User Details</button>
          </form>


      </div>
    </div>
  </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cmmicrofinance\resources\views/users/edit.blade.php ENDPATH**/ ?>