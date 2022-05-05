{{-- Layout --}}
@extends('admin.layouts.main')

@section('app-header')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3>
                        Blog :
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
<div class="page-content vrm-sett-blog" id="sett-blog">
    <section class="vrm-content-zone">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card">

                    <div class="card-body px-0">
                        <div class="divider divider-left">
                            <div class="divider-text">Blog Default</div>
                        </div>

                        <div class="vrm-sett-default">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            All public to post comments and cast votes
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Disable posting comments and votes to all posts
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Show author actual name instead of nickname
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Show post publication date and time
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Disable replies to comments
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Comments need to be pre-approved
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">Blog Comments</div>
                        </div>

                        <div class="vrm-sett-comments">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            User must fill pre-form before posting comments
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            User must be registered to leave a comment / vote
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Multiple votes allowed per post
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Automatically close comments for post older than
                                        </label>
                                        <select class="form-select-sm">
                                            <option>7 days</option>
                                            <option>15 days</option>
                                            <option>30 days</option>
                                            <option>3 Month</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Allow comment nesting for up to level
                                        </label>
                                        <select class="form-select-sm">
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Show comments starting with
                                        </label>
                                        <select class="form-select-sm">
                                            <option>most voted</option>
                                            <option>most popular</option>
                                            <option>newest</option>
                                            <option>oldest</option>
                                            <option>favorite</option>
                                        </select>
                                        <label class="form-check-label" for="">
                                            broken down into groups of
                                        </label>
                                        <input type="number" class="vrm-width-10" placeholder="10">
                                        <label class="form-check-label" for="">
                                            comments per page using
                                        </label>
                                        <select class="form-select-sm">
                                            <option>pagination</option>
                                            <option>load more</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Disable replies to comments
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">Blog Notification</div>
                        </div>
                        <div class="vrm-sett-notify">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Send me an email when anyone comments on post
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Send me an email when comment is flagged / Reported
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Send me an email when new post is published
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Send me an email when post need an approval
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Notify Author when post receive a new comment has been posted
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="">
                                        <label class="form-check-label" for="">
                                            Notify Author comment get a reply / vote
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider divider-left">
                            <div class="divider-text">Blog Moderation</div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="">
                                    <label class="form-check-label" for="">
                                        Block user from posting comments / reply after
                                    </label>
                                    <input type="number" class="vrm-width-10" placeholder="5">
                                    <label class="form-check-label" for="">
                                        of his/her last comment / reply
                                        <select class="form-select-sm">
                                            <option>flagged as spam</option>
                                            <option>pending approval</option>
                                            <option>published</option>
                                            <option>reported</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="">
                                    <label class="form-check-label" for="">
                                        Only allow max of <input type="number" min="1" class="vrm-width-10" placeholder="5"> user comment / reply per single post
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="">
                                    <label class="form-check-label" for="">
                                        Only allow minimum of <input type="number" min="1" class="vrm-width-10" placeholder="1"> minute(s) between each comment / reply
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="">
                                    <label class="form-check-label" for="">
                                        After <input type="number" min="1" class="vrm-width-10" placeholder="10"> spam comment / reply
                                        <select class="form-select-sm">
                                            <option>block user account</option>
                                            <option>ban user from commenting/reply</option>
                                            <option>suspend all of his previus comments/reply</option>
                                            <option>Do all</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="">
                                    <label class="form-check-label" for="">
                                        Only allow max of <input type="number" min="1" class="vrm-width-10" placeholder="5"> hyperlink per comment / reply
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Hold comment to wait approval if it contains one of the following words</label>
                                    <textarea class="form-control" placeholder="" rows="8"></textarea>
                                    <small>Words should be comma separated</small>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Mark comment to as spam if it contains one of the following words</label>
                                    <textarea class="form-control" placeholder="" rows="8"></textarea>
                                    <small>Words should be comma separated</small>
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
