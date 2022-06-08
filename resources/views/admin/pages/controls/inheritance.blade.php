{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Inheritance List :
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
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
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div class="card">
                    <div class="card-title mb-1">
                        <h5><span>Manage </span></h5>
                    </div>

                    <div class="card-body px-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5">category,gender,location</textarea>
                                    <small>Your inheritance list.</small>
                                </div>
                            </div>

                            <!-- Extra -->
                            <div class="vrm-blog-extra" section-type="blog-extra"></div>
                        </div>
                    </div>

                    <!-- Action -->
                    <div class="card-footer">
                        <div class="row justify-content-end">
                            <div class="col-5">
                                <button type="button" class="btn btn-sm btn-success w-100 float-end">
                                    <i class="bi bi-cursor-fill"></i> Update List
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="card">
                    <div class="card-body px-0">
                        <!-- Table control -->
                        <div class="vrm-controls px-1" section-type="controls">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 col-sm-12 mb-1">
                                    <form action="" class="float-end w-100">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search Module List">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="button">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- table hover -->
                        <div class="table-responsive px-1">
                            <table class="table vrm-table-default mb-0">
                                <!-- Head -->
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Usage</th>
                                    </tr>
                                </thead>
                                <!-- Body -->
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">1</td>
                                        <td>
                                            <p class="vrm-font-15 vrm-color-orange">
                                                Category
                                            </p>
                                        </td>
                                        <td class="published">
                                            <p>Count: 5</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">2</td>
                                        <td>
                                            <p class="vrm-font-15 vrm-color-orange">
                                                Gender
                                            </p>
                                        </td>
                                        <td class="published">
                                            <p>Count: 2</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">3</td>
                                        <td>
                                            <p class="vrm-font-15 vrm-color-orange">
                                                Location
                                            </p>
                                        </td>
                                        <td class="published">
                                            <p>Count: 0</p>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Footer -->
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>Usage</th>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="vrm-admin-pagination mt-2">
                                <span class="vrm-color-dark-red align-self-start">Found Items: 300 </span>

                                <nav aria-label="navigation">
                                    <ul class="pagination pagination-primary">
                                        <li class="page-item disabled d-none d-md-block"><a class="page-link" href="#">First</a></li>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#">
                                                <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item px-2 pt-1 vrm-color-dark-red"> <span>1 to 20</span></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">
                                                <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item active d-none d-md-block"><a class="page-link" href="#">Last</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
