<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Add New User
      </div>
      <div class="card-body">
          <form class="" action="<?php echo e(route('userMaster.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>

              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>

            <div class="row pt-2">
              <div class="form-group col-md-6">
                <label for="mobile">Mobile No</label>
                <input type="text" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" required>
              </div>

              <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                  <option selected disabled> -- Select -- </option>
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
                  <option selected disabled> -- Select -- </option>
                  <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($district->id); ?>"><?php echo e($district->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="dept">Department</label>
                <select class="form-control" id="dept" name="dept">
                  <option selected disabled> -- Select -- </option>
                  <?php $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($dept->id); ?>"><?php echo e($dept->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-sm btn-primary">Create User</button>
          </form>


      </div>
    </div>
  </div>

</div>

<?php if(Session::has('user-added')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'New User Created',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/users/add.blade.php ENDPATH**/ ?>