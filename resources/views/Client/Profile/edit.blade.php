@include("includes.header")
<style>
:root {
    --primary: #430f0e;
    --accent: #c39998;
    --background-dark: #201312;
}

/* Background Pattern */
.berber-pattern {
    background-image: radial-gradient(#430f0e 0.5px, transparent 0.5px);
    background-size: 24px 24px;
    opacity: 0.1;
    position: absolute;
    inset: 0;
    pointer-events: none;
}

/* Glass Panel */
.glass-panel {
    background: rgba(48, 29, 28, 0.6);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(195, 153, 152, 0.1);
    border-radius: 12px;
}

/* Header */
.navbar-custom {
    background: rgba(32, 19, 18, 0.85);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(67, 15, 14, 0.3);
}

/* Buttons */
.btn-accent {
    background-color: var(--accent);
    color: var(--primary);
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.btn-accent:hover {
    transform: scale(1.02);
}

.btn-outline-accent {
    border: 1px solid rgba(195,153,152,0.3);
    color: var(--accent);
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 1px;
}

.btn-outline-accent:hover {
    background-color: rgba(195,153,152,0.1);
}

/* Inputs */
.form-control {
    background: rgba(32, 19, 18, 0.6);
    border: 1px solid rgba(255,255,255,0.1);
    color: white;
}

.form-control:focus {
    background: rgba(32, 19, 18, 0.8);
    border-color: var(--accent);
    box-shadow: 0 0 0 0.1rem rgba(195,153,152,0.25);
    color: white;
}

/* Footer */
.footer {
    background-color: rgba(67,15,14,0.2);
    border-top: 1px solid rgba(67,15,14,0.3);
    margin-top: auto;
}

.text-accent {
    color: var(--accent);
}

.small-uppercase {
    font-size: 0.75rem;
    letter-spacing: 2px;
    text-transform: uppercase;
}
</style>
    <main class="flex-fill py-5">
        <div class="container">
            <div class="mb-5">
                <h2 class="fw-black">Modifier mon profil</h2>
                <p class="text-accent">Personnalisez vos informations pour une expérience sur mesure.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-12">
                    <form class="glass-panel p-4" action="/Client/Profile/Update/{{ $user->id }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method("PUT")
                        <h5 class="fw-bold mb-4">Informations personnelles</h5>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label class="small-uppercase text-accent">Image principale</label>
                                <input type="file" name="profile_picture" class="form-control align-content-center" accept="image/*" required/>
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Nom</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Prénom</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Adresse e-mail</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Quartier</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="street" placeholder="" value="{{ $user->street }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Ville</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="city" placeholder="" value="{{ $user->city }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Paye</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="country" placeholder="" value="{{ $user->country }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">ZIP</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="zip" placeholder="" value="{{ $user->zip }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="small-uppercase text-accent">Numéro de téléphone</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-dark text-white border-0">+212</span>
                                    <input type="tel" class="form-control" name="phone" value="{{ $user->phone }}">
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h5 class="fw-bold mb-4">Modifier le mot de passe</h5>
                        <div class="mb-3">
                            <label class="small-uppercase text-accent">Ancien mot de passe</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Nouveau mot de passe</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="small-uppercase text-accent">Confirmer le mot de passe</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-3 mt-4">
                            <button type="button" class="btn btn-outline-accent px-4">Annuler</button>
                            <button type="submit" class="btn btn-accent px-4">Sauvegarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@include("includes.footer")