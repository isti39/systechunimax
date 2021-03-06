@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="float-center ">
        <form enctype="multipart/form-data" method="post" action="{{url('admin/testimonial/'.$data->id)}}">
          @method('PATCH')
          {{ csrf_field() }}
          <div class="col-md-8">
                <div class="form-group row">
                        <label class="col-3 col-form-label">Author Name</label>
                        <div class="col-9">
                          <input class="form-control" type="text" name="author" value="{{$data->author}}" >
                        </div>
                      </div>
                      <div class="form-group row">
                            <label class="col-3 col-form-label">Position</label>
                            <div class="col-9">
                              <input class="form-control" type="text" name="position"  value="{{$data->position}}">
                            </div>
                          </div>
            
                      <div class="form-group row">
                        <label class="col-3 col-form-label">Description</label>
                        <div class="col-9">
                            <textarea class="form-control" rows="3"name="description">{{$data->description}}
                            </textarea>
                        </div>
                      </div>
                      <div class="form-group row justify-content-end">
                              <div class="col-6">
                                    <select class="form-control inputstl " name="status"  value="{{$data->status}}">
                                            <option @if($data->status == "1") {{"selected" }} @endif value="1" >Publish</option>
                                            <option @if($data->status == "0") {{"selected" }} @endif value="0">Not publish </option>
                                            </select>
                            </div>
                            <div class="col-3">
                            <button type="submit" class="btn btn-primary float-right btn-lg" >Submit</button>
            
                            </div>
                      </div>
                      
                    </div>
            </div>
        </form>
    </div>
</div>
@endsection
