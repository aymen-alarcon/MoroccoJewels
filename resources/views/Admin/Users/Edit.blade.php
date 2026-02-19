@include("includes.Admin_header")
<main class="d-flex justify-content-center p-5 position-relative z-1 w-100" style="margin-left: 15em">
    <div class="surface rounded-xl p-4 p-md-5 shadow">
    <h1>Modifier l'utilisateur</h1>

    <form class="d-flex flex-column gap-4" action="/Admin/Users/EditUser/update/{{ $userInfo->id }}" method="POST">
        @csrf
        @method("PUT")

        <div class="row g-4">
          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-person"></i>
              Prénom
            </label>
            <input type="text" name="first_name" class="form-control" placeholder="Ex: Fatima Zahra" value="{{ $userInfo->first_name }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-person"></i>
              Nom
            </label>
            <input type="text" name="last_name" class="form-control" placeholder="Ex: Fatima Zahra" value="{{ $userInfo->last_name }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-envelope"></i>
              Adresse e‑mail
            </label>
            <input type="email" name="email" class="form-control" placeholder="nom@exemple.com" value="{{ $userInfo->email }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-envelope"></i>
              street
            </label>
            <input type="text" name="street" class="form-control" placeholder="nom@exemple.com" value="{{ $userInfo->street }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-envelope"></i>
              city
            </label>
            <input type="text" name="city" class="form-control" placeholder="nom@exemple.com" value="{{ $userInfo->city }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-envelope"></i>
              country
            </label>
            <input type="text" name="country" class="form-control" placeholder="nom@exemple.com" value="{{ $userInfo->country }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-envelope"></i>
              zip
            </label>
            <input type="text" name="zip" class="form-control" placeholder="nom@exemple.com" value="{{ $userInfo->zip }}"/>
          </div>

          <div class="col-12 col-md-6">
            <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
              <i class="bi bi-envelope"></i>
              phone
            </label>
            <input type="number" name="phone" class="form-control" placeholder="nom@exemple.com" value="{{ $userInfo->phone }}"/>
          </div>
        </div>

        <div>
          <label class="small fw-semibold d-inline-flex align-items-center gap-1 mb-2 text-white">
            <i class="bi bi-shield-check"></i>
            Rôle de l'utilisateur
          </label>

          <div class="position-relative">
            <select class="form-select" name="role_id">
                @foreach ($roles as $role)                    
                    <option value="{{ $role->id }}" class="text-dark"
                        @if ($userInfo->role_id === $role->id)
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