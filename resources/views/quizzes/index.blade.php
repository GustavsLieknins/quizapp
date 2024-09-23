<x-app-layout>
    <style>
       
.flip-card {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  word-wrap: break-word;
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 3px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid coral;
  border-radius: 1rem;
}

.flip-card-front {
  background: linear-gradient(120deg, white 60%, rgb(255, 231, 222) 88%,
     rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%);
  color: coral;
}

.flip-card-back {
  background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%,
     bisque 40%, rgb(255, 185, 160) 78%);
  color: white;
  transform: rotateY(180deg);
}
    </style>
@foreach ($quizzes as $quiz)
<div class="flip-card">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">{{ $quiz->name }}</p>
            <p>Hover Me</p>
        </div>
        <div class="flip-card-back">
            <p class="title">{{ $quiz->description }}</p>
            <a href="{{ route('quizzes.show', $quiz->id) }}" class="btn btn-primary">Take Quiz</a>
        </div>
    </div>
</div>
@endforeach
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Quizzes</div>

                    <div class="card-body d-flex flex-wrap">
                        @foreach ($quizzes as $quiz)
                            <div class="quiz-box col-md-2 m-2 p-3 border rounded">
                                <h2>{{ $quiz->name }}</h2>
                                <p>{{ $quiz->description }}</p>
                                <a href="{{ route('quizzes.show', $quiz->id) }}" class="btn btn-primary">Take Quiz</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</x-app-layout>

