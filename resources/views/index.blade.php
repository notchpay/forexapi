<x-app-layout>
    <div>
        <div class="my-5 max-w-screen-xl mx-auto px-4 lg:px-8">
            <div class="lg:flex">
                <div
                    class="lg:w-3/4 xl:w-1/2 pt-10 md:pt-0 md:flex flex-col justify-center text-center px-5 sm:px-0 md:text-left">
                    <div class="flex flex-col mt-16">
                        <h1 class="intro-y text-3xl md:text-5xl md:leading-tight font-medium text-white tracking-tight">
                            World data designed for
                            <span class="text-yellow-400"> developer's</span>
                        </h1>
                        <p class="text-sm font-semibold tracking-wide order-first mt-4 uppercase text-white">
                            By
                            <a href="{{env('CLIENT_URL', 'https://notchpay.co')}}" target="_blank"
                                class="text-yellow-400">Notch Pay</a>
                        </p>

                        <div class="intro-y text-lg md:text-2xl text-white opacity-50 mt-6">
                            We provide agnostic data source for foreign Currency,
                            conversion, places. Our data is sourced from top-level data
                            providers and banks in the world. Theres data is hourly updated.
                        </div>
                        <div class="text-lg mt-14">
                            <a href="{{env('DOCS_URL', 'https://docs.forexapi.world')}}" target="_blank"
                                class="px-6 py-3 bg-white text-gray-800 border-white w-full md:w-auto md:text-left rounded-full ring-2 ring-white ring-offset-1 mr-3 mb-2 md:inline block">
                                Documentation
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </a>
                            <a href="{{route('register')}}"
                                class="pl-8 pr-16 py-3 border-white text-white border-1 relative w-full md:w-auto md:text-left mt-5 rounded-full md:mt-0 ring-2 ring-white ring-offset-1 ring-offset-primary mb-2 md:inline block hover:text-yellow-400">
                                @lang("Get your free API Key")
                                <span
                                    class="bg-white w-12 h-12 absolute flex justify-center items-center rounded-full right-0 top-0 bottom-0 my-auto ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-2 text-primary"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/4 xl:w-1/2 pt-5 md:pt-14 px-5 sm:px-0 flex flex-row-reverse">
                    <div class="py-8 w-full md:w-4/6">
                        <div class="rounded-xl bg-white">
                            <span class="flex space-x-2 w-full align-middle rounded-t-xl p-4 bg-gray-300">
                                <span class="w-4 h-4 rounded-full bg-gray-700"></span>
                                <span class="w-4 h-4 rounded-full bg-gray-700"></span>
                                <span class="w-4 h-4 rounded-full bg-gray-700"></span>
                            </span>
                            <div class="p-3">
                                <div class="flex flex-col md:flex-row space-x-0 md:space-x-2">
                                    <div>
                                        <label class="block">From</label>
                                    </div>
                                    <div>
                                        <label class="block">To</label>

                                    </div>
                                </div>
                                <div
                                    class="flex justify-between md:flex-row flex-col mt-3 mb-2 space-x-0 space-y-2 md:space-x-2">
                                    <input type="number" min="0" v-model="form.amount"
                                        class="px-3 text-gray-700 text-sm border rounded flex-grow border-gray-700 focus:outline-none py-2 md:py-1.5"
                                        placeholder="Amount" />
                                    <button
                                        class="w-full py-3 px-4 text-sm text-yellow-500 bg-primary rounded-lg font-semibold uppercase lg:w-auto -ml-1 md:ml-0">
                                        Convert
                                    </button>
                                </div>
                                <div class="flex justify-center p-2">
                                    <span class="text-3xl text-gray-800 rounded-full  py-2 px-4">value</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="mt-20 max-w-screen-sm mx-auto lg:mx-0 lg:max-w-none grid lg:grid-cols-3 gap-10 lg:gap-8 text-sm">
                <div class="flex space-x-6">
                    <div class="w-10 h-10 rounded bg-gray-800 text-center flex-none text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-2 ml-2 " fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-semibold text-white mb-2">Developer First</h2>
                        <p class="text-gray-200">
                            Our service is tailor-made for developer, with compatibility with more than
                            20 technologies and programming languages.
                        </p>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <div class="w-10 h-10 rounded bg-gray-800 text-center flex-none text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-2 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-semibold text-white mb-2">Ultra Fast & Updated</h2>
                        <p class="text-gray-200">
                            Our api supports thousands of requests per second and are updated every hour.
                        </p>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <div class="w-10 h-10 rounded bg-gray-800 text-center flex-none text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-2 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-semibold text-white mb-2">Bank-level Security</h2>
                        <p class="text-gray-200">
                            We use SHA-256 SSL encryption to keep you and your customers safe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-10 mt-8">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
                <div class="max-w-lg lg:max-w-xl">
                    <p class="text-base leading-6 text-yellow-500 font-semibold tracking-wide uppercase">
                        Key features
                    </p>
                    <h3 class="mt-2 text-3xl leading-8 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
                        Assured high availability of our features.
                    </h3>
                    <p class="mt-3 text-lg leading-6 text-gray-400">
                        We help you to have a global view on the world data by REST API.
                    </p>
                </div>
                <div class="mt-16">
                    <div class="md:grid md:grid-cols-2 md:gap-10 lg:grid-cols-3">
                        <div>
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r to-primary from-gray-800 text-yellow-500">
                                <solid-currency-euro-icon class="h-6 w-6"></solid-currency-euro-icon>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-white">World Currencies</h5>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    With more than 150 currencies taken into account, we make it easy to
                                    communicate between them.
                                </p>
                            </div>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r to-primary from-gray-800 text-yellow-500">
                                <solid-cube-transparent-icon class="h-6 w-6"></solid-cube-transparent-icon>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-white">Rates</h5>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    Get the real time value on the world market of one or more currencies.
                                </p>
                            </div>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r to-primary from-gray-800 text-yellow-500">
                                <solid-cube-transparent-icon class="h-6 w-6"></solid-cube-transparent-icon>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-white">Historical rates</h5>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    Get the real time value on the world market of one or more currencies.
                                </p>
                            </div>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r to-primary from-gray-800 text-yellow-500">
                                <solid-color-swatch-icon class="h-6 w-6"></solid-color-swatch-icon>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-white">Convertion</h5>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    Convert money from one currency to another in real time.
                                </p>
                            </div>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r to-primary from-gray-800 text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-white">Countries List</h5>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    We also put the data on the countries of the earth at your service.
                                </p>
                            </div>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <div
                                class="flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r to-primary from-gray-800 text-yellow-500">
                                <solid-search-circle-icon class="h-6 w-6"></solid-search-circle-icon>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-white">Search</h5>
                                <p class="mt-2 text-base leading-6 text-gray-400">
                                    No need to store countries in your database, search them directly on our
                                    server.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
