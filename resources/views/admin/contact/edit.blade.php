@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="float-center ">
        <form enctype="multipart/form-data" method="post" action="{{url('admin/contact/'.$data->id)}}">
          @method('PATCH')
          {{ csrf_field() }}
          <div class="col-md-8">
                <div class="form-group row">
                        <div class="col-2">
                            <select class="form-control inputstl" name="status">
                                <option @if($data->status == "0") {{"selected" }} @endif value="0">Pending</option>
                                <option @if($data->status == "1") {{"selected" }} @endif value="1">Contacting</option>
                                <option @if($data->status == "2") {{"selected" }} @endif value="2">Contacted</option>
                                </select>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary  btn-md" >Update</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>
</div>
@endsection
