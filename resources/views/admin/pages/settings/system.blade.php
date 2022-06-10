{{-- Layout --}}
@extends("$directory->myTheme.layouts.$layoutName")

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        {!! $other->headerName !!} :
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
    <div class="page-content vrm-sett-system" id="sett-system">
        <section class="vrm-content-zone">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        {!! $notify !!}
                        <form action="{!! $links->store !!}" method="POST">
                            @csrf
                            <input type="hidden" name="view_name" value="{{ $other->view }}">

                            <div class="card-body px-0">
                                <div class="divider divider-left">
                                    <div class="divider-text">General Setting</div>
                                </div>

                                <div class="vrm-sett-general">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Site Title</label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('site_title') is-invalid @enderror"
                                                    value="{{ old('site_title') }}" name="site_title">
                                                <span class="error">{{ $errors->first('site_title') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="title" class="required">Append Title</label>
                                            <div class="row">
                                                <div class="col-md-4 col-4">
                                                    <div class="form-check">
                                                        <input type="radio"
                                                            class="form-check-input @error('site_title_append') is-invalid @enderror"
                                                            value="no" name="site_title_append">
                                                        <label class="form-check-label" for="">
                                                            Don't
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-4">
                                                    <div class="form-check">
                                                        <input type="radio"
                                                            class="form-check-input @error('site_title_append') is-invalid @enderror"
                                                            value="after" name="site_title_append">
                                                        <label class="form-check-label" for="">
                                                            After
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-4">
                                                    <div class="form-check">
                                                        <input type="radio"
                                                            class="form-check-input @error('site_title_append') is-invalid @enderror"
                                                            value="before" name="site_title_append">
                                                        <label class="form-check-label" for="">
                                                            Before
                                                        </label>
                                                    </div>
                                                </div>
                                                <span
                                                    class="error">{{ $errors->first('site_title_append') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Site Slogan</label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('site_slogan') is-invalid @enderror"
                                                    value="{{ old('site_slogan') }}" name="site_slogan">
                                                <span class="error">{{ $errors->first('site_slogan') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Site URL</label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('site_url') is-invalid @enderror"
                                                    value="{{ old('site_url') }}" name="site_url">
                                                <small class="text-muted text-center">the site url for your
                                                    inner-links</small>
                                                <span class="error">{{ $errors->first('site_url') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Home Page URL</label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('home_page_url') is-invalid @enderror"
                                                    value="{{ old('home_page_url') }}" name="home_page_url">
                                                <small class="text-muted text-center">first page visitor will see</small>
                                                <span class="error">{{ $errors->first('home_page_url') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Base URL</label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('base_url') is-invalid @enderror"
                                                    value="{{ old('base_url') }}" name="base_url">
                                                <small class="text-muted text-center">the base url for your assets</small>
                                                <span class="error">{{ $errors->first('base_url') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider divider-left">
                                    <div class="divider-text">Encryption</div>
                                </div>

                                <div class="vrm-sett-encryption ">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Global Encryption Key
                                                    <small>256-bit key</small></label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('global_encryption_key') is-invalid @enderror"
                                                    value="{{ old('global_encryption_key') }}"
                                                    name="global_encryption_key">
                                                <small class="text-muted text-center">Will be shared with installed
                                                    add-ons</small>
                                                <span
                                                    class="error">{{ $errors->first('global_encryption_key') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Encryption Key <small>256-bit
                                                        key</small></label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('encryption_key') is-invalid @enderror"
                                                    value="{{ old('encryption_key') }}" name="encryption_key">
                                                <small class="text-muted text-center">Private key be used while securing
                                                    password</small>
                                                <span
                                                    class="error">{{ $errors->first('encryption_key') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            <div class="form-group">
                                                <label for="title" class="required">Token Key <small>64-bit WEP
                                                        Keys</small></label>
                                                <input type="text"
                                                    class="form-control form-control-sm @error('token_key') is-invalid @enderror"
                                                    value="{{ old('token_key') }}" name="token_key">
                                                <small class="text-muted text-center">Private used for securing
                                                    tokens,cookies,
                                                    and session</small>
                                                <span class="error">{{ $errors->first('token_key') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action -->
                            <div class="card-footer">
                                <div class="row justify-content-end">
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-sm btn-success w-100 float-end">
                                            <i class="bi bi-cursor-fill"></i> Save Settings
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- End Form --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
