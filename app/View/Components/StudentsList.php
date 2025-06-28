<!-- resources/views/courses/students.blade.php -->
<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">Alunos inscritos no curso: {{ $course->title }}</h2>

    <ul>
        @foreach($students as $student)
            <li>
                {{ $student->name }} – {{ $student->email }} 
                (Progresso: {{ $student->pivot->progress }}%)
            </li>
        @endforeach
    </ul>
</x-app-layout>
