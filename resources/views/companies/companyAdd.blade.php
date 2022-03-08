@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="text-center">Add a Company</h1>
<form action="/companies" method="POST">
    @csrf
    <div class="mb-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="companyName" name="name" placeholder="Enter a Company Name">
    </div>
    <div class="mb-3">
        <label for="CEO" class="form-label">CEO</label>
        <input type="text" class="form-control" id="CEO" name="CEO" placeholder="Enter a CEO">
    </div>
    <div class="mb-3">
        <label for="pvmCode" class="form-label">PVM_code</label>
        <input type="number" class="form-control" id="pvmCode" name="pvm_code" placeholder="Enter a PVM Code">
    </div>
    <div class="mb-3">
        <label for="Address" class="form-label">Address</label>
        <input type="text" class="form-control" id="Address" name="address" placeholder="Enter an Address">
    </div>
    <div class="mb-3">
        <label for="phoneNumber" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="phoneNumber" name="phone_number" placeholder="Enter a Phone Number">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter an Email">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Company Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Enter a Company Description">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

@endsection
