@include("includes.Admin_header")
    <main class="d-flex justify-content-center w-100" style="margin-left: 20em;">
      <div class="w-100">
        <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 px-3 px-lg-4 py-4">
          <div>
            <h1 class="display-6 fw-black mb-1">Journaux d'Activité</h1>
            <p class="mb-0" style="color:color-mix(in srgb, var(--bb-primary) 80%, white);">Audit complet des modifications effectuées sur la plateforme.</p>
          </div>
        </div>

        <div class="m-3 rounded border">
          <div class="table-responsive">
            <table class="table table-roles align-middle mb-0">
              <thead>
                <tr>
                  <th class="px-3 py-3" style="width:12rem;">Time</th>
                  <th class="px-3 py-3" style="width:12rem;">Admin</th>
                  <th class="px-3 py-3">Description</th>
                </tr>
              </thead>
              <tbody>
                @if ($logs->count() > 0)                  
                  @foreach ($logs as $log)                  
                    <tr>
                      <td class="px-3 py-3 small text-white-75">
                        <div class="d-flex flex-column">{{ $log->created_at->format("Y-m-d") }}</div>
                      </td>
                      <td class="px-3 py-3">
                        <div class="d-flex align-items-center gap-2">
                          <span class="small fw-semibold">{{ $log->user->first_name }} {{ $log->user->last_name }}</span>
                        </div>
                      </td>
                      <td class="px-3 py-3 small fst-italic text-white-75">{{ $log->description }}</td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="3">There Is No Logs Registered Yet</td>
                @endif
              </tbody>
            </table>
          </div>

          <div class="d-flex align-items-center justify-content-between px-3 px-lg-4 py-3 text-white-75 small">
            <div>
              Affichage de {{ $logs->firstItem() }} à {{ $logs->lastItem() }} sur {{ $logs->total() }} entrées
            </div>
            <div class="px-3 px-lg-4 py-3">{{ $logs->links() }}</div>
          </div>
        </div>