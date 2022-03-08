@extends('layouts.app')
@section('content')

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="font-weight-light">Company List</h1>
      <p class="lead text-muted">All of the companies that are registered</p>
      <p>
        <a href="/companies/companyAdd" class="btn btn-primary my-2">Add a company</a>
        {{-- <a href="" class="btn btn-secondary my-2">Secondary action</a> --}}
      </p>
    </div>
  </div>
</section>

<div class="container">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($company as $companys)
    <tr>
      <th scope="row">{{ $companys->id }}</th>
      <td><a href="companies/single/{{ $companys->name }}" class="text-decoration-none text-dark">{{ $companys->name }}</a></td>
      <td>{{ $companys->address }}</td>
      <td>{{ $companys->email }}</td>
      <td>
        <div class="btn btn-success">
          <a class="text-decoration-none text-dark" href="companies/{{ $companys->id }}/edit">
            Edit
          </a>
        </div>
      </td>
      <td>
        <div>
        <form action="companies/{{ $companys->id }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $company->links() }}
</div>
@endsection

