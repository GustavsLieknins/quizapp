<x-app-layout>
    <style>
        .container
        {
            display: flex;
            min-width: 100vw;
            height: 100vh;
            justify-content: center;
        }
        .main-wrapper
        {
            padding: 30px 150px;
            padding-bottom: 0px;
            border-left: 1px solid gray;
            border-right: 1px solid gray;
        }
        .form
        {
            display: flex;
            flex-direction: column;
        }
        .form > button
        {
            margin-top: 10px;
            background-color: #33b249;
            padding: 5px 10px;
            border-radius: 3px;
        }
        .bolder
        {
            font-weight: bold;
        }
        .form > label > input
        {
            margin-right: 5px;
        }
        .title-div
        {
            display: flex;
            justify-content: center;
            padding-bottom: 5px;
            font-weight: bold;
        }
    </style>
    <div class="container">
        <div class="main-wrapper">
            <div class="title-div">
                <h1>You scored {{ $correct }} out of {{ $questionCount }}!</h1>
            </div>
        </div>
    </div>
</x-app-layout>

