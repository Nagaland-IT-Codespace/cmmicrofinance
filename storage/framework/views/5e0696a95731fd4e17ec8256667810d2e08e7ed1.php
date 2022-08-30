<?php $__env->startSection('content'); ?>






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

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cmmicrofinance\resources\views/dashboard.blade.php ENDPATH**/ ?>