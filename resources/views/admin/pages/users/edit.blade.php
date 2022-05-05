{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Edit User :
                        <a href="{{ url('/vrm/users') }}" class="btn btn-primary">
                            <!-- plus icon -->
                            Manage Users <i class="bi bi-list-check"></i>
                        </a>
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
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
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">First Name</label>
                                    <input type="text" class="form-control" placeholder="User First Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Last Name</label>
                                    <input type="text" class="form-control" placeholder="User Last Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Username</label>
                                    <input type="text" class="form-control" placeholder="Unique Username">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Email Address</label>
                                    <input type="text" class="form-control" placeholder="User Email">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Slug</label>
                                    <input type="text" class="form-control" placeholder="URL friendly name">
                                    <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Access Level</label>
                                    <select class="form-select">
                                        <option>author</option>
                                        <option>user</option>
                                        <optgroup label="Protected">
                                            <option>Admin</option>
                                            <option>Superadmin</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Passsword</label>
                                    <input type="password" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Confirm Passsword</label>
                                    <input type="password" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Admin Passsword</label>
                                    <input type="password" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Extra -->
                            <div class="vrm-blog-extra" section-type="blog-extra"></div>
                        </div>
                    </div>

                    <!-- Action -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-4 col-3">
                                <a href="" class="vrm-color-red">Delete</a>
                            </div>
                            <div class="col-md-4 col-5">
                                <button type="button" class="btn btn-sm btn-warning w-100">
                                    <i class="bi bi-lock-fill"></i> Lock Account
                                </button>
                            </div>
                            <div class="col-md-4 col-4">
                                <button type="button" class="btn btn-sm btn-success w-100">
                                    <i class="bi bi-cursor-fill"></i> Update
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Main -->
    </section>
</div>
@endsection
