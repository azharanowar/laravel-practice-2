@extends('master')

@section('title')
    Manage Blog
@endsection()

@section('main-content')

    <div class="container">
        <div class="row py-5">
            <div class="col-md-8 mx-auto">
                <h4 class="text-center text-uppercase">Manage Blog</h4>
                <p class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis deleniti, harum iusto magni optio quae ratione reprehenderit tempora. Molestiae, voluptas?</p>
                <table class="table table-dark table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection()
