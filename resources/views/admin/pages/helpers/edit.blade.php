{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Edit Helper :
                        <a href="{{ url('/vrm/helpers') }}" class="btn btn-primary">
                            <!-- list check icon -->
                            Manage Helpers <i class="bi bi-list-check"></i>
                        </a>
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Helper</li>
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
                    <div class="col-md-4 col-sm-12 ">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Helper Title">
                            <small>The title will help you identify helper</small>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 ">
                        <div class="form-group">
                            <label for="title">Parent Helper</label>
                            <select class="form-select">
                                <option>-- Parent Self --</option>
                                <option>Default Contact List</option>
                                <option>Social Media Links</option>
                                <option>Developer Contacts</option>
                            </select>
                            <small>Select Parent Helper</small>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 ">
                        <div class="form-group">
                            <label for="title">Slug</label>
                            <input type="text" class="form-control" placeholder="URL friendly name">
                            <small>Lowercase url-link, Vormia can also generate this for you.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Description</label>
                            <textarea class="form-control vrm-noresize" rows="3"></textarea>
                            <small>Description usually help you to understand the helper purpose.</small>
                        </div>
                    </div>
                </div>

                <div class="divider divider-left">
                    <div class="divider-text">Add</div>
                </div>

                <!-- start helpers input -->
                <div class="vrm-helpers-list">
                    <div class="vrm-helper-box">
                        <div class="row vrm-helper-keys" num="1">
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Key Name</label>
                                    <input type="text" class="form-control" placeholder="Helper Key" required>
                                    <small>The key will be escaped on save</small>
                                </div>
                            </div>

                            <div class="col-md-9 col-sm-12">
                                <div class="form-group">
                                    <label for="title">Value</label>
                                    <textarea class="form-control vrm-noresize" placeholder="Value of the Key"></textarea>
                                    <small>Can be any string,float, int or Json</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end helpers input -->

                <!-- start helpers action -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group float-end vrm-helper-action">
                            <a class="badge bg-info" id="add-helper">
                                Add Helper <i class="bi bi-plus"></i>
                            </a>
                            <a class="badge bg-danger" id="remove-helper">
                                Remove Helper <i class="bi bi-dash"></i>
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
                        <a href="" class="vrm-color-red">Delete Helper</a>
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
