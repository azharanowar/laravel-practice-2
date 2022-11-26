@extends('master')

@section('title')
    Add Blog
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
                            <div class="row mb-3">
                                <label for="blogCategory" class="col-sm-2 col-form-label">Category </label>
                                <div class="col-sm-10">
                                    <select name="blog_category" id="blogCategory" class="form-select">
                                        <option value="">Select your category</option>
                                        <option value="">National</option>
                                        <option value="">International</option>
                                        <option value="">Economy</option>
                                        <option value="">Technology</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="blogAuthor" class="col-sm-2 col-form-label">Author </label>
                                <div class="col-sm-10">
                                    <input type="text" name="blog_author" class="form-control" id="blogAuthor" placeholder="Enter your blog author name here...">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="blogDescription" class="col-sm-2 col-form-label">Description </label>
                                <div class="col-sm-10">
                                    <textarea type="text" name="blog_description" class="form-control" id="blogDescription" rows="6" placeholder="Enter your blog description here..."></textarea>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Publication Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input name="blog_publication_status" class="form-check-input" type="radio" id="publicationStatus1" value="0" checked>
                                        <label class="form-check-label" for="publicationStatus1">
                                            Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="blog_publication_status" class="form-check-input" type="radio" id="publicationStatus2" value="1">
                                        <label class="form-check-label" for="publicationStatus2">
                                            Unpublished
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="blogImage" class="col-sm-2 col-form-label">Image </label>
                                <div class="col-sm-10">
                                    <input name="blog_image" type="file" class="form-control" id="blogImage" accept="image/*">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary px-5 py-2 text-uppercase fw-semibold">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
