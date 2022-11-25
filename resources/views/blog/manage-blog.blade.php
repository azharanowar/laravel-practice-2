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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $blog['id'] }}</th>
                                <td>{{ $blog['title'] }}</td>
                                <td>{{ $blog['category'] }}</td>
                                <td>{{ $blog['author'] }}</td>
                                <td>{{ $blog['description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection()
