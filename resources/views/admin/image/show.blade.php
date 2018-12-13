@extends('layouts.app')
@section('content')
<div class="container">
  <div class=" ">
    <a href="/admin/image/create" class="btn btn-info" role="button">
      Create new</a>
  </div>
    <table class="table table-bordered mt-2">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Image Path</th>
                <th> Image</th>
                <th> Status</th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
            <?php $pos=1 ?>
            @foreach($data as $d)
            
              <tr>
                <th>{{$pos++}}</th>
                <td>{{ $d->imgpath }}</td>
                <td>
                    <img src="{{asset('/uploads/'.$d->imgpath)}}" alt="{{asset('/uploads/web1.PNG')}}" height="120px" width="120px">
                </td>
                  @if($d->status==0)
                    <td>
                      Unpublish
                    </td>
                  @else
                    <td>
                        Publish
                    </td>
                  @endif
                <td>
                  <div class="row p-2 ">
                      <a href="{{ url('/admin/image/'.$d->id.'/edit') }}"  class="btn btn-primary" role="button">edit</a>
                      <button role="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                          Delete
                      </button>
                        <form action="{{ url('/admin/image/'.$d->id) }}" method="post">
                          {!! method_field('delete') !!}
                          {!! csrf_field() !!}
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure? you Want to delete this picture?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Confirm</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>               
</div>

@endsection