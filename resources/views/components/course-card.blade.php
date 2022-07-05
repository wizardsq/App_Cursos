@props(['curso'])

<article class="card flex flex-col">
    <img class="h-36 w-full object-cover" src="{{ asset('/storage/'.$curso->image->url)}}" alt="">
    <div class="card-body flex-1 flex flex-col">
         <h1 class="card-title">{{Str::limit($curso->title, 40)}}</h1>
         <p class="text-gray-500 text-sm mb-2 mt-auto">Prof: {{$curso->teacher->name}}</p>
         <div class="flex">
         <ul class="flex text-sm">
             <li class="mr-1">
                 <i class="fas fa-star text-{{$curso->rating >=1 ? 'yellow' : 'gray'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$curso->rating >=2 ? 'yellow' : 'gray'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$curso->rating >=3 ? 'yellow' : 'gray'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$curso->rating >=4 ? 'yellow' : 'gray'}}-400"></i>
             </li>
             <li class="mr-1">
                 <i class="fas fa-star text-{{$curso->rating >=5 ? 'yellow' : 'gray'}}-400"></i>
             </li>
         </ul>
             <p class="text-sm text-gray-500 ml-auto">
                 <i class="fas fa-users"></i>
                 ({{$curso->students_count}})
             </p>
         </div>

         @if($curso->price->value == 0)
            <p class="my-2 text-green-800 font-bold">Gratis</p>
         @else
            <p class="my-2 text-gray-500 font-bold">US$ {{$curso->price->value}}</p>
         @endif 

         @can('enrolled', $curso)
            <a href="{{route('courses.show', $curso)}}" class="btn-block btn btn-primary">
                Continuar con el curso
            </a>
         @else
            <a href="{{route('courses.show', $curso)}}" class="btn-block btn btn-primary">
                Mas informacion
            </a>
        @endcan

        
    </div>
 </article>