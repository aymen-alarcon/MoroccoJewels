<div class="flex flex-wrap justify-between items-center gap-3 px-6 py-6">
<div class="flex flex-col gap-1">
<p class="text-white text-4xl font-black leading-tight tracking-[-0.033em]">Modifier le Rôle Admin</p>
<p class="text-white/60 text-base font-normal leading-normal">Mettez à jour les permissions et les détails d'accès au système</p>
</div>
<button class="flex items-center justify-center rounded-xl h-11 px-5 bg-surface text-white text-sm font-bold hover:bg-white/10 transition-colors gap-2 border border-white/10">
<span class="material-symbols-outlined text-lg">arrow_back</span>
<span class="truncate">Retour à la liste</span>
</button>
</div>
<!-- Main Form Content -->
<div class="flex flex-col gap-8 px-6 pb-20">
<!-- Role Name Section -->
<div class="bg-surface/40 p-6 rounded-xl border border-white/5">
<div class="flex max-w-[540px] flex-col gap-4">
<label class="flex flex-col flex-1">
<p class="text-white text-base font-semibold leading-normal pb-2">Nom du rôle</p>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-white focus:outline-0 focus:ring-1 focus:ring-primary border border-white/10 bg-surface h-14 placeholder:text-white/30 px-4 text-base font-normal leading-normal" value="Gestionnaire de Stock Premium"/>
</label>
</div>
</div>
<!-- Permissions Section -->
<div class="flex flex-col gap-4">
<div class="flex items-center gap-2 border-l-4 border-primary pl-4">
<h2 class="text-white text-2xl font-bold leading-tight tracking-[-0.015em]">Permissions du Rôle</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
<!-- Category: Gestion des Produits -->
<div class="bg-surface/30 rounded-xl p-5 border border-white/5 flex flex-col gap-4">
<div class="flex items-center gap-3 pb-2 border-b border-white/5">
<span class="material-symbols-outlined text-primary">inventory_2</span>
<h3 class="text-lg font-bold">Gestion des Produits</h3>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between">
<span class="text-white/80">Ajouter de nouveaux produits</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<span class="text-white/80">Modifier les prix et descriptions</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between opacity-60">
<span class="text-white/80">Supprimer définitivement</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
<!-- Category: Commandes -->
<div class="bg-surface/30 rounded-xl p-5 border border-white/5 flex flex-col gap-4">
<div class="flex items-center gap-3 pb-2 border-b border-white/5">
<span class="material-symbols-outlined text-primary">shopping_cart</span>
<h3 class="text-lg font-bold">Commandes</h3>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between">
<span class="text-white/80">Voir l'historique complet</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<span class="text-white/80">Modifier le statut d'expédition</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<span class="text-white/80">Gérer les remboursements</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
<!-- Category: Utilisateurs & Clients -->
<div class="bg-surface/30 rounded-xl p-5 border border-white/5 flex flex-col gap-4">
<div class="flex items-center gap-3 pb-2 border-b border-white/5">
<span class="material-symbols-outlined text-primary">group</span>
<h3 class="text-lg font-bold">Utilisateurs &amp; Clients</h3>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between">
<span class="text-white/80">Accéder aux fiches clients</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between opacity-60">
<span class="text-white/80">Modifier les rôles staff</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" disabled="" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
<!-- Category: Marketing & Analytics -->
<div class="bg-surface/30 rounded-xl p-5 border border-white/5 flex flex-col gap-4">
<div class="flex items-center gap-3 pb-2 border-b border-white/5">
<span class="material-symbols-outlined text-primary">campaign</span>
<h3 class="text-lg font-bold">Marketing &amp; Analytics</h3>
</div>
<div class="space-y-4">
<div class="flex items-center justify-between">
<span class="text-white/80">Gérer les codes promo</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<span class="text-white/80">Voir les rapports de vente</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-white/10 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</div>
</div>
</div>
<!-- Sticky Action Footer -->
<div class="flex items-center justify-end gap-4 py-8 border-t border-white/10">
<button class="flex min-w-[120px] items-center justify-center rounded-xl h-12 px-6 bg-transparent text-white border border-white/20 hover:bg-white/5 transition-colors font-medium">
                                Annuler
                            </button>
<button class="flex  items-center justify-center rounded-xl h-12 px-8 bg-primary text-background-dark font-black tracking-wide hover:brightness-110 transition-all shadow-lg shadow-primary/10">
                                Sauvegarder les changements
                            </button>
</div>
</div>
</div>
</div>
</div>
</div>
</body></html>