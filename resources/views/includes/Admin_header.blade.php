<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestion des Rôles - Bijoux Berbères</title>
  <link rel="stylesheet" href="{{ asset("css/app.css") }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

  <style>
    .pattern{ background-image: radial-gradient(#5a1412 1px, transparent 1px); background-size:24px 24px; }

    .sidebar{ width:18rem; background:var(--bb-surface); border-right:1px solid var(--bb-border); }

    .card-surface{ background: rgba(51,11,10,.8); border:1px solid var(--bb-border); }
    .muted{ color:rgba(255,255,255,.6)!important; }

    .topbar{ background: rgba(51,11,10,.5); backdrop-filter:blur(6px); border-bottom:1px solid var(--bb-border); }
    .nav-pills .nav-link{ color:#cbd5e1; }
    .nav-pills .nav-link:hover{ color:#fff; background:rgba(255,255,255,.06); }
    .nav-pills .nav-link.active{
      color:#420f0e; background:var(--bb-primary); font-weight:800;
    }

    .badge-pill{
      background: rgba(250,198,56,.15); color: var(--bb-primary);
      border:1px solid rgba(250,198,56,.3);
      padding:.25rem .6rem; border-radius:999px; font-size:.7rem; font-weight:900; letter-spacing:.08em; text-transform:uppercase;
    }

    .table-logs thead th{
      background: rgba(255,255,255,.06);
      color:#cdb574; text-transform:uppercase; letter-spacing:.1em; font-weight:800; font-size:.75rem;
      border-bottom:1px solid rgba(255,255,255,.1);
    }
    .table-logs tbody tr:hover{ background: rgba(255,255,255,.04); }
    .table-logs td,.table-logs th{ border:none; }
    .table-logs tbody tr+tr{ border-top:1px solid rgba(255,255,255,.06); }

    .form-control, .form-select, .input-group-text{
      background:rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.12); color:#fff;
    }
    .form-control::placeholder{ color:rgba(255,255,255,.4); }
    .form-control:focus, .form-select:focus{
      border-color: color-mix(in srgb, var(--bb-primary) 45%, white);
      box-shadow: 0 0 0 .2rem rgba(250,198,56,.18);
      background:rgba(255,255,255,.08);
      color:#fff;
    }

    .is-hidden{ display:none!important; }
        :root{
      --bb-primary:#eebd2b;
      --bb-bg-light:#f8f7f6;
      --bb-bg-dark:#420F0E;
      --bb-surface-dark:#5A1A19;
      --bb-border-dark:#752A28;
    }
    body{ font-family:'Inter',sans-serif; background:var(--bb-bg-dark); color:#fff; }
    .material-symbols-outlined{ font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24; }
    .rounded-xl{ border-radius:.75rem!important; }
    .zellij-pattern { background-image: radial-gradient(#eebd2b 0.5px, transparent 0.5px); background-size:24px 24px; opacity:.05; }

    .sidebar { width:16rem; background: var(--bb-bg-dark); border-right:1px solid var(--bb-border-dark); }
    .nav-link-custom{ color: #cbd5e1; text-decoration:none; padding:.5rem .75rem; border-radius:.5rem; display:flex; align-items:center; gap:.5rem;}
    .nav-link-custom:hover{ background: var(--bb-surface-dark); }
    .nav-link-active{ background: color-mix(in srgb, var(--bb-primary) 20%, transparent); color: var(--bb-primary); }
    .topbar{ background: rgba(66,15,14,.8); backdrop-filter: blur(8px); border-bottom:1px solid var(--bb-border-dark); }
    .card-dark{ background: var(--bb-surface-dark); border:1px solid var(--bb-border-dark); }
    .border-dark-1{ border:1px solid var(--bb-border-dark)!important; }

    .table-roles thead th{ background: rgba(0,0,0,.12); color:#b0b8c0; text-transform:uppercase; letter-spacing:.1em; font-weight:800; font-size:.75rem; }
    .table-roles tbody tr:hover{ background: rgba(255,255,255,.08); }
    .badge-count{ background: rgba(255,255,255,.05); border:1px solid var(--bb-border-dark); border-radius:999px; padding:.25rem .65rem; font-weight:600; }
  </style>
</head>
<body>
  <div class="position-absolute top-0 start-0 end-0 bottom-0 zellij-pattern"></div>
  <div class="d-flex position-relative" style="z-index:1;">
    <aside class="sidebar d-flex flex-column vh-100 position-fixed">
      <div class="p-4 d-flex align-items-center gap-2">
        <div class="bg-warning d-inline-flex align-items-center justify-content-center rounded p-2" style="--bs-warning:var(--bb-primary); background:var(--bb-primary)!important;">
          <span class="material-symbols-outlined" style="color:var(--bb-bg-dark);">diamond</span>
        </div>
        <div>
          <h1 class="fs-6 fw-bold mb-0">Bijoux Berbères</h1>
          <p class="mb-0" style="font-size:12px;color:color-mix(in srgb, var(--bb-primary) 70%, white);">Administration</p>
        </div>
      </div>

      <nav class="px-3 mt-2 d-flex flex-column gap-2">
        <a class="nav-link-custom <?php if(basename($_SERVER["PHP_SELF"]) === "Dashboard"){ echo "nav-link-active";} ?>" href="/Admin/Dashboard"><i class="bi bi-clipboard-data"></i><span class="small fw-semibold">Tableau de bord</span></a>
        <a class="nav-link-custom <?php if(basename($_SERVER["PHP_SELF"]) === "Orders"){ echo "nav-link-active";} ?>" href="/Admin/Orders"><i class="bi bi-bag-check"></i><span class="small fw-semibold">Orders</span></a>
        <a class="nav-link-custom <?php if(basename($_SERVER["PHP_SELF"]) === "Products"){ echo "nav-link-active";} ?>" href="/Admin/Products"><i class="bi bi-box2"></i><span class="small fw-semibold">Products</span></a>
        <a class="nav-link-custom <?php if(basename($_SERVER["PHP_SELF"]) === "Categories"){ echo "nav-link-active";} ?>" href="/Admin/Categories"><i class="bi bi-tag"></i><span class="small fw-semibold">Categories</span></a>
        <a class="nav-link-custom <?php if(basename($_SERVER["PHP_SELF"]) === "Users"){ echo "nav-link-active";} ?>" href="/Admin/Users"><i class="bi bi-people"></i><span class="small fw-semibold">Clients</span></a>
        <a class="nav-link-custom <?php if(basename($_SERVER["PHP_SELF"]) === "Roles"){ echo "nav-link-active";} ?>" href="/Admin/Roles"><i class="bi bi-shield-lock"></i><span class="small fw-semibold">Roles</span></a>
      </nav>

      <div class="mt-auto p-3 border-top" style="border-color:var(--bb-border-dark)!important;">
        <a href="/Admin/Profile" class="d-flex align-items-center gap-2 p-2">
          <div class="rounded-circle border" style="width:40px;height:40px;background:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAZU12qZVfz81g4uS2dvt03aGFMCv49I7DAauEkTFx6Zk_o0ifuGJABYZeXxV_1ZxMOFBnAmW_DkuILFGJzX0AS873vK3Uoh5qhsWsoalrQ1PO-ZmTUOJp3wZpwIypUKrWKbez8kP8KzGIskYnaSwXjrMWhIoSqoH4E4uWk8-_WUpC1axvn7oVJMDZh0QfF0BEQBg1oc4ohZJ8bCVxDTa-5ctZPNXqv8m4X6YAqoGvunS2bty2PIlo-mjaNoq76oXnQqiStSnQxkDc') center/cover no-repeat;border-color:var(--bb-primary);"></div>
            <div class="text-truncate">
              <p class="mb-0 small fw-bold text-truncate">Yassine Amrani</p>
              <p class="mb-0 small" style="color:#94a3b8;">Gérant</p>
            </div>
          </div>
        </a>
    </aside>