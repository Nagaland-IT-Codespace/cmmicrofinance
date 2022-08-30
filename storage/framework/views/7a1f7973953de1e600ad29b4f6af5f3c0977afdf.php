<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Scheme Master</span>
        <a href="<?php echo e(route('userMaster.create')); ?>"class="btn btn-primary btn-sm" style="float:right">Add User</a>
      </div>
      <div class="card-body">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Name</th>
              <th>Role</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Department</th>
              <th>District</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($item->name); ?></td>
              <td><?php echo e($item->role); ?></td>
              <td><?php echo e($item->mobile); ?></td>
              <td><?php echo e($item->email); ?></td>
              <td><?php echo e($item->dept); ?></td>
              <td><?php echo e($item->disrtrict); ?></td>
              <td>
                <a href="<?php echo e(route('userMaster.edit', $item->id )); ?>" class="btn btn-sm btn-primary">Edit User</a>
                <a href="#" class="btn btn-sm btn-danger">Delete User</a>
                <a href="#" class="btn btn-sm btn-success">Change Pass</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php if(Session::has('user-added')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'New User Created.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>

<?php if(Session::has('user-updated')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'User Details Updated.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/users/index.blade.php ENDPATH**/ ?>