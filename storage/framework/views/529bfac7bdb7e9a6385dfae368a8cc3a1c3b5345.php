<div class="form-group <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> row">
  <label class="col-lg-3 control-label text-lg-right pt-2" for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
  <div class="col-lg-6">
    <div class="fileupload fileupload-new" data-provides="fileupload">
      <div class="input-append">
        <div class="uneditable-input">
          <i class="fas fa-file fileupload-exists"></i>
          <span class="fileupload-preview"></span>
        </div>
        <span class="btn btn-default btn-file">
          <span class="fileupload-exists">Change</span>
          <span class="fileupload-new">Select file</span>
          <input type="file" name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" <?php echo e($attributes); ?>/>
        </span>
        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
        <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span style="color:red"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /opt/homebrew/var/www/cmmicrofinance/resources/views/components/form-upload.blade.php ENDPATH**/ ?>