{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Writing :
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
<div class="page-content vrm-sett-reading" id="sett-blog">
    <section class="vrm-content-zone">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">

                    <div class="card-body px-0">
                        <div class="divider divider-left">
                            <div class="divider-text">Blog &amp; Post</div>
                        </div>

                        <div class="vrm-sett-blogpost">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            All blog post should wait aproval from editor before publish
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            All page post should wait aproval from editor before publish
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Default Blog Category
                                        </label>
                                        <select class="form-select-sm">
                                            <option>Uncategorised</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Default Blog Format
                                        </label>
                                        <select class="form-select-sm">
                                            <option>Standard</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Default Page Template
                                        </label>
                                        <select class="form-select-sm">
                                            <option>Default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">Date Time</div>
                        </div>

                        <div class="vrm-sett-datetime">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Default Date Time Format
                                        </label>
                                        <input type="text" class="vrm-width-20" placeholder="F d Y H:i:S">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Default Timezone
                                        </label>
                                        <select class="form-select-sm vrm-width-30">
                                            <option>Nairobi</option>
                                            <option>Pacific</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-check-label" for="">
                                            First day of the week
                                        </label>
                                        <select class="form-select-sm vrm-width-20">
                                            <option>Monday</option>
                                            <option>Tuesday</option>
                                            <option>Wednesday</option>
                                            <option>Thursday</option>
                                            <option>Friday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">Link</div>
                        </div>

                        <div class="vrm-sett-link">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="link">
                                        <label class="form-check-label" for="">
                                            Plain Format
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-8 col-12">
                                    <code>http://localhost:8888/Vormia/?post=11</code>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="link">
                                        <label class="form-check-label" for="">
                                            Plain Title
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-8 col-12">
                                    <code>http://localhost:8888/Vormia/sample-blog-title</code>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="link">
                                        <label class="form-check-label" for="">
                                            Day and Title
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-8 col-12">
                                    <code>http://localhost:8888/Vormia/2022/04/12/sample-blog-title</code>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="link">
                                        <label class="form-check-label" for="">
                                            Month and Title
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-8 col-12">
                                    <code>http://localhost:8888/Vormia/2022/04/sample-blog-title</code>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="link">
                                        <label class="form-check-label" for="">
                                            Blog / Page ID
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-8 col-12">
                                    <code>http://localhost:8888/Vormia/archives/189</code>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="link">
                                        <label class="form-check-label" for="">
                                            Category Based
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-8 col-12">
                                    <code>http://localhost:8888/Vormia/category-slag/page-title</code>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-12 col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="link">
                                        <label class="form-check-label" for="">
                                            Custom Format
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-12 col-12">
                                    <code>http://localhost:8888/Vormia/</code>
                                    <input type="text" class="vrm-width-50" placeholder="">
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
