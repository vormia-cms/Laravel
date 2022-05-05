{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3>
                    Edit Field Types :
                    <a href="{{ url('/vrm/fieldtypes') }}" class="btn btn-primary">
                        <!-- list check icon -->
                        Manage Field Types  <i class="bi bi-list-check"></i>
                    </a>
                </h3>
            </div>
            <div class="col-6 d-none d-md-block">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Type</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Section App --}}
@section('app')
<div class="page-content">
    <section class="vrm-content-zone">
        <!-- Main -->
        <div class="card">
            <div class="card-body px-0">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="title">Type Name</label>
                            <input type="text" class="form-control" placeholder="Select -> Access Level">
                            <small>This name will help during add Custom Field</small>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="title">Element/Input Type</label>
                            <select class="form-select">
                                <option>Text</option>
                                <option>Date</option>
                                <option>Email</option>
                                <option>Radio</option>
                                <option>Select</option>
                                <option>Number</option>
                                <option>Textarea</option>
                                <option>Password</option>
                                <option>Checkbox</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="title">Field Type</label>
                            <select class="form-select">
                                <option value="3">Posts</option>
                                <option value="3">Pages</option>
                                <option value="6">Users</option>
                                <option value="6">Access</option>
                                <option value="6">Fields</option>
                                <option value="6">Defaults</option>
                                <option value="6">Settings</option>
                                <option value="2">Inheritance</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="title">Relationship</label>
                            <select class="form-select">
                                <option value="3">None</option>
                                <option value="3">And</option>
                                <option value="6">With</option>
                                <option value="6">Only</option>
                                <option value="6">Match</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">SQL Helper</label>
                            <input type="text" class="form-control" placeholder="(SQL:) select * from this.type where this.relationship users.user_email != this.input">
                            <small>Write your sql code here</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Description</label>
                            <textarea class="form-control" rows="5"></textarea>
                            <small>Description usually help you to understand the field type purpose.</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Extra -->
                    <div class="vrm-helper-extra" section-type="helper-extra"></div>
                </div>
            </div>

            <!-- Action -->
            <div class="card-footer">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-6">
                        <a href="" class="vrm-color-red">Delete Field</a>
                    </div>
                    <div class="col-lg-4 col-6">
                        <button type="button" class="btn btn-sm btn-success w-100">
                            <i class="bi bi-cursor-fill"></i> Update
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Main -->
    </section>
</div>
@endsection
