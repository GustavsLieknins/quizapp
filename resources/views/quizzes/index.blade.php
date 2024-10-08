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
  font-size: 0.5em;
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
  border: 1px solid #e5e5e5;
  border-radius: 1rem;
}

.flip-card-front {
  background: linear-gradient(120deg, #f5f5f5 60%, #e5e5e5 88%,
     #d3d3d3 40%, rgba(223,223,223,0.603) 48%);
  color: darkgrey;
}

.flip-card-back {
  background: linear-gradient(120deg, #e5e5e5 30%, #d3d3d3 88%,
     #cfcfcf 40%, rgba(191,191,191,0.603) 78%);
  color: darkgrey;
  transform: rotateY(180deg);
}

    .quiz-wrapper
    {
        display: flex;
        margin-top: 3vh;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 10px;
        z-index: 1;
        position: relative;
    }
    
    .pc
    {
        display: block;
    }
    
    .mobile
    {
        display: none;
    }
    
    @media (max-width: 767px) {
        .pc
        {
            display: none;
        }
        .mobile
        {
            display: block;
        }
    }
    </style>


    <div class="quiz-wrapper">
    @if (count($quizzes) > 0)
    @foreach ($quizzes as $quiz)
    <a href="{{ route('quizzes.show', $quiz->id) }}">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">{{ $quiz->name }}</p>
                    <p class="pc">Hover Me</p>
                    <p class="mobile">Click Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">{{ $quiz->description }}</p>
                    <p class="btn btn-primary">Take Quiz</p>
                </div>
            </div>
        </div>
    </a>
    @endforeach
    @else
        <h1>No quizzes yet</h1>
    @endif
    </div>
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


