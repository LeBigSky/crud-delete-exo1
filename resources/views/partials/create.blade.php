<section>
    <h2>Ajouter des membres</h2>
                <div class="container d-flex justify-content-center gap-2 flex-column">
                    <form class="d-flex gap-2 flex-column" action="{{ route('store.membre') }}" method="POST">
                    @csrf
                    <div class="d-flex flex-column">
                        <label for="nom">indiquez le nom</label>
                        <input type="text" name="nom" id="nom">
                    </div>
                    <div class="d-flex flex-column">
                        <label for="age">inserez l'age</label>
                        <input type="number" name="age" id="age">
            
                    </div>
                    <div class="d-flex flex-column">
                        <label for="text">entrez le genre</label>
                        <input type="text" name="genre" id="genre">
                    </div>
                    <button type="submit" class="btn btn-warning">Ajouter le membre</button> 
                    </form>
            </div>
</section>