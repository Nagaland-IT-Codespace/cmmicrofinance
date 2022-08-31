<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Grievances</span>
      </div>
      <div class="card-body">
        <table class="table table-striped table-sm datatable">
          <thead>
            <tr>
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Scheme</th>
              <th>Message</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($item->name); ?></td>
              <td><?php echo e($item->mobile); ?></td>
              <td><?php echo e($item->email); ?></td>
              <td><?php echo e($item->scheme->scheme_name); ?></td>
              <td><?php echo e($item->message); ?></td>
              <td>
                <a href="<?php echo e(route('grievance.show', $item->id)); ?>" class="btn btn-sm btn-danger">View</a>
                <a href="#" class="btn btn-sm btn-success">Reply</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php if(Session::has('replied')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Reply sent.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/grievances/index.blade.php ENDPATH**/ ?>