<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    @vite('resources/css/app.css')


    <title>Navigation</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

        #check:checked~ul {
            left: 0;
        }
    </style>

</head>

<body class="font-[Montserrat]">

    <header>
        <nav class="bg-slate-600 h-20 w-full fixed">
            <input type="checkbox" name="" id="check" hidden>
            <label for="check" class="text-white inline lg:hidden float-right text-3xl leading-[80px] mr-10">
                <i class="fas fa-bars"></i>
            </label>
            <label class="text-white pl-12 md:pl-24 text-3xl  leading-[80px]">Navigation</label>
            <ul
                class="float-right mr-10 fixed lg:flex lg:relative leading-[80px] uppercase text-white lg:rounded rounded-none
            h-[100vh] lg:h-0 w-[100%] lg:w-fit top-20 lg:top-0  transition-all duration-300 lg:transition-none text-center bg-slate-700
            left-[-100%] lg:left-0
            ">
                <li><a class="bg-slate-300 lg:mr-5" href="#">Home</a></li>
                <li><a  class="lg:mr-5" href="#">About</a></li>
                <li><a  class="lg:mr-5" href="#">Contact</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="py-6">
            <p class="my-10 pt-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, assumenda quidem
                voluptates quaerat
                doloremque sit similique saepe quae at voluptate cum aliquam? Harum animi itaque culpa fugit nostrum
                enim
                accusantium.</p>
            <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, assumenda quidem
                voluptates quaerat
                doloremque sit similique saepe quae at voluptate cum aliquam? Harum animi itaque culpa fugit nostrum
                enim
                accusantium.</p>
            <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, assumenda quidem
                voluptates quaerat
                doloremque sit similique saepe quae at voluptate cum aliquam? Harum animi itaque culpa fugit nostrum
                enim
                accusantium.</p>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>
