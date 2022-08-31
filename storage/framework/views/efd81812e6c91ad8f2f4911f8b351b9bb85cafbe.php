<?php $__env->startSection('content'); ?>
<div class="row mt-5">
  <?php echo $__env->make('dashboardPartials.card_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('dashboardPartials.department_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>





<!-- script for the search function -->
<?php if(Session::has('Scheme Inactive')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Oops',
			text: 'The Scheme is inactive.',
			type: 'error',
			shadow: true
		});
	});
</script>
<?php endif; ?>
<?php if(Session::has('Submitted')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Your application has been submitted.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/dashboard.blade.php ENDPATH**/ ?>