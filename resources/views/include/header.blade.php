<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Laravel Practice Project</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css"/>
</head>
<body>

<header class="bg-dark py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand text-uppercase fw-normal" href="{{ route('home') }}"><span class="text-primary">Logo</span> Here</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 me-3 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('add-blog') }}">Add Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('manage-blog') }}">Manage Blog</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
