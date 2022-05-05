{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Edit Field :
                        <a href="{{ url('/vrm/fields') }}" class="btn btn-primary">
                            <!-- list check icon -->
                            Manage Fields <i class="bi bi-list-check"></i>
                        </a>
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Field</li>
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
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Field Title">
                            <small>The title will help you identify field</small>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label for="title">Slug</label>
                            <input type="text" class="form-control" placeholder="URL friendly name">
                            <small>Lowercase url-link, Vormia can also generate this for you.</small>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="title">Description</label>
                            <input type="text" class="form-control" placeholder="About This Custom Field">
                            <small>Description usually help you to understand the field purpose.</small>
                        </div>
                    </div>
                </div>

                <div class="divider divider-left">
                    <div class="divider-text">Add</div>
                </div>

                <!-- start fields input -->
                <div class="vrm-fields-list">
                    <div class="vrm-field-box">
                        <div class="row vrm-field-keys" num="1">
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Key Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Field Key" required>
                                    <small>The key will be escaped on save</small>
                                </div>
                            </div>

                            <div class="col-md-10 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Structure</label>
                                    <div class="row">
                                        <div class="col-md-1 col-sm-12">
                                            <div class="form-check form-switch vrm-checkbox-switch">
                                                <input class="form-check-input vrm-checkbox-action" type="checkbox">
                                                <label class="form-check-label vrm-color-dark-orange" for="">Filter </label>
                                            </div>
                                        </div>
                                        <div class="col-md-11 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-12 mb-1">
                                                    <input type="text" class="form-control form-control-sm vrm-table-structure" disabled placeholder="Default varchar(255) NULL">
                                                </div>
                                                <div class="col-md-3 col-sm-12 mb-1">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Comments">
                                                </div>
                                                <div class="col-md-4 col-sm-12 mb-1">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Attributes| class='vrm-text' id='fieldID'">
                                                </div>
                                                <div class="col-md-4 col-sm-12 mb-1">
                                                    <select class="form-select form-select-sm vrm-select-structure">
                                                        <!-- input group -->
                                                        <optgroup label="Default">
                                                            <option>Text</option>
                                                            <option>Date</option>
                                                            <option>Email</option>
                                                            <option>Radio</option>
                                                            <option>Select</option>
                                                            <option>Number</option>
                                                            <option>Textarea</option>
                                                            <option>Password</option>
                                                            <option>Checkbox</option>
                                                        </optgroup>
                                                        <optgroup label="Inheritance">
                                                            <option>Select -> Parent Make</option>
                                                        </optgroup>
                                                        <optgroup label="Access">
                                                            <option>Radio -> All Access</option>
                                                            <option>Select -> Dealership/Individual</option>
                                                            <option>Checkbox -> All Expect Top Levels</option>
                                                        </optgroup>
                                                        <optgroup label="User">
                                                            <option>Select -> All User</option>
                                                            <option>Checkbox -> User Author List</option>
                                                            <option match="match">Email -> Match Against</option>
                                                            <option match="with">Password -> With Logname</option>
                                                        </optgroup>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 col-sm-12 mb-1">
                                                    <input type="text" class="form-control form-control-sm vrm-match-structure" disabled placeholder="fKey(mem_email) = tableCol(user.user_email)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fields input -->

                <!-- start fields action -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group float-end vrm-field-action">
                            <a class="badge bg-info" id="add-field">
                                Add Field <i class="bi bi-plus"></i>
                            </a>
                            <a class="badge bg-danger" id="remove-field">
                                Remove Field <i class="bi bi-dash"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- end helpers action -->


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
