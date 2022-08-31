<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title"><b>Application Form for <?php echo e($data->scheme->scheme_name); ?></b></span>
      </div>
      <div class="card-body">
        <p><b>Name of Proposee:</b> <?php echo e($data->name_of_proposee); ?></p>
        <p><b>Organization Type:</b> <?php echo e($data->proposal_from); ?></p>
        <p><b>Address of Firm:</b> <?php echo e($data->village); ?>, <?php echo e($data->block); ?> Block, <?php echo e($data->district->name); ?> </p>
        <p><b>Expected Outcome:</b> <?php echo e($data->expected_outcome); ?></p>
        <p><b>Project Duration (in months):</b> <?php echo e($data->project_duration); ?></p>
        <p><b>Project Outlay (in INR):</b> <?php echo e($data->project_outlay); ?></p>
        <p><a href="#" class="btn btn-sm btn-danger" target="_blank">View Complete Proposal Application</a> </p>
      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/applicationForms/show.blade.php ENDPATH**/ ?>