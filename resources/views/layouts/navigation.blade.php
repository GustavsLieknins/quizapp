<!-- <style>
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
        <div class="page-link {{ request()->routeIs('leaderboard.index') ? 'page-link-selected' : '' }}">
            <a href="{{ route('leaderboard.index') }}">Leaderboard</a>
        </div>
        <div class="page-link {{ request()->routeIs('scores.index') ? 'page-link-selected' : '' }}">
            <a href="{{ route('scores.index') }}">History</a>
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
</nav> -->




<style>
    a {
  text-decoration: none;
  color: #1E1E23;
  opacity:1;
  /* font-family: 'work sans', sans serif; */
  font-size: 1.5em;
  font-weight: 400;
  transition: 200ms;
}
a:hover {
  opacity:0.5;
}
ul {
  padding: 0;
  list-style-type: none;
}

nav {
    position: relative;
  background-color: #1E1E23;
  height: 65px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  z-index: 2;
}

#menuToggle {
  display: flex;
  flex-direction: column;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle input
{
  display: flex;
  width: 40px;
  height: 32px;
  position: absolute;
  cursor: pointer;
  opacity: 0;
  z-index: 2;
}

#menuToggle span
{
  display: flex;
  width: 29px;
  height: 2px;
  margin-bottom: 5px;
  position: relative;
  background: #ffffff;
  border-radius: 3px;
  z-index: 1;
  transform-origin: 5px 0px;
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-3px, -1px);
  background: #36383F;
}
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

#menu
{
  position: absolute;
  width: 260px;
  height: 130vh;
  box-shadow: 0 0 10px #85888C;
  margin: -50px 0 0 -50px;
  padding: 50px;
  padding-top: 105px;
  background-color: #F5F6FA;
  -webkit-font-smoothing: antialiased;
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  transition-delay: 2s;
}

#menuToggle input:checked ~ ul
{
  transform: none;
}
</style>
  <nav role="navigation">
    <div id="menuToggle">
      <input type="checkbox" />

      <span></span>
      <span></span>
      <span></span>

      <ul id="menu">
        <li><a href="{{ route('/') }}">Home</a></li>
        <li><a href="{{ route('quizzes.index') }}">Quizzes</a></li>
        <li><a href="{{ route('leaderboard.index') }}">Leaderboard</a></li>
        <li><a href="{{ route('scores.index') }}">History</a></li>
        <li><a href="{{ route('quizzes.about') }}">About</a></li>
      </ul>
    </div>
    <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf

        <a :href="route('logout')" class="right-link page-link {{ request()->routeIs('logout') ? 'page-link-selected' : '' }}">
          <div class="right-link-div page-link-div {{ request()->routeIs('logout') ? 'page-link-selected-div' : '' }}">
            <button class="logout-button">Logout</button>
            <img src="{{ asset('img/logout-icon.svg') }}" alt="logout" class="logout-icon">
          </div>
        </a>
      </form>
  </nav>

  <style>
    .logout-form
    {
      position: absolute;
      right: 20px;
      /* top: 0; */
    }
    .logout-button
    {
        color: white;
    }
    .right-link-div
    {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        gap: 3px;
    }
    .right-link-div > button
    {
        font-size: large;
    }
    .right-link-div > button:hover
    {
        color: white;
    }
  </style>

  <script>
    document.addEventListener("click", function(event) {
      if (!event.target.closest("#menuToggle")) {
        document.getElementById("menuToggle").querySelector("input").checked = false;
      }
    });
    document.addEventListener("scroll", function() {
      document.getElementById("menuToggle").querySelector("input").checked = false;
    });
  </script>

