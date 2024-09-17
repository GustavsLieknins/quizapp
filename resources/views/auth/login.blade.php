<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="main-wrapper">
        <div class="title-wrapper">
            <h1>Welcome to the best Quiz app ever!</h1>
            <h1>Log in to continue</h1>
        </div>
        <div class="logreg-wrapper">
            <div class="logreg-div">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <!-- <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div> -->

                    <div class="input-logreg-div">
                        <label for="password" class="logreg-label">Username</label>
                        <x-text-input id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="input-logreg-div">
                        <label for="password" class="logreg-label">Password</label>

                        <x-text-input id="password" 
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="logreg-options">
                        <button class="logreg-button">
                            {{ __('Log in') }}
                        </button>
                        <a href="{{ route('register') }}">
                            {{ __('Dont have an account?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
