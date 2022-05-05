{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Media :
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
<div class="page-content vrm-sett-media" id="sett-media">
    <section class="vrm-content-zone">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">

                    <div class="card-body px-0">
                        <div class="divider divider-left">
                            <div class="divider-text">Compression</div>
                        </div>

                        <div class="vrm-sett-compress">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="mb-2">Compression</label>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="compress" compress="false" checked>
                                                <label class="form-check-label" for="">
                                                    No Compression
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="compress" compress="true">
                                                <label class="form-check-label" for="">
                                                    Apply Global Compression
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <select class="form-select form-select-sm" id="compress" disabled>
                                                    <option>30%</option>
                                                    <option>35%</option>
                                                    <option>50%</option>
                                                    <option>65%</option>
                                                    <option>80%</option>
                                                    <option>85%</option>
                                                    <option>90%</option>
                                                    <option>100%</option>
                                                </select>
                                                <small>How hard should the compression be?</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left mt-0">
                            <div class="divider-text">Watermark</div>
                        </div>

                        <div class="vrm-sett-watermark">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="mb-2">Watermark</label>
                                    <div class="row">
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="watermark" watermark="false" checked>
                                                <label class="form-check-label" for="">
                                                    No Watermark
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="watermark" watermark="text">
                                                <label class="form-check-label" for="">
                                                    Add Text Watermark
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="watermark" watermark="image">
                                                <label class="form-check-label" for="">
                                                    Add Image Watermark
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Allignment</label>
                                        <select disabled class="form-select form-select-sm watermark">
                                            <option>Top Left</option>
                                            <option>Bottom Left</option>
                                            <option>Centert</option>
                                            <option>Top Right</option>
                                            <option>Bottom Right</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Text</label>
                                        <input type="text" disabled class="form-control form-control-sm watermark-text" placeholder="Powered By Vormia">
                                    </div>
                                </div>

                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Font Color</label>
                                        <input type="color" disabled class="form-control watermark-text" placeholder="Transparent" value="#ffffff">
                                    </div>
                                </div>

                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Opacity</label>
                                        <input type="number" disabled class="form-control form-control-sm watermark-text" placeholder="">
                                    </div>
                                </div>

                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Size</label>
                                        <input type="text" min="1" disabled class="form-control form-control-sm watermark-text" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7 col-12">
                                    <div class="form-group">
                                        <label for="title">BG Color</label>
                                        <div class="row">
                                            <div class="col-md-3 col-8">
                                                <input disabled type="color" class="form-control watermark" placeholder="Transparent" value="#ffffff">
                                            </div>
                                            <div class="col-md-3 col-4">
                                                <div class="form-check">
                                                    <input disabled class="form-check-input watermark" type="checkbox" name="watermark-bg">
                                                    <label class="form-check-label vrm-font-13" for="">
                                                        No BG
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-4 mt-1">
                                                <div class="form-group">
                                                    <input disabled title="Background Opacity" type="number" class="form-control form-control-sm watermark" placeholder="">
                                                    <small class="text-muted text-center">BG Opacity</small>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-8 mt-1">
                                                <div class="form-group">
                                                    <input disabled title="Border Radius" type="text" class="form-control form-control-sm watermark" placeholder="tp rt bm lt">
                                                    <small class="text-muted text-center">Border Radius</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5 col-sm-12">
                                    <label for="title">Watermark Image</label>
                                    <div class="input-group">
                                        <label class="input-group-text" for=""><i class="bi bi-upload"></i></label>
                                        <input disabled type="file" class="form-control watermark-image" accept="image/png, image/jpg, image/jpeg" id="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left mt-0">
                            <div class="divider-text">Sizes</div>
                        </div>

                        <div class="vrm-sett-size">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row align-items-center">
                                        <div class="col-12">
                                            <label for="" class="col-form-label">Thumbnails Dimensions:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Width <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="150">
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Height <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="150">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-check vrm-rem-mt-2">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Maintain Aspect Ration
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row align-items-center">
                                        <div class="col-12">
                                            <label for="" class="col-form-label">Small Dimensions:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Width <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="280">
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Height <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="280">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-check vrm-rem-mt-2">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Maintain Aspect Ration
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row align-items-center">
                                        <div class="col-12">
                                            <label for="" class="col-form-label">Medium Dimensions:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Width <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="400">
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Height <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="400">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-check vrm-rem-mt-2">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Maintain Aspect Ration
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row align-items-center">
                                        <div class="col-12">
                                            <label for="" class="col-form-label">Large Dimensions:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Width <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="1024">
                                    </div>
                                </div>
                                <div class="col-md-2 col-6">
                                    <div class="form-group">
                                        <label for="title">Height <small>px</small></label>
                                        <input type="number" class="form-control" placeholder="1024">
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="form-check vrm-rem-mt-2">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Maintain Aspect Ration
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left mt-0">
                            <div class="divider-text">Upload</div>
                        </div>

                        <div class="vrm-sett-upload">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Encypt Image File Name
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-8 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="directory">
                                        <label class="form-check-label" for="">
                                            Arrange uploads into year- and month-based folders
                                        </label>
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
