
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Dashboard') }}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Add New User</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Dashboard Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <label for="middle_i">Middle Initial</label>
                        <input type="text" name="middle_i" id="middle_i" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-2 md-5">
                    <div class="label form-label text-primary">Title</div>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter title">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 my-0">
                    <div class="label form-label text-primary">Description</div>
                    <textarea type="text" name="descrip" id="descrip" class="form-control" placeholder="Enter Description"></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
