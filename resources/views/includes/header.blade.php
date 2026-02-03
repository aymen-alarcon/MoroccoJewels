<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @if(session()->has('failed'))
        <div class="alert alert-danger d-flex justify-content-center align-items-center">
            {{ session()->get('failed') }}
        </div>
    @elseif(session()->has("success"))
        <div class="alert alert-success d-flex justify-content-center align-items-center">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="d-flex flex-column min-vh-100">
        <main>
            <header class="w-full max-w-6xl mx-auto px-4 px-sm-5 px-lg-6 py-5 d-flex flex-column align-items-center">
                <h1 class="text-center fs-1 fw-normal font-display tracking-wider text-accent mb-4">
                    Trésors Berbères
                </h1>
                <nav class="w-100 border-top border-bottom border-border-dark py-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center gap-4 gap-lg-5">
                            <a class="nav-link-custom px-2 text-decoration-none" href="/">Home</a>
                            <a class="nav-link-custom px-2 text-decoration-none" href="/Home/Collection">Nos Collections</a>
                            <a class="nav-link-custom px-2 text-decoration-none" href="/Home/History">Histoire</a>
                            <a class="nav-link-custom px-2 text-decoration-none" href="/Home/Gallery">Galerie</a>
                            <a class="nav-link-custom px-2 text-decoration-none" href="/Home/Contact">Contact</a>
                            @auth                                
                                <a class="nav-link-custom px-2 text-decoration-none" href="/Client/Profile">Profile</a>
                                <form action="/Auth/LogOut" method="POST">
                                    @csrf
                                    @method("POST")

                                    <button class="border border-0 bg-transparent nav-link-custom px-2 text-decoration-none" type="submit">Log Out</button>
                                </form>
                            @else
                                <a class="nav-link-custom px-2 text-decoration-none" href="/Auth/Login">Login</a>
                            @endauth
                        </div>
                    </div>
                </nav>
            </header>     