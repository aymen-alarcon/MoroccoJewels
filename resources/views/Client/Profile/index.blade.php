@include("includes.header")
<style>
.product-card{
    background:rgba(45,10,10,.4);
    border:1px solid rgba(255,255,255,.05);
    border-radius:.75rem;
    transition:.3s;
}
.product-card:hover{
    border-color:rgba(250,198,56,.3);
}

.product-img{
    aspect-ratio:3/4;
    object-fit:cover;
    transition:transform .5s ease;
}
.product-card:hover .product-img{
    transform:scale(1.05);
}

.overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.4);
    opacity:0;
    transition:.3s;
}
.product-card:hover .overlay{
    opacity:1;
}

.icon-btn{
    width:44px;
    height:44px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    border:none;
}

.icon-primary{
    background: rgba(255, 255, 255, .1);;
    color:var(--background-dark);
    transition: ease-in-out 0.3s;
}

.icon-danger{
    background:rgba(255,255,255,.1);
    color:white;
    transition: ease-in-out 0.3s;
}

.icon-danger:hover{
    background:#dc3545;
}

.icon-primary:hover{
    background:#3ebbe5;
}
</style>
  <main class="position-relative">
    <div class="moroccan-pattern"></div>

    <div class="container-xxl px-3 px-lg-5 py-5" style="max-width:1200px; position:relative; z-index:1;">
      <div class="surface rounded p-4 p-md-5 mb-4">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4">
          <div class="d-flex align-items-center gap-3 gap-md-4">
            <div class="avatar-96" style="background-image:url('{{ asset("storage/" . $user->profile_picture) }}');"></div>
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
          <a href="/Client/Profile/Edit" class="text-white btn fw-bold"><i class="bi bi-pencil"></i> Modifier le profil</a>
        </div>
      </div>

      <div class="border-bottom mb-4" style="border-color:var(--bb-border)!important;">
        <div class="d-flex tabs-line gap-4 overflow-auto">
          <a href="#" id="personIcon" class="active d-flex flex-column align-items-center gap-1 text-decoration-none">
            <i class="bi bi-person"></i>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Informations</span>
          </a>
          <a href="#" id="heartIcon" class="d-flex flex-column align-items-center gap-1 text-decoration-none">
            <i class="bi bi-heart"></i>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Mes Favoris</span>
          </a>
          <a href="#" id="orderIcon" class="d-flex flex-column align-items-center gap-1 text-decoration-none">
            <i class="bi bi-chat-left"></i>
            <span class="text-uppercase fw-bold" style="font-size:11px;letter-spacing:.18em;">Mes Demandes</span>
          </a>
        </div>
      </div>

      <div class="row g-4" id="informationSection">
        <div class="col-12 col-lg-4 d-flex flex-column gap-3">
          <div class="surface rounded p-4">
            <h3 class="h6 fw-bold mb-3 d-flex align-items-center gap-2" style="color:var(--bb-primary);">Détails personnels</h3>
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
                  <div class="small fw-semibold">+212 {{ $user->phone }}</div>
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
                Mes Favoris <span class="small fw-normal text-white-50">({{ count($user->favorite) }} articles)</span>
              </h3>
              <a href="#" class="small fw-bold text-decoration-underline" style="color:var(--bb-primary);">Voir tout</a>
            </div>
            <div class="row g-3">
              @if (count($user->favorite) > 0)
                @foreach ($user->favorite as $product)                
                  <div class="col-12 col-sm-6">
                    <div class="favorite-card surface rounded-3 d-flex">
                      <div class="thumb" style="background-image:url('{{ asset("storage/" . $product->main_image) }}');"></div>
                      <div class="p-3 d-flex flex-column justify-content-between">
                        <div>
                          <p class="text-uppercase small fw-bold mb-1" style="color:var(--bb-primary);letter-spacing:.12em;">{{ $product->name }}</p>
                          <h4 class="small fw-bold mb-0">{{ $product->description }}</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-end mt-3">
                          <a href="/Client/RemoveFromFavorites/{{ $product->pivot->product_id }}/{{ $product->pivot->user_id }}" class="btn btn-sm text-white-50"><i class="bi bi-trash3"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              @else
                <div class="col-12">
                  <div class="product-card p-3">
                    <span>You have no Products in your favorites list</span>
                  </div>
                </div>
              @endif
            </div>
          </section>

          <section>
            <h3 class="h5 fw-bold mb-3">Mes Demandes d'Information</h3>
            <div class="surface rounded">
              <div class="table-responsive">
                <table class="table table-inquiries align-middle mb-0 text-white">
                  <thead>
                    <tr>
                      <th class="px-3 px-md-4 py-3">Article</th>
                      <th class="px-3 px-md-4 py-3">Price</th>
                      <th class="px-3 px-md-4 py-3">Status</th>
                      <th class="px-3 px-md-4 py-3">Date</th>
                      <th class="px-3 px-md-4 py-3">Statut</th>
                      <th class="px-3 px-md-4 py-3 text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($user->order) > 0)
                      @foreach ($user->order as $order)
                        <tr>
                          <td class="px-3 px-md-4 py-3 fw-bold">#ORD-{{ $order->id }}</td>
                          <td class="px-3 px-md-4 py-3 fw-bold">{{ $order->total_price }}</td>
                          <td class="px-3 px-md-4 py-3 fw-bold">{{ $order->status }}</td>
                          <td class="px-3 px-md-4 py-3">{{ $order->created_at->format("M d, Y") }}</td>
                          <td class="px-3 px-md-4 py-3">
                              <span class="badge rounded-2 fw-bold" style="font-size:.65rem;
                                @if($order->status === "Delivered")
                                  background: #ddfff3; color:#34d399; border:1px solid rgba(34,197,94,.25);
                                @elseif($order->status === "Canceled")
                                  background: #fec5cb; color:#dc3545; border:1px solid #dc3545;
                                @elseif($order->status === "Pending")
                                  background: #f1f1f1; color:#808080; border:1px solid #808080; 
                                @elseif($order->status === "Approved")
                                  background: #fff6da; color:#ffc107; border:1px solid #ffc107; 
                                @endif
                                ">
                              {{ $order->status }}</span>
                          </td>
                          <td class="px-3 px-md-4 py-3 text-end">
                            @if ($order->status === "pending")
                              <form action="/Admin/Orders/update/{{ $order->id }}" method="post">
                                @csrf
                                @method("PUT")

                                <button type="submit" name="status" value="Canceled" href="/Order/OrderItems/{{ $order->id }}" class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Cancel</button>
                              </form>                  
                              <a href="/Order/OrderItems/{{ $order->id }}" class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</a>
                            @else
                              <a href="/Order/OrderItems/{{ $order->id }}" class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</a>
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr>
                        <td colspan="6" class="px-3 px-md-4 py-3 fw-bold">You Haven'table Placed An Order Yet</td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>

      <div class="container py-5 d-none" id="favoriteSection">
        <div class="row g-4">
          @if (count($user->favorite) > 0)  
            @foreach ($user->favorite as $product)
              <div class="col-6">
                <div class="product-card p-3">
                  <div class="position-relative rounded-3">
                    <img src="{{ asset("storage/" . $product->main_image) }}" class="w-100 product-img" style="height: 20em">
                    <div class="overlay d-flex align-items-center justify-content-center gap-3">
                      <a href="/Home/Collection/Details/{{ $product->id }}" class="icon-btn icon-primary"><i class="bi bi-eye-fill"></i></a>
                      <button class="icon-btn icon-danger"><i class="bi bi-trash-fill"></i></button>
                    </div>
                  </div>
                  <div class="mt-3">
                    <div class="text-warning text-uppercase fw-bold small mb-1">{{ $product->name }}</div>
                    <h6 class="fw-bold mb-3">{{ $product->description }}</h6>
                  </div>
                </div>
              </div>
            @endforeach           
            @else
              <div class="col-12">
                <div class="product-card p-3">
                  <span>You have no Products in your favorites list</span>
                </div>
              </div>
            @endif
        </div>
      </div>

      <main class="container my-5 d-none" id="ordersSection">
        <div class="row g-5">
          <section class="col-md-12">
            <h2 class="fw-bold display-6 mb-3">Mes Demandes de Renseignements</h2>
            <p class="text-white-50 mb-4">Suivez vos échanges avec nos artisans pour vos pièces d'exception.</p>
              <table class="table table-inquiries align-middle mb-0 text-white">
                <thead>
                  <tr>
                    <th class="px-3 px-md-4 py-3">Article</th>
                    <th class="px-3 px-md-4 py-3">Price</th>
                    <th class="px-3 px-md-4 py-3">Status</th>
                    <th class="px-3 px-md-4 py-3">Date</th>
                    <th class="px-3 px-md-4 py-3">Statut</th>
                    <th class="px-3 px-md-4 py-3 text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($user->order) > 0)
                    @foreach ($user->order as $order)
                          <tr>
                            <td class="px-3 px-md-4 py-3 fw-bold">#ORD-{{ $order->id }}</td>
                            <td class="px-3 px-md-4 py-3 fw-bold">{{ $order->total_price }}</td>
                            <td class="px-3 px-md-4 py-3 fw-bold">{{ $order->status }}</td>
                            <td class="px-3 px-md-4 py-3">{{ $order->created_at->format("M d, Y") }}</td>
                            <td class="px-3 px-md-4 py-3">
                              <span class="badge rounded-2 fw-bold" style="font-size:.65rem;
                                @if($order->status === "Delivered")
                                  background: #ddfff3; color:#34d399; border:1px solid rgba(34,197,94,.25);
                                @elseif($order->status === "Canceled")
                                  background: #fec5cb; color:#dc3545; border:1px solid #dc3545;
                                @elseif($order->status === "Pending")
                                  background: #f1f1f1; color:#808080; border:1px solid #808080; 
                                @elseif($order->status === "Approved")
                                  background: #fff6da; color:#ffc107; border:1px solid #ffc107; 
                                @endif
                                ">
                              {{ $order->status }}</span>
                            </td>
                            <td class="px-3 px-md-4 py-3 text-end">
                              @if ($order->status === "Pending")
                                <form action="/Admin/Orders/update/{{ $order->id }}" method="post">
                                  @csrf
                                  @method("PUT")

                                  <button type="submit" name="status" value="Canceled" href="/Order/OrderItems/{{ $order->id }}" class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Cancel</button>
                                </form>                  
                                <a href="/Order/OrderItems/{{ $order->id }}" class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</a>
                              @else
                                <a href="/Order/OrderItems/{{ $order->id }}" class="btn btn-link p-0 fw-bold" style="color:var(--bb-primary);">Lire</a>
                              @endif
                            </td>
                          </tr>
                    @endforeach
                  @else
                    <tr>
                      <tr>
                        <td colspan="6" class="px-3 px-md-4 py-3 fw-bold">You Haven'table Placed An Order Yet</td>
                      </tr>
                    </tr>
                  @endif
                </tbody>
              </table>
          </section>
        </div>
      </main>
    </div>
  </main>
@include("includes.footer")