{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Edit Page :
                        <a href="{{ url('/vrm/pages') }}" class="btn btn-primary">
                            <!-- plus icon -->
                            Manage Pages <i class="bi bi-plus"></i>
                        </a>
                    </h3>
                </div>
                <div class="col-6 d-none d-md-block">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-end float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/vrm/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Page</li>
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
            <div class="vrm-control d-block d-md-none">
                <div class="row">
                    <div class="col-4">
                        <ul class="float-start float-lg-start">
                            <li>
                                <a class="btn btn-sm btn-secondary">
                                    Preview <i class="bi bi bi-box-arrow-up-right"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-8">
                        <ul class="float-end float-lg-end">
                            <li>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </li>
                            <li>
                                <button class="btn btn-sm btn-success">Update</button>
                            </li>
                            <li>
                                <button class="btn btn-sm btn-plain" id="vrm-controls">
                                    <i class="bi bi-grip-vertical"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main -->
            <div class="vrm-content">
                <div class="row">
                    <div class="vrm-main-zone col-lg-9 col-md-12">
                        <div class="card">
                            <div class="card-body px-0">
                                <div class="row">
                                    <div class="col-12 mb-1">
                                        <div class="form-group">
                                            <label for="title">Edit Title</label>
                                            <input type="text" class="form-control" placeholder="Edit Page Title">
                                        </div>

                                        <div class="mt-2 py-1">
                                            <!-- Permalink [Post link] -->
                                            <div class="form-group" id="postLinkBloc">
                                                <label class="d-inline" for="permalink">Link:</label>
                                                <a href="#" id="postLinkShow"
                                                    class="vrm-link vrm-link-md">{{ url('') }}/sample-page-post</a>

                                                <!-- Edit Area -->
                                                <label id="postLinkMain"
                                                    class="vrm-link-blunt vrm-link-sm d-none">{{ url('') }}/</label>
                                                <input type="text" id="postLink" class="form-control vrm-width-55 d-none"
                                                    value="sample-blog-post" placeholder="Change Post Link">
                                                <button type="button" id="editLinkSave"
                                                    class="btn btn-sm btn-primary d-none">Save</button>
                                                <a id="editLinkCancel"
                                                    class="vrm-link vrm-color-red vrm-link-sm d-none">Cancel</a>
                                                <!-- End Edit Area -->

                                                <button type="button" id="editLink"
                                                    class="btn btn-sm btn-outline-info">Edit</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Write -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="quill-editor" id="quill-editor"></div>
                                        </div>
                                    </div>

                                    <!-- Extra -->
                                    <div class="vrm-blog-extra" section-type="blog-extra"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vrm-control-zone col-lg-3 d-none d-sm-none d-md-block">
                        <div class="vrm-blog-tool" section-type="blog-tool">
                            <div class="card" order="1">
                                <div id="publishTool" data-bs-toggle="collapse" data-bs-target="#collapsePublish"
                                    aria-expanded="true" aria-controls="collapsePublish" role="button">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-10">
                                                <h4 class="card-title">Publish</h4>
                                            </div>
                                            <div class="col-2">
                                                <div class="collapse-icon float-end">
                                                    <i class="bi bi-caret-down-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div id="collapsePublish" class="collapse show pt-1" aria-labelledby="publishTool"
                                        data-parent="#cardAccordion">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="vrm-blog-box">
                                                    <!-- Status -->
                                                    <div class="row mb-3" id="publish-status">
                                                        <div class="col-12">
                                                            <!-- icon -->
                                                            <i class="bi bi-question-diamond-fill"></i>
                                                            <span class="blog-text">Status:</span>

                                                            <span class="blog-text blog-text-set">Deactivated</span>
                                                        </div>
                                                    </div>
                                                    <!-- Publish Date -->
                                                    <div class="row mb-3" id="publish-date">
                                                        <div class="col-12">
                                                            <!-- icon -->
                                                            <i class="bi bi-calendar3"></i>
                                                            <span class="blog-text">Date:</span>

                                                            <span class="blog-text blog-text-set">Today</span>
                                                            <a href="#publish-date"
                                                                class="vrm-plug-btn vrm-plug-edit">change</a>

                                                            <div class="vrm-plug-control publish-date-zone">
                                                                <div class="row">
                                                                    <div class="col-7">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm date datepicker-input">
                                                                    </div>
                                                                    <div class="col-2">
                                                                        <button
                                                                            class="btn btn-sm btn-info vrm-plug-btn vrm-plug-save">Ok</button>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <a href="#publish-date"
                                                                            class="vrm-plug-btn vrm-plug-cancel">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Visibility -->
                                                    <div class="row mb-3" id="publish-visibility">
                                                        <div class="col-12">
                                                            <!-- icon -->
                                                            <i class="bi bi-eye"></i>
                                                            <span class="blog-text">Visibility:</span>

                                                            <span class="blog-text blog-text-set">Public</span>
                                                            <a href="#publish-visibility"
                                                                class="vrm-plug-btn vrm-plug-edit">change</a>

                                                            <div class="vrm-plug-control publish-visibility-zone">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input visibility-check"
                                                                                type="radio" name="visibility"
                                                                                value="public" checked>
                                                                            <label class="form-check-label" for="">
                                                                                Public
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input visibility-check"
                                                                                type="radio" name="visibility"
                                                                                value="protected">
                                                                            <label class="form-check-label" for="">
                                                                                Protected
                                                                            </label>
                                                                        </div>
                                                                        <div
                                                                            class="vrm-plug-control-action visibility-protected-zone">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        placeholder="Enter Unlocking Password:">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-check">
                                                                            <input
                                                                                class="form-check-input visibility-check"
                                                                                type="radio" name="visibility"
                                                                                value="private">
                                                                            <label class="form-check-label" for="">
                                                                                Private
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-check">
                                                                            <input
                                                                                class="form-check-input visibility-check"
                                                                                type="radio" name="visibility"
                                                                                value="access">
                                                                            <label class="form-check-label" for="">
                                                                                Access
                                                                            </label>
                                                                        </div>
                                                                        <div
                                                                            class="vrm-plug-control-action visibility-access-zone">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <select class="choices form-select"
                                                                                        multiple="multiple">
                                                                                        <option value="author">Author
                                                                                        </option>
                                                                                        <option value="editor">Editor
                                                                                        </option>
                                                                                        <option value="user">User</option>
                                                                                        <option value="admin">Admin</option>
                                                                                        <option value="super">Super Admin
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-2">
                                                                        <button
                                                                            class="btn btn-sm btn-info vrm-plug-btn vrm-plug-save">Ok</button>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <a href="#publish-visibility"
                                                                            class="vrm-plug-btn vrm-plug-cancel">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action -->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="" class="vrm-color-red">Delete Page</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn btn-sm btn-success w-100">
                                                <i class="bi bi-cursor-fill"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Page Control -->
                            <div class="card" order="2">
                                <div id="controlTool" data-bs-toggle="collapse" data-bs-target="#collapseControl"
                                    aria-expanded="true" aria-controls="collapseControl" role="button">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-10">
                                                <h4 class="card-title">Post Control</h4>
                                            </div>
                                            <div class="col-2">
                                                <div class="collapse-icon float-end">
                                                    <i class="bi bi-caret-down-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div id="collapseControl" class="collapse show pt-1" aria-labelledby="controlTool"
                                        data-parent="#cardAccordion">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="vrm-blog-box">
                                                    <div class="vrm-bloc">
                                                        <div class="mb-3" id="publish-control">

                                                            <div class="row">
                                                                <div class="col-12 mb-1">
                                                                    <!-- icon -->
                                                                    <span class="blog-text">Author:</span>
                                                                </div>

                                                                <div class="col-12">
                                                                    <fieldset class="form-group">
                                                                        <select class="form-select">
                                                                            <option>Jane Doe</option>
                                                                            <option>John Doe</option>
                                                                        </select>
                                                                    </fieldset>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 mb-1">
                                                                    <!-- icon -->
                                                                    <span class="blog-text">Parent:</span>
                                                                </div>

                                                                <div class="col-12">
                                                                    <fieldset class="form-group">
                                                                        <select class="form-select">
                                                                            <option>--- Self ---</option>
                                                                            <option>An introduction to vormia</option>
                                                                            <option>At vero eos et accusamus et iusto odio
                                                                            </option>
                                                                            <option>Journey of development starts here
                                                                            </option>
                                                                        </select>
                                                                    </fieldset>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 mb-1">
                                                                    <!-- icon -->
                                                                    <span class="blog-text">Template:</span>
                                                                </div>

                                                                <div class="col-12">
                                                                    <fieldset class="form-group">
                                                                        <select class="form-select">
                                                                            <option>Default</option>
                                                                            <option>Blank</option>
                                                                        </select>
                                                                    </fieldset>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 mb-1">
                                                                    <!-- icon -->
                                                                    <span class="blog-text">Position:</span>
                                                                </div>

                                                                <div class="col-12">
                                                                    <input type="number"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="0">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" order="3">
                                <div id="featuredTool" data-bs-toggle="collapse" data-bs-target="#collapseFeatured"
                                    aria-expanded="true" aria-controls="collapseFeatured" role="button">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-10">
                                                <h4 class="card-title">Featured Image</h4>
                                            </div>
                                            <div class="col-2">
                                                <div class="collapse-icon float-end">
                                                    <i class="bi bi-caret-down-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div id="collapseFeatured" class="collapse show pt-1" aria-labelledby="featuredTool"
                                        data-parent="#cardAccordion">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="vrm-blog-box">
                                                    <div class="vrm-bloc">
                                                        <!-- Category List -->
                                                        <div class="row mb-3" id="publish-featured">
                                                            <div class="col-12 mb-1">
                                                                <!-- icon -->
                                                                <i class="bi bi-image-fill"></i>
                                                                <span class="blog-text">Attach Image:</span>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="input-group mb-3">
                                                                    <label class="input-group-text" for=""><i
                                                                            class="bi bi-upload"></i></label>
                                                                    <input type="file" class="form-control"
                                                                        accept="image/png, image/jpg, image/jpeg" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
