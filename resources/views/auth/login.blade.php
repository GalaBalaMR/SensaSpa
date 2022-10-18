<x-guest-layout>
    <x-auth-card>

        <div class="card-body">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-label for="password" :value="__('Heslo')" />

                    <x-input id="password" type="password"
                             name="password"
                             required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="mb-3">
                    <div class="form-check">
                        <x-checkbox id="remember_me" name="remember" />

                        <label class="form-check-label" for="remember_me">
                            {{ __('Zapamätaj si ma') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                {{ __('Zabudol si heslo?') }}
                            </a>
                        @endif

                        <x-button>
                            {{ __('Prihlásiť sa') }}
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
