<div class="form-group">
  <label for="{{$name}}">{{$label}}</label>
  <select class="form-control" name="{{$name}}" id="{{$name}}" {{$attributes}}>
    {{$slot}}
  </select>
</div>
