@include("includes.header")
<main class="container-xxl py-5 berber-pattern">
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="d-inline-flex align-items-center gap-2 fw-semibold text-primary text-decoration-none">
            <i class="bi bi-arrow-left"></i>
            Retour à la liste des commandes
        </a>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-4 mb-5 pb-4 border-bottom">
        <div>
            <div class="d-flex align-items-center gap-3 mb-2">
                <span class="badge bg-primary-subtle text-primary text-uppercase fw-bold">
                    Commande {{ $order->status }}
                </span>
                <span class=" small">
                    Passée le {{ $order->created_at->format("d-m-Y") }}
                </span>
            </div>
            <h2 class="fw-bold display-6">
                Articles de la Commande #ORD-{{ $order->id }}
            </h2>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light text-uppercase small">
                            <tr>
                                <th>Produit</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($OrderItems as $item)                                
                                <tr>
                                    <td class="text-muted">{{ $item->product_name }}</td>
                                    <td class="fw-semibold">{{ $item->price }}</td>
                                    <td class="text-center fw-bold">{{ $item->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card bg-primary text-white p-4 shadow-lg mb-4">
                <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                    <i class="bi bi-receipt"></i>
                    Résumé Financier
                </h5>
                <div class="d-flex justify-content-between small mb-2">
                    <span>Sous-total</span>
                    <span>{{ $order->total_price }} €</span>
                </div>
                <div class="d-flex justify-content-between small mb-2">
                    <span>TVA (20%)</span>
                    <span>{{ $order->total_price * 20 / 100 }} €</span>
                </div>
                <hr class="border-light">
                <div class="d-flex justify-content-between align-items-end">
                    <span class="text-uppercase small fw-bold">Total Général</span>
                    <span class="fs-3 fw-bold">{{ $order->total_price + $order->total_price * 20 / 100 }} €</span>
                </div>
                <div class="mt-4 pt-3 border-top border-light small text-uppercase opacity-75">
                    <span class="material-symbols-outlined small">verified</span>
                    Paiement Sécurisé via Stripe
                </div>
            </div>
        </div>
    </div>
</main>@include("includes.footer")