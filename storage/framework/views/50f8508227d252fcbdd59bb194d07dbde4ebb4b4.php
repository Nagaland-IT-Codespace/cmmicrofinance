<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <span class="card-title">Department Master</span>
        <a class="btn btn-primary btn-sm modal-with-move-anim" style="float:right" href="#addDepartmentModal"><i class='bx bx-list-plus' ></i> Add Department</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Sl No.</th>
                <th>Name</th>
                <th>Created On</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td width="70%"><?php echo e($item->name); ?></td>
                <td><?php echo e(Carbon\Carbon::parse($item->created_at)->format('d-m-Y')); ?></td>
                <td><button class="btn btn-sm btn-danger modal-with-move-anim editSchemeBtn" href="#editDepartmentModal" data-id="<?php echo e($item->id); ?>"><i class='bx bxs-edit' ></i> Edit</button></td>
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
<div id="addDepartmentModal" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
	<section class="card">
		<header class="card-header">
			<h2 class="card-title">Add Department</h2>
		</header>
		<div class="card-body">
			<div class="modal-wrapper">
        <form class="" action="<?php echo e(route('deptMaster.store')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="">Department Name</label>
            <input type="text" name="name" class="form-control" required>
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
<div id="editDepartmentModal" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
	<section class="card">
		<header class="card-header">
			<h2 class="card-title">Edit Department</h2>
		</header>
		<div class="card-body">
			<div class="modal-wrapper">
        <form class="editDepartmentForm" action="" method="POST">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <label for="">Department Name</label>
            <input type="text" name="name" class="form-control" id="dept_name" required>
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

<?php if(Session::has('dept added')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Department Added.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>
<?php if(Session::has('dept updated')): ?>
<script type="text/javascript">
	$(document).ready(function(){
		new PNotify({
			title: 'Success',
			text: 'Department Updated.',
			type: 'success',
			shadow: true
		});
	});
</script>
<?php endif; ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.editSchemeBtn').click(function(e){
               e.preventDefault();
               dataId = $(this).attr('data-id');
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
              jQuery.ajax({
                    url: "<?php echo e(url('/')); ?>/deptMaster/"+dataId,
                    method: 'get',
                    success: function(result){
                       console.log(result);
                       $('.editDepartmentForm').attr('action',"<?php echo e(url('/')); ?>/deptMaster/"+dataId)
                       $('#dept_name').val(result.data.name);
                    },error: function(response) {

                      new PNotify({
                        title: 'Error',
                        text: 'Transaction ID not found.',
                        type: 'error',
                        shadow: true
                      });
                    }
                  });
            });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mozhui/Personal/playground/cmmicrofinance/resources/views/departments/index.blade.php ENDPATH**/ ?>