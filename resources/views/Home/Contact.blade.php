@include("includes.header")
            <main class="d-flex justify-content-center py-5 py-sm-6 px-4">
                <div class="px-4 container-xl">
                    <div class="row justify-content-between mb-4 p-3 text-center">
                        <div class="col-12 d-flex flex-column gap-3">
                            <h1 class="text-white fs-2 font-display leading-tight">
                                Contactez-nous
                            </h1>
                            <p class="text-background-light fs-5 fw-normal leading-normal mx-auto" style="max-width: 36rem">
                                Nous serions ravis d'avoir de vos nouvelles. Contactez-nous
                                pour toute question ou rendez-nous visite en magasin.
                            </p>
                        </div>
                    </div>
                    <div class="row g-4 g-lg-5 mt-4">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gap-4">
                                <div class="form-control p-5 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <p class="text-background-light fs-6 fw-normal leading-normal mb-0 text-truncate">
                                            contact@tazra.ma
                                        </p>
                                    </div>
                                    <div>
                                        <a class="text-accent fs-6 fw-medium text-decoration-none hover-underline" href="mailto:contact@tazra.ma">
                                            Envoyer un email
                                        </a>
                                    </div>
                                </div>
                                  <div class="form-control p-5 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <p class="text-background-light fs-6 fw-normal leading-normal mb-0 text-truncate">
                                            +212 620 102 416
                                        </p>
                                    </div>
                                    <div>
                                        <a class="text-accent fs-6 fw-medium text-decoration-none hover-underline" href="tel:+212600123456">
                                            Nous appeler
                                        </a>
                                    </div>
                                </div>
                                <div class="form-control p-5 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <p class="text-background-light fs-6 fw-normal leading-normal mb-0 text-truncate">
                                            Riad El Arous N°324 Medina Marrakech, Maroc
                                        </p>
                                    </div>
                                    <div>
                                        <a class="text-accent fs-6 fw-medium text-decoration-none hover-underline" href="#">
                                            Itinéraire
                                        </a>
                                    </div>
                                </div>
                                <div class="p-4 p-sm-5 rounded border" style="background-color: rgba(255, 255, 255, 0.05);">
                                    <h3 class="fs-3 font-display mb-4 text-white">
                                        Envoyez-nous un message
                                    </h3>
                                    <form action="/send-contact" method="POST">
                                        @csrf
                                        @method("POST")
                                        <div class="mb-3">
                                            <label class="form-label text-background-light mb-1" for="name">Nom</label>
                                            <input type="text" class="form-control form-control" id="name" name="name" placeholder="Votre Nom">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-background-light mb-1" for="email">Email</label>
                                            <input type="email" class="form-control form-control" id="email" name="email" placeholder="votre.email@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-background-light mb-1" for="subject">Sujet</label>
                                            <input type="text" class="form-control form-control" id="subject" name="subject" placeholder="Comment pouvons-nous vous aider ?">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label text-background-light mb-1" for="message">Message</label>
                                            <textarea class="form-control form-control" id="message" name="message" rows="4" placeholder="Votre message..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-accent w-100 py-2">Envoyer le message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column gap-3">
                                <h3 class="fs-3 font-display text-white">
                                    Notre Emplacement
                                </h3>
                                <img src="{{ asset("img/Designer.png") }}" alt="Une carte stylisée montrant les rues et les emplacements à Marrakech.">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </main>
@include("includes.footer")