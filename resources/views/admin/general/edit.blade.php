@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="float-center ">
        <form enctype="multipart/form-data" method="post" action="{{url('admin/general/'.$data->id)}}">
          @method('PATCH')
          {{ csrf_field() }}
        <div class="col-md-8">
          <div class="form-group row">
            <label class="col-3 col-form-label">Company Name</label>
            <div class="col-9">
              <input class="form-control" type="text" name="company_name"value="{{$data->company_name}}" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-form-label">Founder Name</label>
            <div class="col-9">
              <input class="form-control" type="text" name="founder" value="{{$data->founder}}" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-form-label">About</label>
            <div class="col-9">
                <textarea class="form-control" rows="3"name="about">{{$data->about}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-form-label">Mission</label>
            <div class="col-9">
                <textarea class="form-control" rows="3"name="mission">{{$data->mission}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-form-label">Vision</label>
            <div class="col-9">
                <textarea class="form-control" rows="3"name="vision">{{$data->vision}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-form-label">Address</label>
            <div class="col-9">
                <textarea class="form-control" rows="3" name="full_address">{{$data->full_address}}</textarea>
            </div>
          </div>
          <div class="form-group row">
              <label class="col-3 col-form-label">Upload logo</label>
              <div class="col-9">
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
              </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-form-label">copyright</label>
            <div class="col-9">
              <input class="form-control" type="text" value="{{$data->copyright}}"name="copyright" >
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-3 col-form-label">Facebook link</label>
            <div class="col-9">
              <input class="form-control" type="url" value="{{$data->facebook}}"name="facebook" >
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-3 col-form-label">Google link</label>
            <div class="col-9">
              <input class="form-control" type="url" value="{{$data->google}}"name="google" >
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-3 col-form-label">Twitter link</label>
            <div class="col-9">
              <input class="form-control" type="url" value="{{$data->twitter}}" name="twitter">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-3 col-form-label">Linkdin link</label>
            <div class="col-9">
              <input class="form-control" type="url" value="{{$data->linkdin}}" name="linkdin" >
            </div>
          </div>
          <input type="hidden" value="{{$data->id}}" name="id">
          <button type="submit" class="btn btn-primary float-right btn-lg" >Submit</button>
        </div>
        </form>
      
    </div>
    <br>


</div>
@endsection
