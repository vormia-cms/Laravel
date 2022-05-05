{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Visibility :
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Section App --}}
@section('app')
<div class="page-content vrm-sett-visibility" id="sett-visibility">
    <section class="vrm-content-zone">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">

                    <div class="card-body px-0">
                        <div class="divider divider-left">
                            <div class="divider-text">General</div>
                        </div>

                        <div class="vrm-sett-general">
                            <div class="row vrm-mb-2">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="general">
                                        <label class="form-check-label" for="">
                                            System is Live
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="general">
                                        <label class="form-check-label" for="">
                                            System is Offline
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="general">
                                        <label class="form-check-label" for="">
                                            System Under Maintenance
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Offline Meesage</label>
                                        <div id="quill-light-offline"></div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-check-label" for="">
                                            Template
                                        </label>
                                        <select class="form-select form-select-sm">
                                            <option>default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Maintenance Meesage</label>
                                        <div id="quill-light-maintenance" class=""></div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-check-label" for="">
                                            Template
                                        </label>
                                        <select class="form-select form-select-sm">
                                            <option>default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">View</div>
                        </div>

                        <div class="vrm-sett-view">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="view" view="public">
                                        <label class="form-check-label" for="">
                                            Public
                                        </label>
                                    </div>
                                    <small class="text-muted text-center">Accessible by anyone</small>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="view" view="login">
                                        <label class="form-check-label" for="">
                                            Login Required
                                        </label>
                                    </div>
                                    <small class="text-muted text-center">By members with an account</small>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="view" view="password">
                                        <label class="form-check-label" for="">
                                            Use Password
                                        </label>
                                    </div>
                                    <small class="text-muted text-center">By user with given password</small>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm password" placeholder="" disabled>
                                        <small class="text-muted text-center">Enter Password</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action -->
                    <div class="card-footer">
                        <div class="row justify-content-end">
                            <div class="col-5">
                                <button type="button" class="btn btn-sm btn-success w-100 float-end">
                                    <i class="bi bi-cursor-fill"></i> Save Settings
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection
