<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Novo Curso</h1>

    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        @include('courses.partials.form', ['course' => null])
    </form>
</x-app-layout>
