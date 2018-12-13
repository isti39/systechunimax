@extends('layouts.app')
@section('content')
<div class="container">
        <div class="float-center ">
            <form enctype="multipart/form-data" method="post" action="{{url('admin/image/')}}">
                    <!-- @method('PATCH') -->
                    {{ csrf_field() }}
                    <div class="form-group row">
                    <label class="col-2 col-form-label">Upload a new Slider</label>
                    <div class="col-6">
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <select class="form-control inputstl" name="status">
                            <option value="1">Publish</option>
                            <option value="0">Not publish </option>
                            </select>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary  btn-md" >Upload</button>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection




