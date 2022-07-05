<?php

namespace App\Http\Livewire;
use App\Models\Course;
use Livewire\Component;
use App\Models\Category;
use App\Models\Level;
use Livewire\WithPagination;
class CoursesIndex extends Component
{
    public $categoria_id;

    use WithPagination;
    public $nivel_id;

    public function render()
    {
        $categorias = Category::all();
        $niveles = Level::all();
        $cursos = Course::where('status', 3)->latest('id')
                        ->category($this->categoria_id)
                        ->level($this->nivel_id)
                        ->paginate(4);
        return view('livewire.courses-index', compact('cursos', 'categorias', 'niveles'));
    }

    public function resetFilter(){
        $this->reset(['categoria_id', 'nivel_id']);
    }
}
