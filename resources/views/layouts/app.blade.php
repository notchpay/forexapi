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
    <livewire:styles />
    <livewire:scripts />
    <wireui:scripts />
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <div class="bg-primary">
            <header class="flex-none relative z-50 text-sm leading-6 font-medium text-gray-200 pt-5">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center flex-wrap sm:flex-nowrap">
                        <a href="{{url('/')}}" class="flex-none text-white">
                            <span class="sr-only">Forex API</span>
                            <x-logo class="h-14"></x-logo>
                        </a>
                        <div class="w-full flex-none mt-4 sm:mt-0 sm:w-auto sm:ml-auto flex items-center">
                            <a href="{{env('DOCS_URL', 'https://docs.forexapi.world')}}" class="hover:text-gray-400"
                                target="_blank">
                                <abbr class="sm:hidden" title="Documentation">Docs</abbr>
                                <span class="hidden sm:inline">Documentation</span>
                            </a>
                            @if (Route::has('login'))
                            @auth
                            <a href="/dashboard"
                                class="group border-l pl-6 border-gray-700 hover:text-teal-400 flex items-center">
                                <span>Dashboard</span>
                                <svg width="11" height="10" fill="none"
                                    class="flex-none ml-1.5 text-gray-400 group-hover:text-teal-400">
                                    <path
                                        d="M5.593 9.638L10.232 5 5.593.36l-.895.89 3.107 3.103H0v1.292h7.805L4.698 8.754l.895.884z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            @endauth

                            @guest
                            <a href="{{route('login')}}"
                                class="group border-l pl-6 border-gray-700 hover:text-teal-400 flex items-center">
                                <span>@lang("Login")</span>
                                <svg width="11" height="10" fill="none"
                                    class="flex-none ml-1.5 text-gray-400 group-hover:text-teal-400">
                                    <path
                                        d="M5.593 9.638L10.232 5 5.593.36l-.895.89 3.107 3.103H0v1.292h7.805L4.698 8.754l.895.884z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            @endguest
                            @endif
                        </div>
                    </div>
                </div>
            </header>
            <main class="min-h-screen">
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
    </div>
</body>

</html>
