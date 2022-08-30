
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Scheme Master</span>
        <a class="btn btn-primary btn-sm modal-with-move-anim" style="float:right" href="#addSchemeModal">Add Scheme</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Sl No.</th>
                <th>Scheme Name</th>
                <th>Department</th>
                <th>Created By</th>
                <th>Created On</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->scheme_name); ?></td>
                <td><?php echo e($item->dept->name); ?></td>
                <td>
                  <?php if($item->user): ?>
                  <?php echo e($item->user->name); ?>

                  <?php endif; ?>
                </td>
                <td><?php echo e(Carbon\Carbon::parse($item->created_at)->format('d-m-Y')); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <?php echo e($data->links()); ?>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- modal -->
<div id="addSchemeModal" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
	<section class="card">
		<header class="card-header">
			<h2 class="card-title">Add Scheme</h2>
		</header>
		<div class="card-body">
			<div class="modal-wrapper">
        <form class="" action="<?php echo e(route('schemeMaster.store')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="">Scheme Name</label>
            <input type="text" name="scheme_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Department Name</label>
            <select name="dept_id" class="form-control" required>
              <option value="">Select</option>
              <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
			</div>
		</div>
		<footer class="card-footer">
			<div class="row">
				<div class="col-md-12 text-right">
					<button class="btn btn-primary" type="submit">Submit</button>
        </form>
					<button class="btn btn-default modal-dismiss">Cancel</button>
				</div>
			</div>
		</footer>
	</section>
</div>

<?php if(Session::has('scheme added')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Scheme Added.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cmmicrofinance\resources\views/schemes/index.blade.php ENDPATH**/ ?>