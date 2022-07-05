<div class="mt-8">
   <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class=" lg:col-span-2">

            <div class="embed-responsive">
                {!!$current->iframe!!}
            </div>
            
            <h1 class="text-3xl text-cool-gray-600 font-bold mt-4"> {{$current->name}} </h1>
            @if ($current->description)
                <div class="text-gray-600 ">
                    {{$current->description->name}}
                </div>
            @endif

            {{--Marcar como culminada la leccion --}}
            <div class="flex - justify-between mt-4">
                <div class="flex items-center cursor-pointer" wire:click="completed">
                    @if ($current->completed)
                        <i class="fas fa-toggle-on text-2xl text-blue-600"></i>
                    @else
                        <i class="fas fa-toggle-off text-2xl text-gray-600"></i>
                    @endif
                    <p class="text-sm ml-2">Marcar unidad como terminada</p>
                </div>

                @if ($current->resource)
                    <div class="flex item-center text-gray-600 cursor-pointer" wire:click="download">
                        <i class="fas fa-download text-lg text-blue-600"></i>
                        <p class="text-sm ml-2">Descargar recurso</p>
                    </div>
                @endif
            </div>
            <div class="card mt-4">
                <div class="card-body flex text-gray-600 font-bold">
                        @if ($this->previous)
                            <a wire:click="changeLesson({{$this->previous}})" class="cursor-pointer">Tema anterior</a>
                        @endif
                        @if ($this->next)
                            <a wire:click="changeLesson({{$this->next}})" class="ml-auto cursor-pointer">Siguiente tema</a>
                        @endif
                    
                </div>
            </div>
            
        </div>


        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl leading-8 text-center mb-4">{{$course->title}}</h1>
                <div class="flex items-center mt-2">
                    <figure>
                        <img class="rounded-full mr-4 w-12 h-12 object-cover" src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>

                    <div>
                        <p>{{$course->teacher->name}}</p>
                        <a class="text-blue-500 text-sm"href="">{{'@'. Str::slug($course->teacher->name, '')}}</a>
                    </div>
                </div>

                <p class="text-gray-600 text-sm mt-2">{{$this->advance . '%'}} Completado</p>
                <div class="relative pt-1">
                    <div class="overflow-hidden h-4 mb-4 text-xs flex rounded bg-gray-200">
                      <div style="width:{{$this->advance . '%'}}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 transition-all duration-500"></div>
                    </div>
                  </div>

                <ul>
                    @foreach ($course->sections as $section)
                        <li class="text-gray-600 mb-5">
                            <a class="font-bold text-base inline-block mb-2" href="">{{$section->name}}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li class="flex">
                                        <div>
                                            @if ($lesson->completed)

                                                @if ($current->id == $lesson->id)
                                                    <span class="inline-block w-4 h-4 border-2 border-yellow-300 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class="inline-block w-4 h-4 bg-yellow-300 rounded-full mr-2 mt-1"></span>
                                                @endif
                                                

                                            @else

                                                @if ($current->id == $lesson->id)
                                                    <span class="inline-block w-4 h-4 border-2 border-gray-500 rounded-full mr-2 mt-1"></span>
                                                @else
                                                    <span class="inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                                @endif
                                                
                                            @endif
                                        </div>
                                        <a class="cursor-pointer" wire:click="changeLesson({{$lesson}})">{{$lesson->name}}</a>
                                        
                                    </li>
                                @endforeach
                            </ul>
                        </li> 
                    @endforeach
                </ul>
            </div>
        </div>
   </div>
</div>
