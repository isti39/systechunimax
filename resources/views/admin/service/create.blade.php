@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="float-center ">
        <form enctype="multipart/form-data" method="post" action="{{url('admin/service/')}}">
          {{ csrf_field() }}
        <div class="col-md-8">
          <div class="form-group row">
            <label class="col-3 col-form-label">Service Name</label>
            <div class="col-9">
              <input class="form-control" type="text" name="title">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-3 col-form-label">Service Description</label>
            <div class="col-9">
                <textarea class="form-control" rows="3"name="description"></textarea>
            </div>
          </div>
          <div class="form-group row">
              <label class="col-3 col-form-label">Upload logo</label>
              <div class="col-6">
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
              </div>
              <div class="col-3">
                    <select class="form-control inputstl" name="status">
                        <option value="1">Publish</option>
                        <option value="0">Not publish </option>
                        </select>
                </div>
          </div>


          <button type="submit" class="btn btn-primary float-right btn-lg" >Submit</button>
        </div>
        </form>
      
    </div>
    <br>


</div>
@endsection
