@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-resposnsive table-bordered mt-2">
            <thead>
              <tr>
                <th>Serial</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
            <?php $pos=1 ?>
            @foreach($data as $d)
              <tr>
                <th>{{$pos++}}</th>
                <td>{{ $d->email }}</td>
                
                <td>
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