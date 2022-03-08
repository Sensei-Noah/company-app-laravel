@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="text-center">Edit Company</h1>
<form action="/companies/{{ $company->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="companyName" name="name" value="{{ $company->name }}">
    </div>
    <div class="mb-3">
        <label for="CEO" class="form-label">CEO</label>
        <input type="text" class="form-control" id="CEO" name="CEO" value="{{ $company->CEO }}">
    </div>
    <div class="mb-3">
        <label for="pvmCode" class="form-label">PVM_code</label>
        <input type="number" class="form-control" id="pvmCode" name="pvm_code" value="{{ $company->pvm_code }}">
    </div>
    <div class="mb-3">
        <label for="Address" class="form-label">Address</label>
        <input type="text" class="form-control" id="Address" name="address" value="{{ $company->address }}">
    </div>
    <div class="mb-3">
        <label for="phoneNumber" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="phoneNumber" name="phone_number" value="{{ $company->phone_number }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $company->email }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Company Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $company->description }}">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

@endsection
