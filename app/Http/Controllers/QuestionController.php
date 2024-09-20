<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request; // Make sure this line is included

class QuestionController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        // Logic to display all questions if needed
    }

    // Show the form for creating a new resource.
    public function create()
    {
        // Logic to show the create question form if needed
    }

    // Store a newly created resource in storage.
    public function store(Request $request) // Use the Request class here
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|boolean',
        ]);

        // Create a new question using the validated data
        Question::create([
            'quiz_id' => $validatedData['quiz_id'],
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'],
        ]);

        $question = Question::create($request->validated());
    
        // Store the submitted question ID in the session
        session(['submitted_question' => $question->id]);

        return redirect()->route('quizzes.show', $question->quiz_id);

        // Redirect back to the quiz's show page with a success message
        return redirect()->route('quizzes.show', $validatedData['quiz_id'])->with('success', 'Question added successfully!');
    }

    // Display the specified resource.
    public function show($id)
    {
        $quiz = Quiz::with('questions')->findOrFail($id); // Assuming you have a relation defined
        return view('quizzes.show', compact('quiz'));
    }

    // Show the form for editing the specified resource.
    public function edit(Question $question)
    {
        // Logic to show the edit form if needed
    }

    // Update the specified resource in storage.
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        // Logic to update the question if needed
    }

    // Remove the specified resource from storage.
    public function destroy(Question $question)
    {
        // Logic to delete the question if needed
    }

    public function answer(Request $request, Question $question)
    {
        $request->validate([
            'user_answer' => 'required|boolean',
        ]);

        // You could also use session flash data to show a message
        $isCorrect = $question->answer == $request->user_answer;
        session()->flash('isCorrect', $isCorrect);
        session()->flash('submitted_question', $question->id);

        return redirect()->route('quizzes.show', $question->quiz_id);
    }

}
