{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Robots :
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
<div class="page-content vrm-sett-reading" id="sett-reading">
    <section class="vrm-content-zone">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">

                    <div class="card-body px-0">
                        <div class="divider divider-left">
                            <div class="divider-text">Behaviour</div>
                        </div>

                        <div class="vrm-sett-behaviour">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Hide my site from search engines (Google, Yahoo, Bing, etc.)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">Global SEO</div>
                        </div>

                        <div class="vrm-sett-seo">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Site Description</label>
                                        <textarea class="form-control" placeholder="" rows="5"></textarea>
                                        <small>Describe your website</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Site Keywords</label>
                                        <textarea class="form-control" placeholder="" rows="5"></textarea>
                                        <small>Comma separated keywords</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Meta Data</label>
                                        <textarea class="form-control" placeholder="" rows="5"></textarea>
                                        <small>Additional Metadata</small>
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
