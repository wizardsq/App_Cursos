<x-app-layout>
    {{-- Portada--}}
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/portada_cursos.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-bold text-4xl">Codifica tu futuro</h1>
                <p class="text-black text-lg mt-2 mb-4">Toma las riendas de tu carrera profesional. Aprende las habilidades más actuales</p>
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('courses-index')
</x-app-layout>