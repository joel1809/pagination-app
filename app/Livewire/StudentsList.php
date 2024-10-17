<?php

namespace App\Livewire;

use App\Models\Student; // Importation du modèle Student
use Livewire\Component; // Importation du composant Livewire
use Livewire\WithPagination; // Importation du trait de pagination

/**
 * Classe Livewire pour afficher et gérer la liste des étudiants avec pagination et recherche.
 */
class StudentsList extends Component
{
    // Inclusion du trait WithPagination pour permettre la pagination dans le composant Livewire.
    use WithPagination;

    // Propriété publique pour stocker la chaîne de recherche saisie par l'utilisateur.
    public $query = "";

    // Propriété publique pour définir le nombre d'éléments affichés par page dans la pagination.
    public $perPage = 10;

    /**
     * Méthode qui est appelée automatiquement chaque fois que la valeur de 'query' est mise à jour.
     * Cette méthode réinitialise la pagination à la première page lorsque l'utilisateur modifie la recherche.
     */
    public function updatedQuery()
    {
        $this->resetPage(); // Réinitialisation à la première page si la recherche change.
    }

    /**
     * Méthode 'render' qui est appelée pour générer la vue du composant.
     * Elle effectue une requête sur le modèle Student pour filtrer les étudiants par nom,
     * en fonction de la chaîne de recherche, puis pagine les résultats.
     *
     * @return \Illuminate\View\View La vue Livewire avec les étudiants filtrés et paginés.
     */
    public function render()
    {
        // Requête pour récupérer les étudiants dont le nom contient la chaîne de recherche ('query').
        // La méthode 'paginate' est utilisée pour limiter les résultats par page.
        $students = Student::where('name', 'like', '%' . $this->query . '%')->paginate($this->perPage);

        // Retourne la vue 'livewire.students-list' avec les données des étudiants filtrés et paginés.
        return view('livewire.students-list', ['students' => $students]);
    }
}
