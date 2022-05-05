{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3>
                    Edit Inheritance :
                    <a href="{{ url('/vrm/inheritances') }}" class="btn btn-primary">
                        <!-- list check icon -->
                        Manage Inheritance <i class="bi bi-list-check"></i>
                    </a>
                </h3>
            </div>
            <div class="col-6 d-none d-md-block">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inheritance</li>
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
                            <div class="col-12">
                                <div class="vrm-sec-box">
                                    <div id="typeTool" data-bs-toggle="collapse" data-bs-target="#collapseType" aria-expanded="false" aria-controls="collapseType" role="button">
                                        <div class="px-1 py-0 vrm-bg-color-dark">
                                            <div class="row">
                                                <div class="col-10">
                                                    <h4 class="card-title vrm-color-white">Create Inheritance Type</h4>
                                                </div>
                                                <div class="col-2 float-end">
                                                    <div class="collapse-icon">
                                                        <i class="bi bi-caret-down-fill vrm-color-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="collapseType" class="collapse pt-1" aria-labelledby="typeTool" data-parent="#cardAccordion">
                                        <div class="row px-2 mt-2">
                                            <div class="col-md-9 col-sm-12">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-12 col-12">
                                                        <input type="text" class="form-control" name="" placeholder="Enter Name">
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
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Inheritance Type</label>
                                    <fieldset class="form-group">
                                        <select class="form-select">
                                            <option>Continent</option>
                                        </select>
                                    </fieldset>
                                    <small>Select Inheritance Type</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" placeholder="Inheritance Name">
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
                                    <label for="title">Parent</label>
                                    <fieldset class="form-group">
                                        <select class="form-select">
                                            <option>-- Parent Self --</option>
                                        </select>
                                    </fieldset>
                                    <small>Select Parent Inheritance</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                    <small>More info about the inheritance.</small>
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
                                <a href="" class="vrm-color-red">Delete Inheritance</a>
                            </div>
                            <div class="col-lg-4 col-6">
                                <button type="button" class="btn btn-sm btn-success w-100">
                                    <i class="bi bi-cursor-fill"></i> Update Inheritance
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


