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

<h1> Create Page</h1> 


<!-- Default form register -->
<form class="text-center" action="{{ route('store') }}" method="POST">

	{{ csrf_field() }}

    <p class="h4 mb-4">Add Student</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="nama" placeholder="Nama" >
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="kelas" placeholder="Kelas" >
        </div>
    </div>

    <!-- E-mail -->
    <input type="text" id="defaultRegisterFormFirstName" class="form-control mb-4" name="alamat" placeholder="Alamat" >

    <!-- Password -->

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

    <!-- Newsletter -->

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

    <!-- Social register -->
    
    <!-- Terms of service -->
    

</form>
<!-- Default form register -->
</div> <br><br><br><br>


@endsection