<x-app-layout>

    <section class="bg-cover w-full" style="background-image: url({{asset('img/home/Cursos-portada.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">CURSOS FITEC</h1>
                <p class="text-white text-lg mt-2 mb-4">Cursos de la facultad de ingenieria</p>
                   @livewire('search')
            </div>
        </div>
    </section>
<!--
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Eventos</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8 ">
            
            @foreach ($cursos as $curso)
                @if ($curso->category_id == '4')
                    <x-course-card :curso='$curso'/>
                @endif
            @endforeach
            

        </div>
    </section>
 -->
 <section class="my-24 mb-6">
    <h1 class="text-center text-3xl text-gray-600 mb-7">Toma las riendas de tu carrera profesional. Aprende las habilidades más actuales</h1>
    <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reprehenderit tenetur quas, 
        dignissimos ex odit
    </p>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-34 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
        
        @foreach ($cursos as $curso)
            @if ($curso->category_id != 4)
                <x-course-card :curso='$curso'/>
            @endif
        @endforeach
    </div>
</section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes que curso llevar</h1>
        <p class="text-center text-white">Dirigete al catalogo de cursos</p>

        <div class="flex justify-center mt-5 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            <div>
                <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Ver catalogo de cursos
                </a>
            </div>
        </div>
    </section>

    

</x-app-layout>
