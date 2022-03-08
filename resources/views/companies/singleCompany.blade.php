@extends('layouts.app')
@section('content')

@foreach ($single_company as $company)
@endforeach
<div class="container">
    <h1 class="text-center">{{ $companyNames }}</h1>
    <ul class="list-group list-group-flush">
        <label class="col-sm-2 control-label text-muted">Name</label>
        <li class="list-group-item">{{ $company->name }}</li>
        <label class="col-sm-2 control-label text-muted">CEO</label>
        <li class="list-group-item">{{ $company->CEO }}</li>
        <label class="col-sm-2 control-label text-muted">PVM Code</label>
        <li class="list-group-item">{{ $company->pvm_code }}</li>
        <label class="col-sm-2 control-label text-muted">Address</label>
        <li class="list-group-item">{{ $company->address }}</li>
        <label class="col-sm-2 control-label text-muted">Phone Number</label>
        <li class="list-group-item">{{ $company->phone_number }}</li>
        <label class="col-sm-2 control-label text-muted">Email</label>
        <li class="list-group-item">{{ $company->email }}</li>
        <label class="col-sm-2 control-label text-muted">Description</label>
        <li class="list-group-item">{{ $company->description }}</li>
    </ul>
</div>

@endsection
