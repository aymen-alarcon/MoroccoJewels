<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestion des Rôles - Bijoux Berbères</title>
  <link rel="stylesheet" href="{{ asset("css/app.css") }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-surface {
      background: rgba(51, 11, 10, .8);
      border: 1px solid var(--bb-border);
    }

    .nav-pills .nav-link {
      color: #cbd5e1;
    }

    .nav-pills .nav-link:hover {
      color: #fff;
      background: rgba(255, 255, 255, .06);
    }

    .nav-pills .nav-link.active {
      color: #420f0e;
      background: var(--bb-primary);
      font-weight: 800;
    }

    .form-control, .form-select, .input-group-text {
      background: rgba(255, 255, 255, .06);
      border: 1px solid rgba(255, 255, 255, .12);
      color: #fff;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, .4);
    }

    .form-control:focus, .form-select:focus {
      border-color: color-mix(in srgb, var(--bb-primary) 45%, white);
      box-shadow: 0 0 0 .2rem rgba(250, 198, 56, .18);
      background: rgba(255, 255, 255, .08);
      color: #fff;
    }

    :root {
      --bb-primary: #eebd2b;
      --bb-bg-light: #f8f7f6;
      --bb-bg-dark: #420F0E;
      --bb-surface-dark: #5A1A19;
      --bb-border-dark: #752A28;
    }

    .sidebar {
      width: 16rem;
      border-right: 1px solid var(--bb-border-dark);
    }

    .nav-link-custom {
      color: #cbd5e1;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: .5rem;
    }

    .nav-link-active {
      background: color-mix(in srgb, var(--bb-primary) 20%, transparent);
      color: var(--bb-primary);
    }

    .card-dark {
      background: var(--bb-surface-dark);
      border: 1px solid var(--bb-border-dark);
    }

    .table-roles thead th {
      background: rgba(0, 0, 0, .12);
      color: #b0b8c0;
      text-transform: uppercase;
      letter-spacing: .1em;
      font-weight: 800;
      font-size: .75rem;
    }
  </style>
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
  <div class="d-flex position-relative" style="z-index:1;">
    <aside class="sidebar d-flex flex-column vh-100 position-fixed ">
      <div class="p-4 d-flex align-items-center gap-2">
        <div>
          <h1 class="fs-6 fw-bold mb-0">Bijoux Berbères</h1>
          <p class="mb-0" style="font-size:12px;color:color-mix(in srgb, var(--bb-primary) 70%, white);">Administration</p>
        </div>
      </div>
      <nav class="px-3 mt-2 d-flex flex-column gap-2">
        <a class="nav-link-custom p-2 rounded <?php if(basename($_SERVER["PHP_SELF"]) === "Dashboard"){ echo "nav-link-active";} ?>" href="/Admin/Dashboard"><i class="bi bi-clipboard-data"></i><span class="small fw-semibold">Tableau de bord</span></a>
        <a class="nav-link-custom p-2 rounded <?php if(basename($_SERVER["PHP_SELF"]) === "Orders"){ echo "nav-link-active";} ?>" href="/Admin/Orders"><i class="bi bi-bag-check"></i><span class="small fw-semibold">Orders</span></a>
        <a class="nav-link-custom p-2 rounded <?php if(basename($_SERVER["PHP_SELF"]) === "Products"){ echo "nav-link-active";} ?>" href="/Admin/Products"><i class="bi bi-box2"></i><span class="small fw-semibold">Products</span></a>
        <a class="nav-link-custom p-2 rounded <?php if(basename($_SERVER["PHP_SELF"]) === "Categories"){ echo "nav-link-active";} ?>" href="/Admin/Categories"><i class="bi bi-tag"></i><span class="small fw-semibold">Categories</span></a>
        <a class="nav-link-custom p-2 rounded <?php if(basename($_SERVER["PHP_SELF"]) === "Users"){ echo "nav-link-active";} ?>" href="/Admin/Users"><i class="bi bi-people"></i><span class="small fw-semibold">Clients</span></a>
        <a class="nav-link-custom p-2 rounded <?php if(basename($_SERVER["PHP_SELF"]) === "Roles"){ echo "nav-link-active";} ?>" href="/Admin/Roles"><i class="bi bi-shield-lock"></i><span class="small fw-semibold">Roles</span></a>
      </nav>
      <div class="mt-auto p-3 border-top">
        <a href="/Admin/Profile" class="d-flex align-items-center gap-2 p-2 text-decoration-none">
          <div class="rounded-circle border" style="width:40px;height:40px;background:url('{{ asset("storage/" . $user->profile_picture) }}') center/cover no-repeat;"></div>
            <div>
              <p class="mb-0 small fw-bold text-truncate">{{ $user->first_name }} {{ $user->last_name }}</p>
              <p class="mb-0 small" style="color:#94a3b8;">{{ $user->role->role_name }}</p>
            </div>
          </div>
        </a>
    </aside>