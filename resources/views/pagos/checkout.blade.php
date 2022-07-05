<x-app-layout>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
        <h1 class="text-gray-500 text-3xl font-bold">Detalles del pedido</h1>

        <div class="card text-gray-600">
            <div class="card-body">
                <article class="flex items-center">
                    <img class="h-12 w-12 object-cover " src="{{Storage::url($course->image->url)}}">
                    <h1 class=" text-lg ml-2">{{$course->title}}</h1>
                    <p class="text-xl font-bold ml-auto">US${{$course->price->value}}</p>
                </article>

                <div class="flex justify-end mt-2 mb-4">
                    @if ($course->category_id != 4)
                        <a class="btn btn-primary"href="">Comprar curso</a>
                    @else
                        <a class="btn btn-primary"href="">Comprar Webinar</a>
                    @endif
                </div>

                <hr>

                <p class="text-sm mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similiducimus odio deleniti cupiditate nobis aliquid sit repellendus autem <a class="text-red-500 font-bold" href="">Terminos y condiciones</a></p>
            </div>
        </div>
    </div>
</x-app-layout>