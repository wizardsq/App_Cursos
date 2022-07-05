<section class="mt-4 mb-4">
    <h1 class="font-bold text-3xl text-gray-800">Valoraciones</h1>

    @can('enrolled',$course)
        <article class="mb-4">
            @can('valued',$course)
                <textarea wire:model="comment" class="form-input w-full" rows="3" placeholder="Ingrese una resena"></textarea>
                <div class="flex items-center">
                    <button class="btn btn-primary mr-4" wire:click="store">Guardar</button>

                    <ul class="flex">
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 1)">
                            <i class="fas fa-star text-{{$rating >=1 ? 'yellow' : 'gray'}}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 2)">
                            <i class="fas fa-star text-{{$rating >=2 ? 'yellow' : 'gray'}}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 3)">
                            <i class="fas fa-star text-{{$rating >=3 ? 'yellow' : 'gray'}}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 4)">
                            <i class="fas fa-star text-{{$rating >=4 ? 'yellow' : 'gray'}}-300"></i>
                        </li>
                        <li class="mr-1 cursor-pointer" wire:click="$set('rating', 5)">
                            <i class="fas fa-star text-{{$rating >=5 ? 'yellow' : 'gray'}}-300"></i>
                        </li>
                    </ul>

                </div>
            @else
                <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                    <p class="font-bold">Valoracion completa</p>
                    <p>Usted ya a valorado este curso</p>
                </div>
            @endcan
        </article>
    @endcan

    <div class="card mt-2">
        <div class="card-body">
            <p class="text-gray-800 text-xl">{{$course->reviews->count()}} Valoraciones</p>

            @foreach ($course->reviews as $review)
                <article class="flex mb-4 text-gray-800 ">
                    <figure class="mr-4">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$review->user->profile_photo_url}}" alt="">
                    </figure>

                    <div class="card flex-1">
                        <div class="card-body bg-gray-100">
                            <p><b>{{$review->user->name }}</b> <i class="fas fa-star text-yellow-300 mr-1 ml-1"></i>{{ $review->rating}}</p>
                            {{$review->comment}}
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
