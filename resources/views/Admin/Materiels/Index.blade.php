@include("includes.Admin_header")
    <main class="d-flex flex-column w-100" style="margin-left: 15em;">
      <div class="p-4 p-lg-5 pb-2">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3">
          <div>
            <h2 class="display-6 fw-black mb-1">Gestion des Materiels</h2>
            <p class="mb-0 text-white-50">Administrez les accès et les Materiels de votre boutique de bijoux berbères.</p>
          </div>
            <a href="/Admin/Materiels/AddMateriel" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
              <i class="bi bi-plus"></i> Ajouter un materiel
            </a>
        </div>
      </div>
      <div class="p-4 p-lg-5 container-fluid">
        <div class="card-dark rounded mt-4">
          <div class="d-flex align-items-center justify-content-between px-4 py-3 border-bottom" style="border-color:var(--bb-border-dark)!important;">
            <h4 class="fw-bold mb-0">Liste des Materiels</h4>
          </div>
          <div class="table-responsive">
            <table class="table table-materiels align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Nom du Materiel</th>
                  <th class="px-4 py-3">Date de Création</th>
                  <th class="px-4 py-3 text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                @if ($materiels->total() > 0)                  
                  @foreach ($materiels as $materiel)
                    <tr>
                      <td class="px-4 py-3">
                        <div class="d-flex align-items-center gap-2">
                          <span class="fw-semibold">{{ $materiel->name }}</span>
                        </div>
                      </td>
                      <td class="px-4 py-3 small">{{ $materiel->created_at }}</td>
                      <td class="px-4 py-3 text-end">
                        <div class="d-inline-flex align-items-center gap-1">
                          <a href="/Admin/Materiels/EditMateriel/{{ $materiel->id }}" class="btn btn-sm text-white-50"><i class="bi bi-pencil text-success fw-bold fs-5"></i></a>
                          <form action="/Admin/Materiels/destroy/{{ $materiel->id }}" method="post">
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
                    <td colspan="4" class="text-center py-4">Il n'y a pas encore de Materiels.</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
          <div class="p-3 d-flex align-items-center justify-content-between border-top border-opacity-25">
            <p class="mb-0 small text-white-50">Affichage de {{ $materiels->firstItem() }} à {{ $materiels->lastItem() }} sur {{ $materiels->total() }} utilisateurs</p>
            <div class="d-flex gap-2">{{ $materiels->links() }}</div>
          </div>
        </div>
    </main>