<?php $__env->startSection('content'); ?>
<div class="row mt-5">
  <?php if (isset($component)) { $__componentOriginal249f421a739ef396d10c881522f152976d58f912 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DataCards::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('data-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\DataCards::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal249f421a739ef396d10c881522f152976d58f912)): ?>
<?php $component = $__componentOriginal249f421a739ef396d10c881522f152976d58f912; ?>
<?php unset($__componentOriginal249f421a739ef396d10c881522f152976d58f912); ?>
<?php endif; ?>
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