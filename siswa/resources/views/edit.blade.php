@extends('layouts.main')
@section('content')

<div class="container"><br>

@if($errors->any())
@foreach ($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>

@endforeach
@endif

<h1> Edit Page</h1> 


<!-- Default form register -->
<form class="text-center" action="{{ route('update',$student->id) }}" method="POST">

	{{ csrf_field() }}

    <p class="h4 mb-4">Add Student</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" value="{{ $student->nama }}" name="nama" placeholder="Nama" >
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" value="{{ $student->kelas }}"name="kelas" placeholder="Kelas" >
        </div>
    </div>

    <!-- alamat -->
    <input type="text" id="defaultRegisterFormFirstName" class="form-control mb-4" value="{{ $student->alamat }}" name="alamat" placeholder="Alamat" >

    <!-- Password -->

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" value="{{ $student->phone }}" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

    <!-- Newsletter -->

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

    <!-- Social register -->
    
    <!-- Terms of service -->
    

</form>
<!-- Default form register -->
</div> <br><br><br><br>


@endsection