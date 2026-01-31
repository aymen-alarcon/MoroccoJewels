<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestion des Rôles - Bijoux Berbères</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

  <style>
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
    <aside class="sidebar d-flex flex-column">
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
        <a class="nav-link-custom" href="#"><span class="material-symbols-outlined">dashboard</span><span class="small fw-semibold">Tableau de bord</span></a>
        <a class="nav-link-custom" href="#"><span class="material-symbols-outlined">shopping_bag</span><span class="small fw-semibold">Commandes</span></a>
        <a class="nav-link-custom" href="#"><span class="material-symbols-outlined">inventory_2</span><span class="small fw-semibold">Produits</span></a>
        <a class="nav-link-custom" href="#"><span class="material-symbols-outlined">group</span><span class="small fw-semibold">Clients</span></a>
        <a class="nav-link-custom nav-link-active" href="#">
          <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1;">admin_panel_settings</span>
          <span class="small fw-semibold">Rôles</span>
        </a>
      </nav>

      <div class="mt-auto p-3 border-top" style="border-color:var(--bb-border-dark)!important;">
        <div class="d-flex align-items-center gap-2 p-2">
          <div class="rounded-circle border border-2" style="width:40px;height:40px;background:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAZU12qZVfz81g4uS2dvt03aGFMCv49I7DAauEkTFx6Zk_o0ifuGJABYZeXxV_1ZxMOFBnAmW_DkuILFGJzX0AS873vK3Uoh5qhsWsoalrQ1PO-ZmTUOJp3wZpwIypUKrWKbez8kP8KzGIskYnaSwXjrMWhIoSqoH4E4uWk8-_WUpC1axvn7oVJMDZh0QfF0BEQBg1oc4ohZJ8bCVxDTa-5ctZPNXqv8m4X6YAqoGvunS2bty2PIlo-mjaNoq76oXnQqiStSnQxkDc') center/cover no-repeat;border-color:var(--bb-primary);"></div>
          <div class="text-truncate">
            <p class="mb-0 small fw-bold text-truncate">Yassine Amrani</p>
            <p class="mb-0 small" style="color:#94a3b8;">Gérant</p>
          </div>
        </div>
      </div>
    </aside>