{{--Layout--}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Edit Category :
                        <a href="{{ url('/vrm/categories') }}" class="btn btn-primary">
                            <!-- list check icon -->
                            Manage Categories <i class="bi bi-list-check"></i>
                        </a>
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tag</li>
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" placeholder="Unique Category Name">
                                        <small>The title is how public will see.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
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
                                        <label for="title">Parent Category</label>
                                        <fieldset class="form-group">
                                            <select class="form-select">
                                                <option>-- Parent Self --</option>
                                                <option>Uncategorized</option>
                                            </select>
                                        </fieldset>
                                        <small>Select Parent category</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Description</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                        <small>Description usually help you to understand the tage purpose.</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Extra -->
                            <div class="vrm-blog-extra" section-type="blog-extra"></div>
                        </div>

                        <!-- Action -->
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 col-6">
                                    <a href="" class="vrm-color-red">Delete Category</a>
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
