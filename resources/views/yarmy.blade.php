<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <header>
        <nav class="mx-auto container">
            <div class="flex flex-wrap items-center justify-between p-6">
                {{-- Logo will come here --}}
                <a href="#"> <x-logo /></a>

                {{-- Menu items in the center here --}}
                <div class="text-lg text-gray-600 lg:top-0 hidden lg:flex order-2 lg:order-1">
                    <a class="block lg:inline-block text-teal-600 mt-4 lg:mt-0 mr-10" href="#">Home</a>
                    <a class="block lg:inline-block hover:text-gray-700 mt-4 lg:mt-0 mr-10" href="#">Services</a>
                    <a class="block lg:inline-block hover:text-gray-700 mt-4 lg:mt-0 mr-10" href="#">Porfolio</a>
                    <a class="block lg:inline-block hover:text-gray-700 mt-4 lg:mt-0 mr-10" href="#">Company</a>
                    <a class="block lg:inline-block hover:text-gray-700 mt-4 lg:mt-0" href="#">Contact</a>
                </div>

                {{-- CTA buttons will come here --}}
                <div class="flex items-center order-1 lg:order-2">
                    <div class="mr-5 lg:mr-0">
                        <button class="py-2 px-6 rounded-md text-lg text-gray-600 hover:text-gray-700">Sign in</button>
                        <button class="py-2 px-6 rounded-md text-lg bg-teal-500 hover:bg-teal-600 text-white">
                            Sign up
                        </button>
                    </div>
                    <input type="checkbox" name="" id="navToggle" hidden>
                    <label for="navToggle" class="block lg:hidden border-teal-500 border-2 py-3 px-6 rounded-md">
                        <x-menu-label />
                    </label>
                </div>
            </div>

            {{-- Mobiel Menu items --}}
            <div id="mobileMenu"
                class="divide-y-2 mx-6 divide-teal-300 text-center text-lg bg-teal-50 p-6 text-gray-600 lg:top-0 lg:hidden">
                <a class="block w-3/4 mx-auto text-teal-600 py-3 pt-0" href="#">Home</a>
                <a class="block w-3/4 mx-auto hover:text-gray-700 py-3" href="#">Services</a>
                <a class="block w-3/4 mx-auto hover:text-gray-700 py-3" href="#">Porfolio</a>
                <a class="block w-3/4 mx-auto hover:text-gray-700 py-3" href="#">Company</a>
                <a class="block w-3/4 mx-auto hover:text-gray-700 py-3 pb-0" href="#">Contact</a>
            </div>
        </nav>
    </header>

    <main class="mt-12 lg:mt-32">
        <section class="container mx-auto p-6">
            <div class="w-full lg:flex items-center">
                {{-- hero section content goes here --}}
                <div class="w-full lg:w-1/2">
                    {{-- hero section description goes here --}}
                    <h2 class="text-md lg:text-2xl text-gray-600">Market intelligence solutions to</h2>
                    <h1 class="text-5xl lg:text-6xl font-bold text-teal-600 mb-2 lg:mb-6">Win your markert</h1>
                    <p class="text-md lg:text-xl font-light text-gray-800 mb-8">Powerful analytics tools for your
                        business.
                        See the exact keywords for which your competitors rank in organic search and the amount of
                        traffic
                        driven by each of them.</p>

                </div>
                <div class="w-full lg:w-1/2 lg:pl-24">
                    {{-- sign up form goes here --}}
                    <form action="#" class="bg-gray-100 shadow-sm rounded-md p-8">
                        <div class="mb-6">
                            <label for="name" class="mb-3 block text-gray-700">Full name:</label>
                            <input type="text" name="name" id="name"
                                class="bg-white rounded-md border border-gray-200 p-3 focus:outline-none w-full"
                                placeholder="John Doe" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="mb-3 block text-gray-700">Email address:</label>
                            <input type="email" name="email" id="email"
                                class="bg-white rounded-md border border-gray-200 p-3 focus:outline-none w-full"
                                placeholder="john.doe@company.com" required>
                        </div>
                        <div class="mb-8">
                            <label for="company_size" class="mb-3 block text-gray-700">Company size:</label>
                            <select name="company_size" id="company_size"
                                class="bg-white text-gray-400 rounded border border-gray-300 p-3 focus:outline-none w-full"
                                required>
                                <option value="">Select an option</option>
                                <option value="1">1-10</option>
                                <option value="2">10-50</option>
                                <option value="3">50-100</option>
                                <option value="4">100+</option>
                            </select>
                        </div>
                        <button
                            class="text-lg bg-teal-500 hover:bg-teal-600 hover:ring-2 ring-teal-600 text-white py-3 px-12 w-full rounded-md ring-offset-2 focus:outline-none"
                            type="submit">Request Demo</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

<script>
    let navToggler = document.getElementById('navToggle');
    let mobileNavMenu = document.getElementById("mobileMenu");

    navToggler.addEventListener('change', function(e) {
        mobileNavMenu.classList.toggle("hidden");
        // mobileNavMenu.classList.toggle("left-96");
        // if (this.checked) {

        //     mobileNavMenu.classList.toggle("hidden");
        // } else {
        //     mobileNavMenu.classList.remove("hidden");
        // }
    });
</script>

</html>
