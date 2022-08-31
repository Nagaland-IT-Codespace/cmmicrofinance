<div class="form-group @error($name) has-danger @enderror row">
  <label class="col-lg-3 control-label text-lg-right pt-2" for="{{$name}}">{{$label}}</label>
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
          <input type="file" name="{{$name}}" id="{{$name}}" {{$attributes}}/>
        </span>
        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
        @error($name)
        <span style="color:red">{{ $message }}</span>
        @enderror
      </div>
    </div>
  </div>
</div>
