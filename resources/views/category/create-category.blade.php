@extends('master')

@section('title')
    Create Category
@endsection()

@section('main-content')

    <div class="container">
        <div class="row py-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-normal text-muted text-center">Add new blog</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-blog') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="blogTitle" class="col-sm-2 col-form-label">Title </label>
                                <div class="col-sm-10">
                                    <input type="text" name="blog_title" class="form-control" id="blogTitle" placeholder="Enter your blog title here...">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Publication Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input name="blog_publication_status" class="form-check-input" type="radio" id="publicationStatus1" value="1" checked>
                                        <label class="form-check-label" for="publicationStatus1">
                                            Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="blog_publication_status" class="form-check-input" type="radio" id="publicationStatus2" value="0">
                                        <label class="form-check-label" for="publicationStatus2">
                                            Unpublished
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
