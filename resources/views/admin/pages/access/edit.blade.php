{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3>
                    Edit Access :
                    <a href="{{ url('/vrm/access') }}" class="btn btn-primary">
                        <!-- list check icon -->
                        Manage Access <i class="bi bi-list-check"></i>
                    </a>
                </h3>
            </div>
            <div class="col-6 d-none d-md-block">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Access</li>
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
            <div class="col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-body px-0">

                        <div class="row mb-3">
                            <div class="col-md-5 col-sm-12 mb-3">
                                <div class="vrm-sec-box">
                                    <div id="typeModule" data-bs-toggle="collapse" data-bs-target="#collapseModule" aria-expanded="false" aria-controls="collapseModule" role="button">
                                        <div class="px-1 py-0 vrm-bg-color-dark">
                                            <div class="row">
                                                <div class="col-10">
                                                    <h4 class="card-title vrm-color-white">Create Module</h4>
                                                </div>
                                                <div class="col-2">
                                                    <div class="collapse-icon float-end">
                                                        <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseModule" class="collapse pt-1" aria-labelledby="typeModule" data-parent="#cardAccordion">
                                        <div class="row px-2 mt-2 justify-content-end">
                                            <div class="col-md-9 col-sm-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-12 col-12">
                                                        <input type="text" class="form-control" name="" placeholder="Enter Module Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 float-end">
                                                <button class="btn btn-sm btn-info vrm-plug-btn vrm-plug-save w-100">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-12 mb-3">
                                <div class="vrm-sec-box">
                                    <div id="typePermission" data-bs-toggle="collapse" data-bs-target="#collapsePermission" aria-expanded="false" aria-controls="collapsePermission" role="button">
                                        <div class="px-1 py-0 vrm-bg-color-dark">
                                            <div class="row">
                                                <div class="col-10">
                                                    <h4 class="card-title vrm-color-white">Permission List</h4>
                                                </div>
                                                <div class="col-2">
                                                    <div class="collapse-icon float-end">
                                                        <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapsePermission" class="collapse pt-1" aria-labelledby="typePermission" data-parent="#cardAccordion">
                                        <div class="row px-2 mt-2 vrm-permission-list">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="form-check-input form-check-primary form-check-glow access-all" checked name="">
                                                        <label class="form-check-label" for="">All/CRUD</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                        <label class="form-check-label" for="">View/Read</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                        <label class="form-check-label" for="">Add/Create</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                        <label class="form-check-label" for="">Edit/Update</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="form-check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="form-check-input form-check-primary form-check-glow" disabled name="">
                                                        <label class="form-check-label" for="">Remove/Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row px-1 mt-2">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="title">Visibility</label>
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="visibility" checked>
                                                                <label class="form-check-label" for="">
                                                                    Global
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="visibility">
                                                                <label class="form-check-label" for="">
                                                                    Private
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="visibility">
                                                                <label class="form-check-label" for="">
                                                                    Protected
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="visibility">
                                                                <label class="form-check-label" for="">
                                                                    Public
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <small>When you call access level Private won't be visible unless requested.</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Access Type</label>

                                    <div class="row vrm-access-type">
                                        <div class="col-md-6 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input per-module" type="radio" name="type" checked>
                                                <label class="form-check-label" for="">
                                                    Per Module
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input per-user" type="radio" name="type">
                                                <label class="form-check-label" for="">
                                                    Per User
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12">
                                <div class="row vrm-access">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="title">Modules Allowed</label>
                                            <select class="form-select vrm-per-module">
                                                <optgroup label="Post">
                                                    <option>All</option>
                                                    <option>Post</option>
                                                    <option>Tags</option>
                                                    <option>Category</option>
                                                    <option>Comments</option>
                                                </optgroup>
                                                <option>Pages</option>
                                                <optgroup label="Tools">
                                                    <option>All</option>
                                                    <option>Inheritance</option>
                                                    <option>Shortcode</option>
                                                    <option>Widgets</option>
                                                    <option>Helpers</option>
                                                    <option>Fields</option>
                                                </optgroup>
                                                <option>Users</option>
                                            </select>
                                            <small>Permission will be assign to these Modules</small>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 vrm-per-user">
                                        <div class="form-group">
                                            <label for="title">Select User</label>
                                            <select class="choices form-select multiple-remove" multiple="multiple">
                                                <option>John Doe (Doe of John) 22</option>
                                                <option>Jane Doe () 20</option>
                                            </select>
                                            <small>Permission will be assign to a user</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Access Name</label>
                                    <input type="text" class="form-control" placeholder="Blog Author">
                                    <small>This name will be show as user access.</small>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Access Slug</label>
                                    <input type="text" class="form-control" placeholder="URL friendly name (author)">
                                    <small>Lowercase url-link, Vormia can also generate this for you.</small>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                    <small>More info about the access level.</small>
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
                        <div class="row justify-content-between">
                            <div class="col-lg-4 col-6">
                                <a href="" class="vrm-color-red">Delete Access</a>
                            </div>
                            <div class="col-lg-4 col-6">
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
