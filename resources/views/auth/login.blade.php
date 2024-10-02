<x-guest-layout>

    {{-- Inline CSS for styling --}}
    <style>
        body {
            background-color: #9ca3af;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .auth-card {
            background-color: rgba(0, 0, 0, 0.6); /* Transparent background for the form */
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            color: white;
        }

        .auth-card input {
            background-color: rgba(255, 255, 255, 0.2); /* Transparent input fields */
            border: 1px solid #ddd;
            padding: 0.8rem;
            margin-bottom: 1rem;
            width: 100%;
            color: #fff;
            border-radius: 4px;
        }

        .auth-card button {
            background-color: #1a73e8;
            color: white;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
        }

        .auth-card a {
            color: #1a73e8;
            text-decoration: none;
        }

        .auth-card a:hover {
            text-decoration: underline;
        }

        .auth-card .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .auth-card .text-center {
            text-align: center;
            margin-top: 2rem;
        }

        .nav-bar {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 1rem;
            text-align: center;
        }

        .nav-bar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        .nav-bar a:hover {
            text-decoration: underline;
        }
    </style>

    {{-- Include the navigation bar --}}


    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('Images/LOGOimg.png') }}" class="block h-16 w-auto" alt="Logo">
        </x-slot>

        {{-- Validation errors --}}
        <x-validation-errors class="mb-4" />

        {{-- Status Message --}}
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        {{-- Login Form --}}
        <div class="auth-card">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <input id="password" type="password" name="password" required />
                </div>

                <div class="flex items-center justify-between">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="mt-4">
                    <button type="submit">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>

            {{-- Register Link --}}
            <div class="text-center">
                <p>Don't have an account? <a href="{{ route('register') }}">Register now</a></p>
            </div>
        </div>
    </x-authentication-card>

</x-guest-layout>








