<?php $__env->startSection('content'); ?>
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Application Forms</span>
        <?php if(Auth::User()->role == 'DC'): ?>
        <a href="<?php echo e(route('applicationForm.create')); ?>"class="btn btn-primary btn-sm" style="float:right">Add New Application</a>
        <?php endif; ?>
      </div>
      <div class="card-body">
        <table class="table table-striped table-sm datatable">
          <thead>
            <tr>
              <th>Scheme</th>
              <th>Org. Type</th>
              <th>Location</th>
              <th>Title of Proposal</th>
              <th>Proposee Name</th>
              <th>Project Duration</th>
              <th>Project Outlay</th>
              <th>Project Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($item->scheme->scheme_name); ?></td>
              <td><?php echo e($item->proposal_from); ?></td>
              <td><?php echo e($item->district->name); ?>,<?php echo e($item->block); ?>, <?php echo e($item->village); ?> </td>
              <td><?php echo e($item->proposal_title); ?></td>
              <td><?php echo e($item->name_of_proposee); ?></td>
              <td><?php echo e($item->project_duration); ?></td>
              <td><?php echo e($item->project_outlay); ?></td>
              <td><?php echo e($item->status); ?></td>
              <td>
                <a href="<?php echo e(route('applicationForm.show', $item->id )); ?>" class="btn btn-sm btn-primary">View Form</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php if(Session::has('application-added')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'New Application has been added.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>

<?php if(Session::has('application-updated')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Application has been updated.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/applicationForms/index.blade.php ENDPATH**/ ?>