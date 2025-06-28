<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Novo Curso</h1>
    <x-alert />
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        @include('upsert_core_form', ['course' => null])
    </form>
</x-app-layout>
