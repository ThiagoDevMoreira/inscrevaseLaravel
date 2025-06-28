<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Cursos</h1>
    <x-alert />
    <a href="{{ route('courses.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Novo Curso</a>

    <ul class="mt-4">
        @foreach($courses as $course)
            <li class="flex justify-between items-center py-2 border-b">
                <span>{{ $course->title }}</span>
                <div class="flex gap-2">
                    <a href="{{ route('courses.edit', $course) }}" class="text-blue-500">Editar</a>
                    <form method="POST" action="{{ route('courses.destroy', $course) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">Excluir</button>
                    </form>
                    {{-- Botão "Inscrever-se" — se o usuário ainda não estiver inscrito --}}
                    @if(!auth()->user()->courses->contains($course->id))
                        <form method="POST" action="{{ route('courses.subscribe', $course) }}">
                            @csrf
                            <button class="bg-blue-500 text-white px-3 py-1 rounded">
                                Inscrever-se
                            </button>
                        </form>
                    @else
                        <span class="text-green-600 font-semibold">Já inscrito</span>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
