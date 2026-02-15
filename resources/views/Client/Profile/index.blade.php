  @include("includes.header")
  <main class="position-relative">
    <div class="moroccan-pattern"></div>

    <div class="container-xxl px-3 px-lg-5 py-5" style="max-width:1200px; position:relative; z-index:1;">
      <div class="surface rounded-xl p-4 p-md-5 mb-4">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3 gap-md-4">
            <div class="position-relative">
              <div class="avatar-96"
                   style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuAGzy1EiC6j0Wu3hcjrCC2MHMHbFgETsiW-oKeQKD0zAXxrBAuPoGqcc4Usf2cZHnyIdyD9sn_CXsTAoLd96CcoyowfCYHQE7mYF9-QshTWY9SxEWW0zwe4ty_4jIFL14M_2WhNtRMiq_OYZEqKcN7pN2FIpi_SPD2LwvTI7yIVmKIiKci-7U5domyK4I5Fc5_RCNt_c7L1lAIVOvTR0sUd5skkwJRhiE3zYcxWHYQ7xIlwKx301-zjYQQFqBEyA2UZA026YXNiKNs');"></div>
              <div class="position-absolute bottom-0 end-0 translate-middle-y rounded-circle border"
                   style="background:var(--bb-primary); color:#2b1600; width:22px; height:22px; display:grid; place-items:center; border-color:var(--bb-bg-dark);">
                <i class="bi bi-check2"></i>
              </div>
            </div>
            <div>
              <h2 class="h4 fw-bold mb-1">
                Bienvenue, 
                @auth
                  {{ $user->first_name }} {{ $user->last_name }}
                @endauth
              </h2>
              <div class="d-flex flex-column gap-1">
                <p class="small text-white-50 mb-0 d-flex align-items-center gap-2">
                  <i class="bi bi-calendar3"></i> Membre depuis 
                  {{ $user->created_at->format("Y-M") }}
                </p>
                <p class="small text-white-50 mb-0 d-flex align-items-center gap-2">
                  <i class="bi bi-geo-alt"></i> 
                  @if (isset($user->city) && isset($user->country))
                    {{ $user->city }} - {{ $user->country }}
                  @else
                    Not Declared
                  @endif
                </p>
              </div>
            </div>
          </div>

          <button class="text-white btn fw-bold">
            <i class="bi bi-pencil"></i> Modifier le profil
          </button>
        </div>
      </div>

      <div class="border-bottom mb-4" style="border-color:var(--bb-border)!important;">
        <div class="d-flex tabs-line gap-4 overflow-auto">
          <a href="#" class="active d-flex flex-column align-items-center gap-1 text-decoration-none">
            <i class="bi bi-person"></i>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Informations</span>
          </a>
          <a href="#" class="d-flex flex-column align-items-center gap-1 text-decoration-none">
            <i class="bi bi-heart"></i>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Mes Favoris</span>
          </a>
          <a href="#" class="d-flex flex-column align-items-center gap-1 text-decoration-none">
            <i class="bi bi-chat-left"></i>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Mes Demandes</span>
          </a>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-12 col-lg-4 d-flex flex-column gap-3">
          <div class="surface rounded-xl p-4">
            <h3 class="h6 fw-bold mb-3 d-flex align-items-center gap-2" style="color:var(--bb-primary);">
              <span class="material-symbols-outlined">badge</span> Détails personnels
            </h3>
            <div class="d-flex flex-column gap-3">
              <div class="pb-3" style="border-bottom:1px solid rgba(255,255,255,.06);">
                <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.18em;color:rgba(255,255,255,.4);">Nom Complet</div>
                <div class="small fw-semibold">{{ $user->first_name }} {{ $user->last_name }}</div>
              </div>
              <div class="pb-3" style="border-bottom:1px solid rgba(255,255,255,.06);">
                <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.18em;color:rgba(255,255,255,.4);">Adresse E‑mail</div>
                <div class="small fw-semibold">{{ $user->email }}</div>
              </div>
              <div>
                <div class="text-uppercase small fw-bold mb-1" style="letter-spacing:.18em;color:rgba(255,255,255,.4);">Téléphone</div>
                @if (isset($user->phone) && !empty($user->phone))                  
                  <div class="small fw-semibold">{{ $user->phone }}</div>
                @else
                  <div class="small fw-semibold">Not Declared</div>
                @endif
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-8 d-flex flex-column gap-4">
          <section>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3 class="h5 fw-bold mb-0 d-flex align-items-center gap-2">
                Mes Favoris <span class="small fw-normal text-white-50">(3 articles)</span>
              </h3>
              <a href="#" class="small fw-bold text-decoration-underline" style="color:var(--bb-primary);">Voir tout</a>
            </div>
            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <div class="favorite-card surface rounded-3 d-flex overflow-hidden">
                  <div class="thumb" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuBjpGT-AidvowMnbF4UJdAXjxBKQPpSTXzLpO6ae3pk5PQA91B3grUaHPMtKr96jw9govAK9OT4xKYC9xm1ApNDLwv80d1Z7YBTcEM5jPSZhExK9r5I91OUTLI1K5R2t3dlFMQKNg1Qn6fvD4BNNuDNSKZZ16iPCWGN8KopHWSURlnouusPYs2HrNSIm04GFoKf8OaVXddIYEFzZJHgYgVCyBKxy3M0dH5gmg-X68BBKYsA_OHc1qe3nA6rc44-JzqjS4xkqSZsZV0');"></div>
                  <div class="p-3 d-flex flex-column justify-content-between">
                    <div>
                      <p class="text-uppercase small fw-bold mb-1" style="color:var(--bb-primary);letter-spacing:.12em;">Argent & Émail</p>
                      <h4 class="small fw-bold mb-0">Collier Fibule Tiznit Classique</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                      <button class="btn btn-link p-0 small fw-bold text-decoration-underline">Détails</button>
                      <button class="btn btn-sm text-white-50"><i class="bi bi-trash3"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="favorite-card surface rounded-3 d-flex overflow-hidden">
                  <div class="thumb" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuBMFXISyBn3JP6CY3833sW-KWhVSNp2NsOBClTRNrbSGBFdzSQDo3f6-OPIpE6Ue5SycdVN8VFFzX5RI76wlYNYHYVdgtX-T9wpJNWXOOjDhtAQiY_6_Y-NrnlNMyI9WaqRnGl7GyoofoheWxHs9OCmzDMtwxhO0yC48_TKwSdjIb-mahwCOb9K7CKCTMpO5Rl3w1CjsCgMKfgAJ7SoQNQnyxyOJj3ZWnIRd-iCFFnUOs-0-u9iN4zngyvBITiaLpqO3Hpi1K3yJUY');"></div>
                  <div class="p-3 d-flex flex-column justify-content-between">
                    <div>
                      <p class="text-uppercase small fw-bold mb-1" style="color:var(--bb-primary);letter-spacing:.12em;">Ambre Naturelle</p>
                      <h4 class="small fw-bold mb-0">Bracelet ‘Ziri’ en Argent Ciselé</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                      <button class="btn btn-link p-0 small fw-bold text-decoration-underline">Détails</button>
                      <button class="btn btn-sm text-white-50"><i class="bi bi-trash3"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section>
            <h3 class="h5 fw-bold mb-3">Mes Demandes d'Information</h3>
            <div class="surface rounded-xl overflow-hidden">
              <div class="table-responsive">
                <table class="table table-inquiries align-middle mb-0 text-white">
                  <thead>
                    <tr>
                      <th class="px-3 px-md-4 py-3">Article</th>
                      <th class="px-3 px-md-4 py-3">Price</th>
                      <th class="px-3 px-md-4 py-3">Quantity</th>
                      <th class="px-3 px-md-4 py-3">Date</th>
                      <th class="px-3 px-md-4 py-3">Statut</th>
                      <th class="px-3 px-md-4 py-3 text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($user->order) > 0)
                      @foreach ($user->order as $order)
                          @foreach ($order->orderItems as $item)
                            <tr>
                              <td class="px-3 px-md-4 py-3 fw-bold">{{ $item->product_name }}</td>
                              <td class="px-3 px-md-4 py-3 fw-bold">{{ $item->price }}</td>
                              <td class="px-3 px-md-4 py-3 fw-bold">{{ $item->quantity }}</td>
                              <td class="px-3 px-md-4 py-3">{{ $item->created_at->format("M d, Y") }}</td>
                              <td class="px-3 px-md-4 py-3">
                                <span class="badge rounded-2 fw-bold" style="font-size:.65rem;background:rgba(34,197,94,.10);color:#34d399;border:1px solid rgba(34,197,94,.25);">{{ $order->status }}</span>
                              </td>
                              <td class="px-3 px-md-4 py-3 text-end">
                                <button class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</button>
                              </td>
                            </tr>
                          @endforeach
                      @endforeach
                    @else
                      <tr>
                        <td class="px-3 px-md-4 py-3 fw-bold">You</td>
                        <td class="px-3 px-md-4 py-3 fw-bold">Haven'table</td>
                        <td class="px-3 px-md-4 py-3 fw-bold">Placed An</td>
                        <td class="px-3 px-md-4 py-3">Order</td>
                        <td class="px-3 px-md-4 py-3">Yet</td>
                        <td class="px-3 px-md-4 py-3 text-end">
                          <button class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</button>
                        </td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>
@include("includes.footer")