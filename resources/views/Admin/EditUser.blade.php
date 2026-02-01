@include("includes.Admin_header")
<main class="d-flex justify-content-center p-5 position-relative z-1 w-100" style="margin-left: 15em">
    <div class="surface rounded-xl p-4 p-md-5 shadow-lg">
    <h1>Modifier l'utilisateur</h1>

    <form class="d-flex flex-column gap-4" action="/Admin/Users/EditUser/update/{{ $user->id }}" method="POST">
        @csrf
        @method("PUT")

        <div class="row g-4">
          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">person</span>
              Nom complet
            </label>
            <input type="text" name="name" class="form-control" placeholder="Ex: Fatima Zahra" value="{{ $user->name }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">mail</span>
              Adresse e‑mail
            </label>
            <input type="email" name="email" class="form-control" placeholder="nom@exemple.com" value="{{ $user->email }}"/>
          </div>
        </div>

        <div>
          <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
            <span class="material-symbols-outlined" style="font-size:16px;color:var(--bb-primary);">shield_person</span>
            Rôle de l'utilisateur
          </label>

          <div class="position-relative">
            <select class="form-select" name="role_id">
                @foreach ($roles as $role)                    
                    <option value="{{ $role->id }}" 
                        @if ($user->role_id === $role->id)
                            selected
                        @endif>
                        {{ $role->role_name }}
                    </option>
                @endforeach
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-primary fw-bold rounded-lg d-inline-flex align-items-center gap-2 px-4 py-2" style="height:48px;">
            Mettre à jour l'utilisateur
        </button>
    </form>
    </div>
</main>