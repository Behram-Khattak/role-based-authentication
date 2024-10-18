<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full h-screen xl:grid-cols-2 xl:grid place-content-center">
        <div id="default-carousel" class="relative hidden w-full h-screen p-4 xl:block" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden rounded-2xl">
                {{-- <div class="absolute inset-0 z-10 bg-black opacity-50"></div> --}}
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-1.avif') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute inset-0 bg-black opacity-40"></div>

                    <div class="absolute w-16 h-16 top-5 left-5 rounded-2xl quotes bg-secondary">
                        <span class="absolute top-0 left-3 text-9xl text-yale">"</span>
                    </div>
                    {{-- content --}}
                    <div
                        class="absolute pb-4 pr-4 space-y-6 text-2xl text-justify content bottom-10 left-4 text-secondary">
                        <h3 class="text-4xl font-bold">"Education That Empowers"</h3>
                        <p class="">Blackstone School of Law offers a unique opportunity for students to earn an
                            internationally
                            recognized degree from the University of London. We aim to empower future leaders with the
                            skills
                            and knowledge needed to make a lasting impact in the world.</p>
                        <p class="font-extrabold">
                            <strong>Director - Blackstone School of Law</strong>
                        </p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-3.jpg') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <div class="absolute w-16 h-16 top-5 left-5 rounded-2xl quotes bg-secondary">
                        <span class="absolute top-0 left-3 text-9xl text-yale">"</span>
                    </div>
                    {{-- content --}}
                    <div
                        class="absolute pb-4 pr-4 space-y-6 text-2xl text-justify content bottom-10 left-4 text-secondary">
                        <h3 class="text-4xl font-bold">"International Excellence"</h3>
                        <p class="">As part of the University of London's distance learning program, Blackstone
                            students receive
                            high-quality education that meets global standards. Our graduates are equipped with the
                            knowledge
                            and confidence to excel in diverse legal environments worldwide.</p>
                        <p class="font-extrabold">
                            <strong>Director - Blackstone School of Law</strong>
                        </p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-4.webp') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <div class="absolute w-16 h-16 top-5 left-5 rounded-2xl quotes bg-secondary">
                        <span class="absolute top-0 left-3 text-9xl text-yale">"</span>
                    </div>
                    {{-- content --}}
                    <div
                        class="absolute pb-4 pr-4 space-y-6 text-2xl text-justify content bottom-10 left-4 text-secondary">
                        <h3 class="text-4xl font-bold">"Building Future Leaders"</h3>
                        <p class="">Our Business and Leadership Development programs aim to shape the next
                            generation of
                            entrepreneurs and legal professionals. At Blackstone, we believe that a combination of law
                            and
                            business education provides a holistic approach to global leadership.</p>
                        <p class="font-extrabold">
                            <strong>Director - Blackstone School of Law</strong>
                        </p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/images/student-img-5.jpg') }}"
                        class="absolute block w-full h-screen -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <div class="absolute w-16 h-16 top-5 left-5 rounded-2xl quotes bg-secondary">
                        <span class="absolute top-0 left-3 text-9xl text-yale">"</span>
                    </div>
                    {{-- content --}}
                    <div
                        class="absolute pb-4 pr-4 space-y-6 text-2xl text-justify content bottom-10 left-4 text-secondary">
                        <h3 class="text-4xl font-bold">"Global Connections, Limitless Possibilities"</h3>
                        <p class="">At Blackstone, our students are part of an international community.
                            We offer them opportunities to network with professionals, academics,
                            and peers from around the world, opening doors to unparalleled
                            career advancement.</p>
                        <p class="font-extrabold">
                            <strong>Director - Blackstone School of Law</strong>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex pb-4 space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                <button type="button" class="w-20 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-20 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-20 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-20 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
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

        <div class="grid w-full h-screen px-24 py-2 overflow-scroll">

            <div class="logos">
                <div class="flex items-center justify-between">
                    <img src="{{ asset('assets/images/blackstone.gif') }}" alt="Logo 1"
                        class="w-32 h-auto sm:w-52 object-fit" />
                    <img src="{{ asset('assets/images/london-uni.svg') }}" alt="Logo 2"
                        class="w-32 h-auto p-2 rounded-lg object-fit sm:w-52 bg-yale" />
                </div>
            </div>

            {{-- login form --}}
            <form method="POST" class="w-full" action="{{ route('login') }}" x-data="{ showPassword: false }">
                @csrf
                <div class="my-8 text-center title">
                    <h2 class="text-3xl leading-loose capitalize sm:text-4xl text-yale">
                        <span class="font-regular">sign in to</span> <strong
                            class="px-2 font-extrabold rounded bg-yale text-secondary">{{ config('app.name') }}</strong>
                    </h2>
                    <p class="text-xl font-medium text-gray-500 capitalize">school of <span class="text-yale">law</span>
                        & <span class="text-yale">business</span></p>
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

                    <x-text-input id="password" class="block w-full h-12 mt-1" name="password"
                        required autocomplete="current-password" placeholder="xxxxxxxx"
                        x-bind:type="showPassword ? 'text' : 'password'" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="block mt-4">
                    <label for="show_password" class="inline-flex items-center">
                        <input id="show_password" @click="showPassword = !showPassword" type="checkbox"
                            class="border-gray-300 rounded shadow-sm text-yale dark:bg-gray-900 dark:border-gray-700 focus:ring-yale dark:focus:ring-yale dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Show Password') }}</span>
                    </label>
                </div>

                <div class="mt-4">
                    {{-- @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif --}}

                    <x-primary-button
                        class="w-full h-12 mt-6 text-center border-2 hover:bg-yale dark:hover:bg-white text-yale hover:text-secondary dark:text-yale border-yale dark:bg-secondary">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                {{-- add or in center and a line on sides and below that add social icons like goolge linkedin twitter --}}
                <div class="flex items-center gap-3 mt-8 text-lg text-center text-yale dark:text-secondary">
                    <div class="w-full h-[1px] bg-yale"></div>
                    <span class="">or</span>
                    <div class="w-full h-[1px] bg-yale"></div>
                </div>

                <div class="mb-6 text-center continue-with">
                    <span class="text-lg text-yale">continue with</span>
                </div>

                <div class="flex flex-col items-center space-y-6 social-btns">
                    <x-primary-button
                        class="flex items-center justify-center gap-2 text-sm text-center border border-yale/30 border-se text-yale hover:bg-yale dark:hover:bg-white hover:text-secondary w-80">
                        <i class="text-2xl text-red-500 fab fa-google"></i> {{ __('Google') }}
                    </x-primary-button>
                    <x-primary-button
                        class="flex items-center justify-center gap-2 text-sm text-center border border-yale/30 text-yale hover:bg-yale hover:text-secondary w-80">
                        <i class="text-2xl fab fa-apple"></i> {{ __('Apple') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <x-slot:script>
        <script type="text/javascript">
            document.addEventListener("alpine:init", function() {
                function showPassword() {
                    const passwordInput = document.getElementById('password');
                    passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
                }
            });
        </script>
    </x-slot:script>
</x-guest-layout>
