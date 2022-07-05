<div>
    
    <h1 class="text-2xl font-bold">Lecciones del curso</h1>
        <hr class="mt-2 mb-6">
            @foreach ($course->sections as $item)
                <article class="card mb-6" x-data="{open: true}">
                    <div class="card-body bg-gray-100">
                    @if ($section->id == $item->id)
                            <form wire:submit.prevent="update">
                                <input wire:model="section.name" class="form-input w-full" placeholder="Ingrese el nombre de la seccion">
                                @error('section.name')
                                    <span class="text-xs text-red-500">{{$message}}</span>
                                @enderror
                            </form>
                        @else
                                <header class="flex justify-between items-center">
                                    <h1 x-on:click="open = !open" class="cursor-pointer">
                                        <strong>Seccion: </strong>{{$item->name}}
                                    </h1>
                                        <div>
                                            <i class="fas fa-edit cursor-pointer mr-2 text-blue-500" wire:click="edit({{$item}})"></i>
                                            <i class="fas fa-trash cursor-pointer text-red-500" wire:click="destroy({{$item}})"></i>
                                        </div>
                                </header>

                                <div x-show="open">
                                    @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                                </div>
                    @endif
                    </div>
                </article>
            @endforeach

            <div x-data="{open: false}">
                <a x-show="!open" x-on:click="open = true" class="flex item-center cursor-pointer" >
                    <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
                    Agregar nueva seccion
                </a>

                <article class="card" x-show="open">
                    <div class="card-body bg-gray-100">
                        <h1 class="text-xl font-bold">Nueva seccion</h1>
                            <div>
                                <input wire:model="name" class="form-input w-full mt-3" placeholder="Nombre de seccion">

                                @error('name')
                                    <span class="text-xs text-red-500">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end mt-4">
                                <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                                <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
                            </div>
                    </div>
                </article>
            </div>
</div>
