<x-app-layout>

    <div class="container">
        <h1 class="text-3xl font-bold mb-4 p-1">Click on quiz to delete</h1>
        <ol class="list-decimal ml-6">
            @foreach ($quizzes as $quiz)
                <li class="mb-2">
                    <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 hover:underline">
                            {{ $quiz->name }}
                        </button>
                    </form>
                </li>
            @endforeach
        </ol>
    </div>
</x-app-layout>
