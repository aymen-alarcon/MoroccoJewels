@include("includes.Admin_header")
<main style="margin-left: 16em; width: 100%;">
    <div class="m-5">
        <h1 class="text-3xl font-extrabold text-white">Modifier un Produit</h1>
        <p class="text-sm text-gray-300">Mettez à jour la fiche de ce bijou artisanal.</p>
    </div>
        <form method="POST" action="/Admin/Products/EditProduct/update/{{ $product->id }}" enctype="multipart/form-data" class="p-4 my-5">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-8 form-card p-2">
                    <section class="rounded p-5">
                        <h2 class="mt-4">Informations Générales</h2>
                        <div class="mt-4">
                            <label class="mb-1">Nom du produit</label>
                            <input type="text" name="name" value="{{ $product->name }}" required class="form-control">
                        </div>
                        <div class="mt-4">
                            <label class="mb-1">description du produit</label>
                            <input type="text" name="description" value="{{ $product->description }}" required class="form-control">
                        </div>
                        <div class="mt-4">
                            <label class="mb-1">Catégorie</label>
                            <select name="category_id" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" 
                                    @if ($category->id === $product->category->id)
                                        selected
                                    @endif>
                                    {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <label class="mb-1">Prix (MAD)</label>
                            <input type="number" min="0" name="price" value="{{ $product->price }}" class="form-control" required>
                        </div>
                        <div class="mt-4">
                            <label class="mb-1">Histoire</label>
                            <textarea name="history" rows="3" class="form-control">{{ $product->history }}</textarea>
                        </div>
                        <div class="mt-4">
                            <label class="mb-1">Quantité en stock</label>
                            <input type="number" min="0" name="stock" value="{{ $product->stock }}" class="form-control" required>
                        </div>
                    </section>
                </div>

                <div class="col-md-4 form-card p-2">
                    <section class="rounded-lg p-5">
                        <h2 class="text-lg font-semibold text-white mt-4">Galerie Médias</h2>
                            <div class="mt-4 d-flex flex-column">
                                <p class="text-sm mb-2">Image actuelle</p>
                                <img src="{{ asset("storage/" . $product->main_image) }}" style="height: 20em">
                            </div>
                        <div class="mt-4">
                            <p class="text-sm text-gray-300 mb-2">Image principale</p>
                            <input id="image" type="file" name="main_image" class="form-control"/>
                        </div>
                    </section>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2 float-end">Save Changes</button>
        </form>
</main>