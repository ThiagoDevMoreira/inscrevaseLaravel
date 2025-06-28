<div class="mb-4">
    <label class="block mb-1">Título</label>
    <input type="text" name="title" value="{{ old('title', $course?->title) }}"
           class="w-full border p-2 rounded" required>
</div>

<div class="mb-4">
    <label class="block mb-1">Descrição</label>
    <textarea name="description" class="w-full border p-2 rounded">{{ old('description', $course?->description) }}</textarea>
</div>

<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
    Salvar
</button>
