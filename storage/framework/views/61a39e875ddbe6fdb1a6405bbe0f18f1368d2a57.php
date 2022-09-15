<?php $__env->startSection('content'); ?>
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-primary">
        Add New Application
      </div>
      <div class="card-body">
          <form class="" action="<?php echo e(route('applicationForm.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="district" value="<?php echo e(Auth::User()->district); ?>" >
            <div class="row pt-2">
              <div class=" col-md-6">
                <div class="form-group">
                  <label for="scheme_id">Scheme</label>
                  <select class="form-control" id="scheme_id" name="scheme_id">
                    <option selected disabled> -- Select -- </option>
                    <?php $__currentLoopData = $schemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($scheme->id); ?>"><?php echo e($scheme->scheme_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="proposal_from">Company Type</label>
                <select class="form-control" id="proposal_from" name="proposal_from">
                  <option selected disabled> -- Select -- </option>
                  <option value="INDIVIDUAL">INDIVIDUAL</option>
                  <option value="SHG">SHG</option>
                  <option value="FPO">FPO</option>
                </select>
              </div>
            </div>

            <div class="row pt-2">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="block">Block</label>
                  <input type="text" class="form-control" id="block" name="block" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="village">Village</label>
                  <input type="text" class="form-control" id="village" name="village" required>
                </div>
              </div>
            </div>

            <div class="row pt-2">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="proposal_title">Title of Proposal</label>
                  <input type="text" class="form-control" id="proposal_title" name="proposal_title" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="name_of_proposee">Name of Proposee</label>
                  <input type="text" class="form-control" id="name_of_proposee" name="name_of_proposee" required>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="address_of_proposee">Address of Proposee</label>
                  <input type="text" class="form-control" id="address_of_proposee" name="address_of_proposee" required>
                </div>
              </div>
            </div>

            <div class="row pt-2">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="expected_outcome">Expected Outcome</label>
                  <input type="text" class="form-control" id="expected_outcome" name="expected_outcome" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="project_duration">Project Duration (in months)</label>
                  <input type="number" class="form-control" id="project_duration" name="project_duration" maxlength="2" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="project_outlay">Project Outlay (in INR)</label>
                  <input type="number" class="form-control" id="project_outlay" name="project_outlay" required>
                </div>
              </div>
            </div>

            <div class="row pt-2">
              <div class="col-md-12">
                  <?php if (isset($component)) { $__componentOriginal7b8dad879d0302c6e6601deae08cd502e932b8e1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormUpload::class, ['label' => 'Upload the Project Proposal','name' => 'project_file'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FormUpload::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b8dad879d0302c6e6601deae08cd502e932b8e1)): ?>
<?php $component = $__componentOriginal7b8dad879d0302c6e6601deae08cd502e932b8e1; ?>
<?php unset($__componentOriginal7b8dad879d0302c6e6601deae08cd502e932b8e1); ?>
<?php endif; ?>
              </div>
            </div>

            <hr>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
          </form>


      </div>
    </div>
  </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/applicationForms/add.blade.php ENDPATH**/ ?>