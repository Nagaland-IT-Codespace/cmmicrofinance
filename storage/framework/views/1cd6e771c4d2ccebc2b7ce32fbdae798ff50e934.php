<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Grievances</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <p><b>Name: </b><?php echo e($data->name); ?></p>
            <p><b>Mobile:</b> <?php echo e($data->mobile); ?></p>
            <p><b>Email:</b> <?php echo e($data->email); ?></p>
            <p><b>Scheme:</b> <?php echo e($data->scheme->scheme_name); ?></p>
            <p><b>Department: </b><?php echo e($data->dept->name); ?></p>
            <p><b>District:</b> <?php echo e($data->district->name); ?></p>
            <p><b>Message: </b><?php echo e($data->message); ?></p>
          </div>
          <hr>
          <a href="#" class="btn btn-sm btn-primary">Reply</a> | <a href="<?php echo e(route('grievance.index')); ?>" class="btn btn-sm btn-danger">Back</a>
        </div>


      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mozhui/Personal/playground/cmmicrofinance/resources/views/grievances/view.blade.php ENDPATH**/ ?>