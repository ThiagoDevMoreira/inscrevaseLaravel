<form method="POST" action="{{ route('courses.subscribe', $course) }}">
    @csrf
    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
        Inscrever-se
    </button>
</form>
