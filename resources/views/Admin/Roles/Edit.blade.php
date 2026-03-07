@include("includes.Admin_header")
    <main class="m-5">
        <form class="d-flex flex-column form-card p-3" style="margin-left: 15em" action="/Admin/Roles/EditRole/update/{{ $role->id }}" method="POST">
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
                    <label class="text-white fw-semibold small mb-2 d-block">Nom du rôle</label>
                    <input type="text" name="role_name" class="form-control rounded" value="{{ $role->role_name }}">
                </div>
        
                <div>
                    <div class="d-flex align-items-center gap-2 ps-3 border-start" style="border-color:var(--bb-primary)!important;">
                        <h2 class="text-white fw-bold mb-0" style="font-size:1.6rem;letter-spacing:-.015em;">Permissions du Rôle</h2>
                    </div>
                </div>
                <div class="d-flex gap-2 px-4">
                    <button type="button" id="check-all"   class="btn btn-sm btn-outline-success">Tout cocher</button>
                    <button type="button" id="uncheck-all" class="btn btn-sm btn-outline-warning">Tout décocher</button>
                </div>

                <div id="permissions-grid" class="row p-4 d-flex gap-3">
                    @foreach ($permissions as $permission)        
                        <div class="col-md-3 d-flex align-items-center justify-content-between">
                            <span class="text-white-75">{{ $permission->description }}</span>
                            @if ($role->permissions->contains($permission->id))
                                <div class="form-check form-switch m-0">
                                    <input class="form-check-input" value="{{ $permission->id }}" name="permissions[]" type="checkbox" checked>
                                </div>
                            @else
                                <div class="form-check form-switch m-0">
                                    <input class="form-check-input" value="{{ $permission->id }}" name="permissions[]" type="checkbox">
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary m-2 w-25 rounded px-4 py-2 fw-bold">Sauvegarder les changements</button>
            </div>
        </form>
    </main>
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>