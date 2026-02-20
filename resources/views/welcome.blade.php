@include("includes.header")
            <section class="w-100 container-lg mx-auto px-4 px-sm-5 px-lg-6 py-4 py-sm-5 py-lg-6 text-center">
                <h2 class="fs-2 font-display text-accent mb-3">
                    Les Gardiens de l'Héritage
                </h2>
                <p class="mx-auto fs-5 text-text-dark-80 mb-5">
                    Rencontrez la famille passionnée qui préserve et transmet l'art de
                    la joaillerie berbère. Chaque pièce est le fruit d'un héritage et
                    d'un amour pour la culture amazighe.
                </p>
                <div class="row g-5 align-items-end">
                    @foreach ($workers as $worker)
                        <div class="col-md-4 d-flex flex-column align-items-center gap-3 @if ($worker->role_id === 4) md-scale-200 @endif">
                            <div class="team-avatar" style="background-image: url({{ asset("storage/" . $worker->profile_picture) }})"></div>
                            <div>
                                <p class="fs-5 fw-bold font-display text-text-dark">{{ $worker->first_name }} {{ $worker->last_name }}</p>
                                <p class="text-accent fs-6 fw-medium font-display">{{ $worker->role->role_name }}</p>
                                <p class="fs-6 mt-2 text-text-dark-70">{{ $worker->email }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section class="bg-black-20 py-4 py-sm-5 py-lg-6">
                <div class="w-100 container-xl mx-auto px-4 px-sm-5 px-lg-6 row g-5 align-items-center">
                    <div class="col-md-6 d-flex flex-column gap-4">
                        <h2 class="fs-2 font-display text-accent">
                            Un Art Ancestral
                        </h2>
                        <p class="fs-5 text-text-dark-80">
                            Notre mission est de faire rayonner la beauté intemporelle des
                            bijoux berbères. Nous croyons en un artisanat authentique, où
                            chaque détail compte et chaque création raconte une histoire, un
                            symbole, une tradition.
                        </p>
                        <p class="fs-5 text-text-dark-80">
                            Notre voyage a commencé dans les montagnes de l'Atlas, inspiré
                            par la richesse des parures traditionnelles. Chaque bijou de
                            notre collection est une pièce de notre patrimoine, façonnée à
                            la main pour vous.
                        </p>
                        <div class="mt-3">
                            <a href="history.html" class="btn custom-button">
                                <span class="text-truncate">Découvrir l'histoire</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mission-image w-100 h-75 rounded"></div>
                    </div>
                </div>
            </section>
            <section class="py-4 py-sm-5 py-lg-6">
                <div class="w-100 container-xl mx-auto px-4 px-sm-5 px-lg-6">
                    <div class="row g-5 align-items-center">
                        <div class="col-md-6 order-md-1">
                            <div class="history-image w-100 h-100 rounded shadow"></div>
                        </div>
                        <div class="col-md-6 order-md-2">
                            <div class="prose-content max-w-none text-text-dark-80">
                                <h2 class="fs-2 font-display text-accent mb-4">
                                    L'Histoire gravée dans le métal
                                </h2>
                                <p class="fs-5 mb-3">
                                    Plus qu'un simple ornement, le bijou berbère est un langage.
                                    Transmis de mère en fille, il est le gardien d'une histoire
                                    millénaire, un symbole d'identité, de statut social et de
                                    protection spirituelle. Chaque pièce est un livre ouvert sur
                                    les croyances et les traditions des tribus amazighes.
                                </p>
                                <p class="fs-5 mb-3">
                                    Fabriqués principalement en argent, métal pur associé à la
                                    lune, les bijoux sont souvent incrustés de corail, d'ambre, ou
                                    d'émaux colorés. Ces matériaux ne sont pas choisis au hasard :
                                    ils portent en eux une charge symbolique forte, évoquant la
                                    protection, la fertilité et la prospérité.
                                </p>
                                <p class="fs-5 mb-0">
                                    Les formes géométriques — triangles, losanges, cercles — sont
                                    omniprésentes. Elles ne sont pas de simples décorations, mais
                                    des représentations stylisées de la nature, du cosmos et de la
                                    féminité. La fibule (tizerzaï), par exemple, est bien plus
                                    qu'une broche ; c'est un emblème de la femme et de son rôle
                                    central dans la société berbère.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-4 py-sm-5 py-lg-6 bg-black-20">
                <div class="w-100 container-xl mx-auto px-4 px-sm-5 px-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="fs-2 font-display text-accent">
                            Notre Histoire
                        </h2>
                        <p class="mx-auto fs-5 text-text-dark-80 mt-3">
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