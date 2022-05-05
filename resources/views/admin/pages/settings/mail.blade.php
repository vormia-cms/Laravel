{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Mail :
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
<div class="page-content vrm-sett-mail" id="sett-mail">
    <section class="vrm-content-zone">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">

                    <div class="card-body px-0">
                        <div class="divider divider-left">
                            <div class="divider-text">Protocol Setting</div>
                        </div>

                        <div class="vrm-sett-protocol">
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="protocol" protocol="php">
                                        <label class="form-check-label" for="">
                                            PHP Mail
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="protocol" protocol="smtp">
                                        <label class="form-check-label" for="">
                                            SMTP Mail
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="protocol" protocol="extension">
                                        <label class="form-check-label" for="">
                                            Use Extension
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">Default</div>
                        </div>

                        <div class="vrm-sett-default">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="default">
                                        <label class="form-check-label" for="">
                                            Don't use defaults
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Default Sender</label>
                                        <input type="email" class="form-control form-control-sm default" placeholder="no-reply@xyz.com">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Default Reply</label>
                                        <input type="email" class="form-control form-control-sm default" placeholder="info@xyz.com">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">SMTP</div>
                        </div>

                        <div class="vrm-sett-smtp">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Smtp Host</label>
                                        <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Smtp User</label>
                                        <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Smtp Password</label>
                                        <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Smtp Port</label>
                                        <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Smtp Timeout</label>
                                        <input type="text" class="form-control form-control-sm smtp" placeholder="" disabled>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Mailtype</label>
                                        <select class="form-select form-select-sm smtp" disabled>
                                            <option>Text</option>
                                            <option>Html</option>
                                        </select>
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
