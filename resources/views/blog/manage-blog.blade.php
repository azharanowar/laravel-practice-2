@extends('master')

@section('title')
    Manage Blog
@endsection()

@section('main-content')

    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 mx-auto">
                <h4 class="text-center text-uppercase">Manage Blog</h4>
                <p class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis deleniti, harum iusto magni optio quae ratione reprehenderit tempora. Molestiae, voluptas?</p>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">SL</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Author</th>
                            <th scope="col">Description</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $blog['id'] }}</th>
                                <td>{{ $blog['title'] }}</td>
                                <td>{{ $blog['category_id'] }}</td>
                                <td>{{ $blog['author'] }}</td>
                                <td>{{ $blog['description'] }}</td>
                                <td width="100"><img class="img-fluid rounded-1" src="{{ asset('/') . $blog['image'] }}" alt=""/></td>
                                <td class="py-3">
                                    <div class="mt-1">
                                        <form action="" method="">
                                            <strong>{{ $blog['publication_status'] == 1 ? "Published" : "Unpublished" }}</strong>
                                            <button type="button" class="btn btn-outline-secondary w-100 mt-2">Change</button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-1">
                                        <form action="" method="">
                                            <button type="button" class="btn btn-success w-100 mt-2">Update</button>
                                            <button type="button" class="btn btn-danger w-100 mt-2">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection()
