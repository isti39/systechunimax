@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-striped table-responsive table-bordered">
            <thead>
              <tr class="">
                <th scope="col">Serial</th>
                <th scope="col">Company Name</th>
                <th scope="col">Founder</th>
                <th scope="col">About</th>
                <th scope="col">Mission</th>
                <th scope="col">Vision</th>
                <th scope="col">Address</th>
                <th scope="col">logo</th>
                <th scope="col">copy right</th>
                <th scope="col">Facebook</th>
                <th scope="col">Google</th>
                <th scope="col">Twitter</th>
                <th scope="col">Linkdin</th>
              </tr>
            </thead>
            @foreach($data as $d)
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{ $d->company_name }}</td>
                <td>{{ $d->founder }}</td>
                <td>{{ $d->about }}</td>
                <td>{{ $d->mission }}</td>
                <td>{{ $d->vision }}</td>
                <td>{{ $d->full_address }}</td>
                <td>{{ $d->logopath }}
                <img src="{{asset('/uploads/'.$d->logopath)}}" alt="{{asset('/uploads/web1.PNG')}}" height="120px" width="120px">
                </td>
                <td>{{ $d->copyright }}</td>
                <td>{{ $d->google }}</td>
                <td>{{ $d->facebook }}</td>
                <td>{{ $d->linkdin }}</td>
                <td>{{ $d->twitter }}</td>
                <td><a href="{{ url('/admin/general/'.$d->id.'/edit') }}" type="button" class="btn btn-primary">edit</a></td>
                <!-- <td><a href="{{ url('/admin/general/'.$d->id) }}"type="button" class="btn btn-danger disabled">delete</a></td> -->
              </tr>
            </tbody>
            @endforeach
          </table>          
</div>

@endsection