@extends('layouts.app')
@section('content')
<div class="container">

    <table class="table table-resposnsive table-bordered mt-2">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Name</th>
                <th> Email</th>
                <th> phone</th>
                <th> Subject</th>
                <th> Message</th>
                <th> Status</th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
            <?php $pos=1 ?>
            @foreach($data as $d)
              <tr>
                <th>{{$pos++}}</th>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->phone }}</td>
                <td>{{ $d->subject }}</td>
                <td>{{ $d->message }}</td>
                @if($d->status==0)
                    <td>Pending</td>
                @elseif($d->status==1)
                    <td>Contacting</td>
                @else
                    <td>Contacted</td>
                  @endif

                <td>
                  <div class="row p-2">
                      <a href="{{ url('/admin/contact/'.$d->id.'/edit') }}" role="button" class="btn btn-primary">edit</a>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                          Delete
                        </button>
                        <form action="{{ url('/admin/contact/'.$d->id) }}" method="post">
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
                  </div>
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