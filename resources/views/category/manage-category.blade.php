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
                    <h5 class="text-{{ session('messageType') }} text-center py-3">{{ session('message') }}</h5>
                @endif

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr class="text-center" valign="middle">
                        <th scope="col" width="100">SL</th>
                        <th scope="col" width="">Category</th>
                        <th scope="col" width="100">Publication Status</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $i = 1;
                    @endphp

                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $category['category_name'] }}</td>
                            <td class="py-3">
                                <div class="mt-1">
                                    <form action="" method="POST">
                                        @csrf
                                        <strong>{{ $category['publication_status'] == 1 ? "Published" : "Unpublished" }}</strong>
                                        <input type="hidden" name="blog_id" value="{{ $category['id'] }}"/>
                                        <button type="submit" class="btn btn-secondary w-100 mt-2">Change</button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <div class="my-1">

                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="blog_id" value="{{ $category['id'] }}"/>
                                        <button type="submit" class="btn btn-success w-100 mt-2">Update</button>
                                    </form>

                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="blog_id" value="{{ $category['id'] }}"/>
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
