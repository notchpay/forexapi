<x-guest-layout>

    <div class="max-w-container mx-auto">
        <div class="py-5 text-center">
            <h1 class="text-2xl text-white">Login to your account</h1>
            <p class="text-yellow-500 opacity-80">Manage your API.</p>
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
                "></div>
                    <div class="
                  bg-yellow-400
                  shadow-lg
                  w-full
                  h-full
                  rounded-3xl
                  absolute
                  transform
                  rotate-6
                "></div>
                    <div class="relative w-full rounded-3xl px-6 py-4 bg-gray-100 shadow-md">
                        <form class="mt-6" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mt-4">
                                <input type="email" name="email" placeholder="Email" class="
                        mt-1
                        block
                        w-full
                        px-3
                        text-sm
                        border
                        rounded-lg
                        flex-grow
                        focus:outline-none
                        py-2.5

                        @error('email')
                            text-red-700 border-red-700
                        @enderror
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
                            <div class="mt-7 flex">
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
                            </div>
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
                                    {{ __('Log in') }}
                                </button>
                            </div>
                            <div class="mt-4 mb-3">
                                <div class="flex justify-center items-center">
                                    <label class="mr-2">Don't have an account yet?</label>
                                    <a href="{{route('register')}}" class="text-blue-500">
                                        Create it
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