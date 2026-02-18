@include("includes.header")
            <section class="bg-black-20 py-4 py-sm-5 py-lg-6">
                <div class="w-100 max-w-6xl mx-auto px-4 px-sm-5 px-lg-6 row g-5 align-items-center">
                    <div class="col-md-6 d-flex flex-column gap-4">
                        <h2 class="fs-2 fs-sm-1 font-display text-accent">
                            {{ $product->name }}
                        </h2>
                        <p class="fs-5 text-text-dark-80">à un prix de {{ $product->price }} DH on a {{ $product->stock }} Produit dans le stock ce produit apartient au categorie {{ $product->category->name }} on a aussi complié une petite description {{ $product->description }} </p>
                        @auth                            
                            <div class="mt-3">
                                <a href="/Client/Cart/addToCart/{{ $product->id }}" class="btn custom-button">
                                    <span class="text-truncate">Ajouter Aux Panier</span>
                                </a>
                            </div>
                        @endauth
                    </div>
                    <div class="col-md-6">
                        <div class="mission-image w-100 h-80 h-md-96 bg-image-5 rounded-xl"></div>
                    </div>
                </div>
            </section>
            @if (isset($product->history))                
                <section class="py-4 py-sm-5 py-lg-6">
                    <div class="w-100 max-w-6xl mx-auto px-4 px-sm-5 px-lg-6">
                        <div class="row g-5 align-items-center">
                            <div class="col-md-12 order-md-2 order-1">
                                <div class="prose-content max-w-none text-text-dark-80">
                                    <h2 class="fs-2 fs-sm-1 font-display text-accent mb-4">
                                        Signification Historique
                                    </h2>
                                    <p class="fs-5 mb-3">{{ $product->history }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <section class="py-4 py-sm-5 py-lg-6 bg-black-20">
                <div class="w-100 max-w-6xl mx-auto px-4 px-sm-5 px-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="fs-2 fs-sm-1 font-display text-accent">
                            Matériel
                        </h2>
                        <p class="max-w-3xl mx-auto fs-5 text-text-dark-80 mt-3">
                            Un héritage transmis à travers les âges, au cœur des montagnes
                            de l'Atlas.
                        </p>
                    </div>
                    <div class="row g-4 text-text-dark-80">
                        <div class="col-md-4">
                            <div class="feature-card-2 h-100 d-flex flex-column align-items-center text-center p-4">
                                <h3 class="font-display fs-3 text-accent mb-3">
                                    Origines Millénaires
                                </h3>
                                <p class="mb-0">
                                    Les bijoux berbères puisent leurs racines dans des traditions
                                    pré-islamiques, mêlant influences africaines, méditerranéennes
                                    et sahariennes. Chaque motif est un vestige du passé, un
                                    symbole qui a traversé les siècles pour nous parvenir, chargé
                                    de la sagesse des anciens.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-card-2 h-100 d-flex flex-column align-items-center text-center p-4">
                                <h3 class="font-display fs-3 text-accent mb-3">
                                    Symboles & Amulettes
                                </h3>
                                <p class="mb-0">
                                    Au-delà de leur beauté, ces bijoux sont de puissantes
                                    amulettes. Le triangle (représentant la fertilité), le serpent
                                    (la vitalité) ou la fibule (l'union) sont des talismans
                                    destinés à protéger du mauvais œil, à assurer la prospérité et
                                    à célébrer les grands moments de la vie, de la naissance au
                                    mariage.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-card-2 h-100 d-flex flex-column align-items-center text-center p-4">
                                <h3 class="font-display fs-3 text-accent mb-3">
                                    Savoir-faire Ancestral
                                </h3>
                                <p class="mb-0">
                                    Le travail de l'argent, du niellage, du filigrane et de
                                    l'émail cloisonné est un art transmis de père en fils, de mère
                                    en fille. Nos artisans utilisent encore aujourd'hui des outils
                                    et des techniques séculaires pour façonner chaque pièce à la
                                    main, garantissant son authenticité et son caractère unique.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
@include("includes.footer")