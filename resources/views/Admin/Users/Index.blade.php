@include("includes.Admin_header")
    <main class=" d-flex flex-column w-100" style="margin-left: 15em;">
      <div class="p-4 p-lg-5 pb-2">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3">
          <div>
            <h2 class="display-6 fw-black mb-1">Gestion des Utilisateurs</h2>
            <p class="mb-0 text-white-50">Administrez les accès et les rôles de votre boutique de bijoux berbères.</p>
          </div>
            <a href="/Admin/Users/AddUser" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
              Ajouter un utilisateur
            </a>
        </div>
      </div>
      <div class="px-4 px-lg-5">
        <div class="card-surface rounded-xl overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-4 py-3 border-bottom" style="border-color:var(--bb-border-dark)!important;">
              <h4 class="fw-bold mb-0">Liste des Rôles Système</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-roles align-middle mb-0" style="background-color: #5A1A19">
                <thead>
                  <tr>
                    <th class="px-4 py-3">Id</th>
                    <th class="px-4 py-3">Profile Picture</th>
                    <th class="px-4 py-3">First Name</th>
                    <th class="px-4 py-3">Last Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Rôle</th>
                    <th class="px-4 py-3">Date d'inscription</th>
                    <th class="px-4 py-3 text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($users) > 0)                    
                    @foreach ($users as $user)                  
                    <tr>
                      <td class="px-4 py-3">
                        <div class="small fw-bold">{{ $user->id }}</div>
                      </td>
                      <td class="px-4 py-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset("storage/" . $user->profile_picture) }}" class="rounded-circle" style="height: 5em; width: 5em;" alt="">
                      </td>
                      <td class="px-4 py-3">
                        <div class="text-dark">{{ $user->first_name }}</div>
                      </td>
                      <td class="px-4 py-3">
                        <div class="text-dark">{{ $user->last_name }}</div>
                      </td>
                      <td class="px-4 py-3">
                        <div class="small text-dark">{{ $user->email }}</div>
                      </td>
                      <td class="px-4 py-3">
                        <span class="badge-admin">{{ $user->role->role_name }}</span>
                      </td>
                      <td class="px-4 py-3">
                        <span class="small text-white-75">{{ $user->created_at }}</span>
                      </td>
                      <td class="px-4 py-3 text-end">
                        <div class="d-inline-flex align-items-center gap-1">
                          <a href="/Admin/Users/EditUser/{{ $user->id }}" class="btn btn-sm text-white-50"><i class="bi bi-pencil text-success fw-bold fs-5"></i></a>
                          <form action="/Admin/Users/destroy/{{ $user->id }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm text-danger"><i class="bi bi-trash3 fw-bold fs-5"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="4" class="text-center py-4">Il n'y a pas encore d'utilisateurs.</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <div class="p-3 d-flex align-items-center justify-content-between border-top border-opacity-25">
              <p class="mb-0 small text-white-50">Affichage de 1 à 3 sur 124 utilisateurs</p>
              <div class="d-flex gap-2">
                <button class="btn btn-sm rounded px-3 py-1 text-white-50 border border-opacity-25" disabled>Précédent</button>
                <button class="btn btn-sm rounded px-3 py-1 text-white-75 border border-opacity-25">Suivant</button>
              </div>
            </div>
        </div>
      </div>
    </main>
  </div>
  <style>
    @keyframes pulse { 0%{opacity:.6} 50%{opacity:1} 100%{opacity:.6} }
  </style>