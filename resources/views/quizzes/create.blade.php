<x-app-layout>
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required><br>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</x-app-layout>