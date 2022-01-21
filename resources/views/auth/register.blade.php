<x-guest-layout>
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>
        </form>
    </x-auth-card> --}}
    <div class="max-w-container mx-auto">
        <div class="py-5 text-center">
            <h1 class="text-2xl text-white">Create your free account</h1>
            <p class="text-yellow-500 opacity-80">This is where it all begins.</p>
        </div>
        <!-- component -->
        <div class="font-sans">
            <div class="relative mt-6 flex flex-col sm:justify-center items-center">
                <div class="relative sm:max-w-sm w-full">
                    <div class="
                  bg-gray-800
                      shadow-lg
                      w-full
                      h-full
                      rounded-3xl
                      absolute
                      transform
                      -rotate-6
                 "> </div>
                    <div class="
                  bg-yellow-400
                      shadow-lg
                      w-full
                      h-full
                      rounded-3xl
                      absolute
                      transform
                      rotate-6
                   "> </div>
                    <div class="relative w-full rounded-3xl px-6 py-4 bg-gray-100 shadow-md">
                        <form class="mt-6" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mt-4">
                                <input type="text" name="name" placeholder="Name" class="mt-1
                                                        block
                                                        w-full
                                                        px-3
                                                        text-sm
                                                        border
                                                        rounded-lg
                                                        flex-grow
                                                        focus:outline-none
                                                        py-2.5 @error('name') text-red-700 border-red-700 @enderror" />
                                @error("name")

                                <small class="text-red-700">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <input type="email" name="email" placeholder="Email" class="mt-1
                            block
                            w-full
                            px-3
                            text-sm
                            border
                            rounded-lg
                            flex-grow
                            focus:outline-none
                            py-2.5 @error('email') text-red-700 border-red-700 @enderror
                      " />
                                @error("email")

                                <small class="text-red-700">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <input type="password" placeholder="Password" name="password" class="
                        mt-1
                            block
                            w-full
                            px-3
                            text-gray-700 text-sm
                            border
                            rounded-lg
                            flex-grow
                            border-gray-700
                            focus:outline-none
                            py-2.5
                       " />
                            </div>
                            {{-- <div class="mt-7 flex">
                                <label for="remember_me" class="inline-flex items-center w-full cursor-pointer">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>

                                <div class="w-full text-right">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                </div>
                            </div> --}}
                            <div class="mt-4">
                                <button type="submit" class="
                        bg-primary
                            w-full
                            py-3
                            rounded-lg
                            text-white
                            focus:outline-none
                            transition
                            duration-500
                            ease-in-out
                            transform
                       ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="mt-4 mb-3">
                                <div class="flex justify-center items-center">
                                    <label class="mr-2">{{ __('Already registered?') }}</label>
                                    <a href="{{route('register')}}" class="text-blue-500">
                                        @lang("Log in")
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>