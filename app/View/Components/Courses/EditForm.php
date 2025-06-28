<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Editar Curso</h1>

    <form method="POST" action="{{ route('courses.update', $course) }}">
        @csrf
        @method('PUT')
        @include('courses.partials.form', ['course' => $course])
    </form>
</x-app-layout>
