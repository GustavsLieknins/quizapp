<style>
    .navbar-div
    {
        display: flex;
        width: 100vw;
        height: 4vh;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        color: black;
        font-size: x-large;
        font-weight: bolder;
        background-color: white;
        box-shadow: 0px 15px 10px -15px #111; 
    }

    .navbar-div > .main-links
    {
        display: flex;
        width: 80vw;
        flex-direction: row;
        justify-content: space-around;
    }
    .navbar-div > .action-links
    {
        display: flex;
        width: 20vw;
        flex-direction: row;
        justify-content: space-around;

        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
    .right-link-div
    {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .page-link-selected
    {
        border-bottom: 2px solid blue;
    }
</style>
<nav class="navbar-div">
    <div class="main-links">
        <div class="page-link {{ request()->routeIs('/') ? 'page-link-selected' : '' }}">
            <a href="{{ route('/') }}">Start page</a>
        </div>
        <div class="page-link {{ request()->routeIs('quizzes.index') ? 'page-link-selected' : '' }}">
            <a href="{{ route('quizzes.index') }}">Quizzes</a>
        </div>
        <div class="page-link {{ request()->routeIs('scores.index') ? 'page-link-selected' : '' }}">
            <a href="{{ route('scores.index') }}">Scores</a>
        </div>
        <div class="page-link {{ request()->routeIs('quizzes.about') ? 'page-link-selected' : '' }}">
            <a href="{{ route('quizzes.about') }}">About</a>
        </div>
    </div>
    <div class="action-links">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a :href="route('logout')" class="right-link page-link {{ request()->routeIs('logout') ? 'page-link-selected' : '' }}">
            <div class="right-link-div page-link-div {{ request()->routeIs('logout') ? 'page-link-selected-div' : '' }}">
                <button>Logout</button>
                <img src="{{ asset('img/logout-icon.svg') }}" alt="logout">
            </div>
            </a>
        </form>
    </div>
</nav>
