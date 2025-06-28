<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Meus Cursos</h1>
    <x-alert />
    @if($courses->isEmpty())
        <p>Você ainda não está inscrito em nenhum curso.</p>
    @else
        <ul class="space-y-4">
            @foreach($courses as $course)
                <li class="border p-4 rounded shadow-sm">
                    <h2 class="text-lg font-semibold">{{ $course->title }}</h2>
                    <p class="text-gray-600">{{ $course->description }}</p>
                    <p class="mt-2 text-sm text-gray-500">
                        Inscrito em: {{ \Carbon\Carbon::parse($course->pivot->subscribed_at)->format('d/m/Y H:i') }}
                    </p>
                    <p class="mt-2">Progresso: {{ $course->pivot->progress }}%</p>

                    <!-- Atualizar progresso -->
                    <form method="POST" action="{{ route('courses.progress.update', $course) }}" class="mt-2 flex items-center gap-2">
                        @csrf
                        @method('PATCH')
                        <input type="number" name="progress" min="0" max="100"
                            value="{{ $course->pivot->progress }}"
                            class="border rounded px-2 py-1 w-20" required>
                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">
                            Atualizar
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</x-app-layout>
