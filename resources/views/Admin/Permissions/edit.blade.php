@include("includes.Admin_header")
<main class="m-5">
    <form class="d-flex flex-column w-100 form-card p-3" style="margin-left: 15em" action="/Admin/Permissions/EditPermission/update/{{ $permission->id }}" method="POST">
        @csrf
        @method("PUT")
    
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 px-4 px-md-5 py-4">
            <div class="d-flex flex-column gap-1">
                <p class="text-white fw-black" style="font-size:2.25rem;letter-spacing:-.03em;line-height:1.1;">
                    Modifier le Rôle Admin
                </p>
                <p class="text-white-50 mb-0">Mettez à jour les permissions et les détails d'accès au système</p>
            </div>
        </div>
    
        <div class="d-flex flex-column gap-4 px-4 px-md-5 pb-5">
            <div class="surface rounded p-4 m-4 w-100">
                <label class="text-white fw-semibold small mb-2 d-block">Nom du Permission</label>
                <input type="text" name="name" class="form-control rounded" value="{{ $permission->name }}">
            </div>
        </div>
        <div class="d-flex flex-column gap-4 px-4 px-md-5 pb-5">
            <div class="surface rounded p-4 m-4 w-100">
                <label class="text-white fw-semibold small mb-2 d-block">Description</label>
                <input type="text" name="description" class="form-control rounded" value="{{ $permission->description }}">
            </div>
        </div>
        {{-- <div class="d-flex flex-column gap-4 px-4 px-md-5 pb-5">
            <div class="surface rounded p-4 m-4 w-100">
                <select name="role" id="">
                    <option value="{{ $role->id }}" selected></option>
                    @foreach ($roles as $role)                        
                        <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary m-2 w-25 rounded px-4 py-2 fw-bold">Sauvegarder les changements</button>
        </div>
    </form>
</main>