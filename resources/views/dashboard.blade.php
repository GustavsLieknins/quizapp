<x-app-layout>
    <style>
        body {
            overflow: hidden;
        }
    </style>

    <div class="flex justify-center items-start min-h-screen p-10">
        <div class="shadow-lg rounded-lg p-10 max-w-lg text-center" style="background-color: rgb(66, 66, 66);">
            <h1 class="text-3xl font-bold text-white mb-4">Welcome to Our Quiz Page</h1>
            <p class="text-gray-300 mb-6">
                Mūsu komanda kuru vadīja Gustavs un mūsu labākie programmētāji kā Matiss, Elvis, Kristaps un mūsu special needs komandas biedrs Marsmelis izveidoja šo mājas lapu.
            </p>
            <a href="{{ route('quizzes.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Get Started
            </a>
        </div>
    </div>
</x-app-layout>
