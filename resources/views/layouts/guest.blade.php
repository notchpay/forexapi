<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-primary">
    <div class="flex flex-col justify-between min-h-screen">
        <header class="flex-none relative z-50 text-sm leading-6 font-medium text-gray-200 pt-5">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-center flex-wrap sm:flex-nowrap">
                    <a href="{{url('/')}}" class="flex-none text-white">
                        <span class="sr-only">Forex API</span>
                        <x-logo class="h-14"></x-logo>
                    </a>
                </div>
            </div>
        </header>
        <main class="">
            {{$slot}}
        </main>
        <footer class="flex justify-center px-4 text-gray-100 mt-4">
            <div class="w-full py-6" style="z-index: 900">
                {{-- <h1 class="text-center text-lg font-bold lg:text-2xl">
                    Subscribe to our newsletter to <br />receive information about our updates!
                </h1>

                <div class="flex justify-center mt-6">
                    <div class="bg-white rounded-lg">
                        <div class="flex flex-wrap justify-between md:flex-row">
                            <input type="email" v-model="form.email"
                                class="m-1 p-2 appearance-none text-gray-700 text-sm focus:outline-none"
                                placeholder="Enter your email" />
                            <button @click.prevent="subscribe()"
                                class="w-full m-1 p-2 text-sm bg-primary rounded-lg font-semibold uppercase lg:w-auto">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div> --}}
                <div class="max-w-screen-xl mx-auto">
                    <hr class="h-px mt-6 bg-gray-700 border-none" />

                    <div class="flex flex-col items-center justify-between mt-6 md:flex-row">
                        <div>
                            <a href="#" class="text-xl font-bold">Forex API</a>
                        </div>
                        <div class="flex mt-4 md:m-0">
                            <div class="-mx-4">
                                <a href="https://github.com/notchpay" class="px-4 text-sm">Github</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>