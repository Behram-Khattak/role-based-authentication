<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="grid w-full h-screen grid-cols-2 place-content-center">
        <div id="default-carousel" class="relative w-full h-screen p-4" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden rounded-xl">
                {{-- <div class="absolute inset-0 z-10 bg-black opacity-50"></div> --}}
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-1.avif') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <p class="absolute text-xl bottom-10 left-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita libero qui recusandae doloribus officia autem harum amet inventore at voluptatum, numquam molestiae neque quisquam nostrum, unde sint assumenda earum obcaecati.</p>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-2.jpg') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <p class="absolute text-xl bottom-10 left-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita libero qui recusandae doloribus officia autem harum amet inventore at voluptatum, numquam molestiae neque quisquam nostrum, unde sint assumenda earum obcaecati.</p>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-3.jpg') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <p class="absolute text-xl bottom-10 left-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita libero qui recusandae doloribus officia autem harum amet inventore at voluptatum, numquam molestiae neque quisquam nostrum, unde sint assumenda earum obcaecati.</p>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-4.webp') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <p class="absolute text-xl bottom-10 left-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita libero qui recusandae doloribus officia autem harum amet inventore at voluptatum, numquam molestiae neque quisquam nostrum, unde sint assumenda earum obcaecati.</p>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-5.jpg') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                        <div class="absolute inset-0 bg-black opacity-30"></div>
                        <p class="absolute text-xl bottom-10 left-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita libero qui recusandae doloribus officia autem harum amet inventore at voluptatum, numquam molestiae neque quisquam nostrum, unde sint assumenda earum obcaecati.</p>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                <button type="button" class="w-20 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-20 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-20 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-20 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-20 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            {{-- <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button> --}}
        </div>

        <div class="grid w-full h-screen px-24 overflow-hidden">

            <div class="logos">
                <div class="flex items-center justify-between">
                    <img src="{{ asset('assets/images/blackstone.gif') }}" alt="Logo 1" class="h-auto w-52" />
                    <img src="{{ asset('assets/images/london-uni.svg') }}" alt="Logo 2" class="h-auto w-52" />
                </div>
            </div>

            {{-- login form --}}
            <form method="POST" class="w-full" action="{{ route('login') }}">
                @csrf
                <div class="text-center title">
                    <h2 class="text-5xl leading-loose capitalize text-yale">
                        <span class="font-regular">sign in to</span> <strong class="px-2 font-extrabold rounded bg-yale text-secondary">{{ config('app.name') }}</strong>
                    </h2>
                    <p class="text-xl font-medium text-gray-600 capitalize">school of <span class="underline text-yale">law</span> & <span class="underline text-yale">business</span></p>
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full h-12 mt-1" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" placeholder="user@example.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block w-full h-12 mt-1" type="password" name="password" required
                        autocomplete="current-password" placeholder="xxxxxxxx" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                {{-- <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}

                <div class="mt-4">
                    {{-- @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif --}}

                    <x-primary-button class="w-full h-12 mt-6 text-center border-2 text-yale hover:text-secondary dark:text-yale border-yale dark:bg-secondary">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                {{-- add or in center and a line on sides and below that add social icons like goolge linkedin twitter --}}
                <div class="flex items-center gap-3 my-8 text-lg text-center text-yale dark:text-secondary">
                    <div class="w-full h-[1px] bg-yale"></div>
                    <span>or</span>
                    <div class="w-full h-[1px] bg-yale"></div>
                </div>

                <div class="flex flex-col items-center space-y-6 social-btns">
                    <x-primary-button class="h-12 text-center border text-yale hover:text-secondary w-80 border-primary">
                        <i class="fab fa-google"></i> {{ __('Google') }}
                    </x-primary-button>
                    <x-primary-button class="h-12 text-center border text-yale hover:text-secondary w-80 border-primary">
                        <i class="fab fa-apple"></i> {{ __('Apple') }}
                    </x-primary-button>
                    <x-primary-button class="h-12 text-center border text-yale hover:text-secondary w-80 border-primary">
                        <i class="fab fa-twitter"></i> {{ __('Twitter') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
