<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Définition du jeu de caractères pour la page (UTF-8). -->
        <meta charset="utf-8">
        <!-- Configuration du viewport pour rendre la page responsive sur tous les appareils. -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Titre de la page affiché dans l'onglet du navigateur. -->
        <title>Pagination App</title>

        <!-- Lien vers la feuille de style Bootstrap pour styliser la page avec le framework CSS. -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Inclusion du script JS Bootstrap pour les composants interactifs. -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Inclusion des styles spécifiques de Livewire. -->
        @livewireStyles
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- Contenu principal de la page, centré dans une boîte avec la classe container. -->
        <main role="main" class="container">
            <!-- Insertion du composant Livewire 'students-list' qui affiche la liste des étudiants. -->
            @livewire('students-list')
        </main>

        <!-- Inclusion des scripts spécifiques de Livewire. -->
        @livewireScripts
    </body>
</html>
