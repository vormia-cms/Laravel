{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Profile : <span class="vrm-color-orange">John Doe</span>
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
                                    <label for="title">Username</label>
                                    <input type="text" class="form-control" disabled placeholder="admin">
                                    <small>Cannot be changed</small>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Slug</label>
                                    <input type="text" class="form-control" placeholder="URL friendly name">
                                    <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Public Name</label>
                                    <input type="text" class="form-control" placeholder="Nickname">
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text vrm-color-orange">Personal Info</div>
                        </div>

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
                                    <label for="title">Profile Picture</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for=""><i class="bi bi-upload"></i></label>
                                        <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" id="">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Bio Info</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                    <small>Your Biography informantion.</small>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text vrm-color-orange">Contact Info</div>
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
                                    <label for="title">Website</label>
                                    <input type="text" class="form-control" placeholder="www.xyz.com">
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text vrm-color-orange">Account Manage</div>
                        </div>

                        <div class="row">
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
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Current Passsword</label>
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
                        <div class="row justify-content-end">
                            <div class="col-5">
                                <button type="button" class="btn btn-sm btn-success w-100 float-end">
                                    <i class="bi bi-cursor-fill"></i> Update Profile
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
