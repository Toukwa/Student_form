@extends('layout')

@section('title', 'Student List')

@section('content')
  <div class="container">
    <h2 class="text-center mb-4">Student Information Form</h2>

    <!-- Input Form -->
    <div class="card p-4 shadow-sm mb-4">
      <form action="" method="">
      <div class="row g-3">
        <div class="col-md-2">
          <input type="text" class="form-control" placeholder="Student ID">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Course and Year">
        </div>
        <div class="col-md-1 d-grid">
          <button class="btn btn-primary">Add</button>
        </div>
      </div>
    </form>
    </div>

    <!-- Search -->
    <div class="input-group mb-2">
      <form action="" method="" class="d-flex w-100">
        <input type="text"  class="form-control" placeholder="Search by name">
        <button class="btn btn-secondary">Search</button>
      </form>
    </div>

    <!-- Table -->
    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>Student ID</th>
              <th>Name</th>
              <th>Course & Year</th>
            </tr>
          </thead>
          
          <tbody>
          @foreach($studentlist as $student)
            <tr>
              <th>{{$student['id']}}</th>
              <th>{{$student['name']}}</th>
              <th>{{$student['courseyear']}}</th>
            </tr>
          @endforeach
          </tbody> 
        </table>
      </div>
    </div>
  </div>
@endsection
