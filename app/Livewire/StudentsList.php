<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsList extends Component
{

    use WithPagination;

    public function render()
    {
        $students = Student::paginate(10);
        return view('livewire.students-list', ['students' => $students]);
    }
}
