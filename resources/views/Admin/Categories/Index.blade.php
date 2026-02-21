@include("includes.Admin_header")
    <main class="d-flex flex-column w-100" style="margin-left: 15em;">
      <header class="p-4 p-lg-5 d-flex flex-wrap align-items-center justify-content-between gap-3 position-relative">
        <div>
          <h2 class="display-6 fw-black mb-1">Gestion des Produits</h2>
          <p class="text-primary opacity-75 mb-0">Gérez votre inventaire de bijoux berbères artisanaux.</p>
        </div>
        <div class="d-flex gap-2">
          <a href="/Admin/Categories/AddCategory" class="btn fw-bold rounded-lg d-inline-flex align-items-center gap-1" style="background:var(--bb-primary);color:#fff;">
            <i class="bi bi-plus"></i> Ajouter un Category
          </a>
        </div>
      </header>
      <div class="overflow-auto p-4 p-lg-5">
        <div class="rounded card-surface mb-3">
          <div class="d-flex align-items-center justify-content-between px-4 py-3" style="border-bottom:1px solid #5a1a19;">
            <h3 class="h6 fw-bold mb-0">Liste des catégories</h3>
          </div>
          <div class="table-responsive">
            <table class="table table-roles align-middle mb-0" style="background-color: #5A1A19">
              <thead>
                <tr>
                  <th class="px-4 py-3">Id</th>
                  <th class="px-4 py-3">Nom</th>
                  <th class="px-4 py-3">Description</th>
                  <th class="px-4 py-3 text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                @if ($categories->total() > 0)                  
                  @foreach ($categories as $category)                  
                  <tr>
                    <td class="px-4 py-3">
                      <div class="fw-bold">ID: CAT-{{ $category->id }}</div>
                    </td>
                    <td class="px-4 py-3">
                      <div class="fw-bold">{{ $category->name }}</div>
                    </td>
                    <td class="px-4 py-3 ">{{ $category->description }}</td>
                    <td class="px-4 py-3 text-end">
                      <div class="d-inline-flex align-items-center gap-1">
                        <a href="/Admin/Categories/EditCategory/{{ $category->id }}" class="btn btn-sm text-white-50"><i class="bi bi-pencil text-success fw-bold fs-5"></i></a>
                        <form action="/Admin/Categories/destroy/{{ $category->id }}" method="post">
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
                    <td colspan="4" class="text-center py-4">Il n'y a pas encore de catégories.</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
          <div class="d-flex align-items-center justify-content-between px-4 py-3" style="border-top:1px solid #5a1a19;">
            <p class="mb-0 small text-white-50">Affichage de {{ $categories->firstItem() }}-{{ $categories->lastItem() }} sur {{ $categories->total() }} catégories</p>
            <div class="d-flex gap-2">{{ $categories->links() }}</div>
          </div>
        </div>
      </div>
    </main>
  </div>