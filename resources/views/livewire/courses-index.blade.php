<div>
    <div class="bg-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <div class="flex items-center justify-center mr-4">
                <div class=" relative inline-block text-left dropdown">
                    <span class="rounded-lg shadow-sm">
                            <button class="justify-center px-4 py-2 h-12 text-sm font-medium leading-5 text-gray-800 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-lg hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                                type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117" wire:click="resetFilter">
                                <i class="fas fa-home mr-2 mt-1"></i>
                                <span class="text-md">Todos los cursos</span>
                    </button>
                        </span>
                   
                </div>
            </div> 
                
                {{-- Categoria --}}
            <div class="flex items-center justify-center mr-4" x-data="{ open: false }">
                <div class=" relative inline-block text-left dropdown" >
                    <span class="rounded-lg shadow-sm">
                        <button class="flex justify-center px-4 py-2 h-12 text-sm font-medium leading-5 text-gray-800 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-lg hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                             type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117" x-on:click="open = !open">
                             <i class="fas fa-tags mr-2 mt-2"></i>
                            <span class="mt-1.5">Categoria</span>
                            <svg class="w-5 h-5 ml-2 -mr-1 mt-1.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                            </span>
                    <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95" x-show="open">
                        <div class="absolute left-1 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">
                            @foreach ($categorias as $categoria)
                            <a tabindex="1" class="cursor-pointer text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left hover:bg-gray-100"role="menuitem" wire:click="$set('categoria_id', {{$categoria->id}})" x-on:click="open = false">
                                {{$categoria->name}}
                            </a>
                            @endforeach
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>     
                            {{-- Niveles --}}
            <div class="flex items-center justify-center" x-data="{ open: false }">
                <div class=" relative inline-block text-left dropdown">
                    <span class="rounded-lg shadow-sm ">
                        <button class="flex justify-center px-4 py-2 h-12 text-sm font-medium leading-5 text-gray-800 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-lg hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                             type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117" x-on:click="open = !open">
                             <i class="fas fa-layer-group mr-2 mt-2"></i>
                            <span class="mt-1.5">Grado académico:</span>
                            <svg class="w-5 h-5 ml-2 -mr-1 mt-1.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                            </span>
                    <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95" x-show="open"> 
                        <div class="absolute left-1 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"  aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                @foreach ($niveles as $nivel)
                                    <a tabindex="1" class="cursor-pointer text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left hover:bg-gray-100"role="menuitem" wire:click="$set('nivel_id', {{$nivel->id}})" x-on:click="open = false">
                                        {{$nivel->name}}
                                    </a>
                                @endforeach
                                
                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <style>
            .dropdown:focus-within .dropdown-menu {
            opacity:1;
            transform: translate(0) scale(1);
            visibility: visible;
            }
                </style>
                </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($cursos as $curso)
           <x-course-card :curso='$curso'/>
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-1 mb-8">
        {{$cursos->links()}}
    </div>
</div>
