<!DOCTYPE html>
<html class="dark" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>  
</head>
  <style>
    :root{
      --bb-primary:#efc139;
      --bb-bg-dark:#420F0E;
      --bb-text:#ffffff;
    }
    body{ font-family:'Manrope',sans-serif; background:var(--bb-bg-dark); color:var(--bb-text); min-height:100vh; }
    .material-symbols-outlined{ font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24; }
    .rounded-xl{ border-radius:.75rem!important; }

    .berber-pattern{
      position:absolute; inset:0; pointer-events:none;
      background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAnMqmyC8GOg6PdE6O-45L8qSvAq0N8vM4tjbu-Ut-dImLpsyIoqDPP7alD3kFEL6rUN4hSGMNTDHtiMR_rPa9W7Vw0kXJBywLJRbzu9fwYvrT_phgrCe6y0f2Neg0K1d3PNUwT6C4_2wXpCswbJh1XO-bOr93PwVeot-CTmLGmCa_T0hY70nwqp0A5DXRTfphUSat2oAd3JPtR4Iybmjc47mrFYO3pMb8nsL0RuvDhUD-KYpiJtJVBVb3Zvjv8Z6lm9lMqbsAEfpo');
      opacity:.05;
      background-size:cover;
    }

    .form-card{ background:rgba(51,15,14,.80); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,.1); }

    .form-control{
      background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.2); color:#fff; height:56px;
    }
    .form-control::placeholder{ color:rgba(255,255,255,.35); }
    .form-control:focus{
      border-color:color-mix(in srgb, var(--bb-primary) 50%, white);
      box-shadow:0 0 0 .15rem rgba(239,193,57,.18);
      background:rgba(255,255,255,.08);
      color:#fff;
    }

    .btn-primary{
      --bs-btn-bg: var(--bb-primary);
      --bs-btn-border-color: var(--bb-primary);
      --bs-btn-hover-bg: color-mix(in srgb, var(--bb-primary) 90%, black);
      --bs-btn-hover-border-color: color-mix(in srgb, var(--bb-primary) 90%, black);
      --bs-btn-color:#420F0E;
      box-shadow: 0 6px 20px rgba(239,193,57,.15);
    }

    .topbar{ background: rgba(66,15,14,.8); border-bottom:1px solid rgba(255,255,255,.1); backdrop-filter: blur(8px); }
    .footerbar{ background: rgba(66,15,14,.8); border-top:1px solid rgba(255,255,255,.1); }
  </style>
  <body>
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
                            <a class="nav-link-custom px-2 text-decoration-none" href="/Auth/Login">Login</a>
                        </div>
                    </div>
                </nav>
            </header>     