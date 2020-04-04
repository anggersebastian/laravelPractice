@extends('layouts.main')
@section('content')

<div class="container">
<h1> Home Page</h1> 

@if (session('successMsg'))

<div class="alert alert-success" role="alert">
  {{ session('successMsg') }}
</div>

@endif

@if (session('deleteMsg'))

<div class="alert alert-danger" role="alert">
  {{ session('deleteMsg') }}
</div>

@endif



<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    ?>
    @foreach($students as $student)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $student->nama }}</td>
      <td>{{ $student->kelas }}</td>
      <td>{{ $student->alamat }}</td>
      <td>{{ $student->phone }}</td>
      <td> <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit',$student->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

        || 

        <form method="POST" id="delete-form-{{ $student->id }}" action="{{ route('delete',$student->id) }}" style="display: none;">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        </form>

        <a class="btn btn-raised btn-danger btn-sm" href="" onclick="if (confirm('Are you sure to delete this data?')) {
            event.preventDefault();
            document.getElementById('delete-form-{{ $student->id }}').submit();
        } else {
            event.preventDefault();
        }

        ">
        <i class="fa fa-trash" aria-hidden="true"></i></a>
       </td>
    </tr>

    @endforeach
  </tbody>
</table>      
    {{ $students->links("pagination") }}
</div>

@endsection

