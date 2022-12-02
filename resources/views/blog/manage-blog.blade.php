@extends('master')

@section('title')
    Manage Blog
@endsection()

@section('main-content')

    <div class="container">
        <div class="row py-5">
            <div class="col-md-12 mx-auto">
                <h3 class="text-center text-uppercase">Manage Blog</h3>
                <p class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis deleniti, harum iusto magni optio quae ratione reprehenderit tempora. Molestiae, voluptas?</p>

                @if(session('message'))
                    <h5 class="text-{{ session('warningType') }} text-center py-3">{{ session('message') }}</h5>
                @endif

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center" valign="middle">
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

                        @php
                            $i = 1;
                        @endphp

                        @foreach($blogs as $blog)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td width="180">{{ $blog['title'] }}</td>
                                <td>{{ $blog['category_id'] }}</td>
                                <td width="140">{{ $blog['author'] }}</td>
                                <td>{{ substr($blog['description'], 0, 100) }}...</td>
                                <td width="120"><img class="img-fluid rounded-1" src="{{ asset('/') . $blog['image'] }}" alt=""/></td>
                                <td class="py-3">
                                    <div class="mt-1">
                                        <form action="{{ route('change-publication-status', ['id' => $blog['id']]) }}" method="POST">
                                            @csrf
                                            <strong>{{ $blog['publication_status'] == 1 ? "Published" : "Unpublished" }}</strong>
                                            <button type="submit" class="btn btn-secondary w-100 mt-2">Change</button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <div class="my-1">
                                        <button type="button" class="btn btn-success w-100 mt-2">Update</button>

                                        <form action="{{ route('delete-blog', ['id' => $blog['id']]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger w-100 mt-2" onclick="return confirm('Are you sure to delete this blog!!!')">Delete</button>
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
