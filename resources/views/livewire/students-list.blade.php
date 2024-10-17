<div>
    <!-- Titre principal de la page, centré et avec une marge supérieure. -->
    <h1 class="text-center mt-5">Students</h1>

    <div class="row align-items-center">
        <!-- Colonne pour le champ de recherche avec une largeur de 4 colonnes sur les écrans moyens et un espacement inférieur. -->
        <div class="col-md-4 mb-3">
            <!-- Étiquette pour le champ de recherche (masquée pour les lecteurs d'écran). -->
            <label for="query" class="sr-only">Search</label>
            <!-- Champ de recherche avec liaison Livewire (mise à jour en temps réel sur l'événement 'input'). -->
            <input type="search" wire:model.live="query" id="query" class="form-control" placeholder="Ex: John Doe">
        </div>

        <!-- Colonne auto-ajustée pour le sélecteur du nombre d'éléments à afficher par page avec des alignements flexibles. -->
        <div class="col-auto ms-auto d-flex align-items-center">
            <!-- Texte statique pour indiquer le contenu du sélecteur. -->
            Show
            <!-- Sélecteur pour définir le nombre d'étudiants affichés par page (liaison Livewire avec mise à jour différée). -->
            <select wire:model.lazy="perPage" id="per_page" class="custom-select w-auto mx-2">
                <!-- Boucle pour générer les options du sélecteur de 5 à 25 avec un pas de 5. -->
                @for ($i = 5; $i <= 25; $i += 5)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <!-- Étiquette pour le sélecteur du nombre d'éléments par page. -->
            <label for="per_page">per_page</label>
        </div>
    </div>

    <!-- Table responsive pour s'adapter aux petits écrans. -->
    <div class='table-responsive'>
        <table class="table">
            <!-- En-tête de la table avec un fond sombre pour améliorer la lisibilité. -->
            <thead class="table-dark">
                <tr>
                    <th>#</th> <!-- Colonne pour l'ID de l'étudiant. -->
                    <th>Name</th> <!-- Colonne pour le nom de l'étudiant. -->
                    <th>Email</th> <!-- Colonne pour l'email de l'étudiant. -->
                    <th>Adulte?</th> <!-- Colonne pour indiquer si l'étudiant est un adulte. -->
                </tr>
            </thead>
            <tbody>
                <!-- Boucle pour afficher chaque étudiant dans une ligne de la table. -->
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td> <!-- Affichage de l'ID de l'étudiant. -->
                    <td>{{$student->name}}</td> <!-- Affichage du nom de l'étudiant. -->
                    <td>{{$student->email}}</td> <!-- Affichage de l'email de l'étudiant. -->
                    <!-- Vérification si l'étudiant est un adulte (affichage 'Vrai' ou 'Faux'). -->
                    <td>{{$student->isAnAdult ? 'Vrai' : 'Faux'}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination dynamique générée automatiquement par Livewire pour naviguer entre les pages. -->
    <div class="mt-3">
        {{ $students->links() }} <!-- Affichage des liens de pagination. -->
    </div>
</div>
