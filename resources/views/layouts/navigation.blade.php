<nav class="navbar-div">
    <div>
        <div class="page-link {{ request()->routeIs('/') ? 'page-link-selected' : '' }}">
            <a href="{{ route('/') }}">Start page</a>
        </div>
        <div class="page-link {{ request()->routeIs('quizzes') ? 'page-link-selected' : '' }}">
            <a href="{{ route('quizzes.index') }}">Ur quizzes</a>
        </div>
        <div class="page-link {{ request()->routeIs('scores') ? 'page-link-selected' : '' }}">
            <a href="{{ route('scores') }}">Scores</a>
        </div>
    </div>
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-nav-link :href="route('logout')" class="right-link page-link {{ request()->routeIs('logout') ? 'page-link-selected' : '' }}">
            <div class="right-link-div page-link-div {{ request()->routeIs('logout') ? 'page-link-selected-div' : '' }}">
                <button>Logout</button>
                <img src="{{ asset('img/logout-icon.svg') }}" alt="logout">
            </div>
            </x-nav-link>
        </form>
    </div>
</nav>
