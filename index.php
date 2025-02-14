<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamela Rose Malasan - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        header {
            padding: 1.5rem 0;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 99;
        }

        header .navbar a {
            color: white;
            padding: 10px 20px;
        }

        header .navbar a:hover {
            background: white;
            color: black;
        }

        header .navbar .button {
            border: 1px solid white;
        }

        header .navbar .button:hover {
            background: white;
            color: black;
        }

        .container-nav {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }

        #burger {
            display: none;
        }

        @media screen and (max-width: 1024px) {
            .container {
                max-width: 90%;
                flex-wrap: wrap;
                height: auto;
                gap: 15px;
            }

            .container>div {
                flex: 1 1 45%;
                /* Two items per row */
                height: 200px;
                /* Adjusted for better mobile fit */
            }

            .container>div:hover {
                flex: 1 1 50%;
                /* Slight hover effect */
                transform: none;
            }

            .container-nav {
                max-width: 90%;
            }

            .home {
                flex-direction: column;
                text-align: center;
            }

            .home .container {
                margin-left: 0;
                align-items: center;
            }

            .home h1 {
                font-size: 3rem;
                margin-left: 0;
            }

            .home p {
                font-size: 1.2rem;
                margin-left: 0;
            }

            .home img {
                width: 80%;
                height: auto;
                margin: 0;
            }

            #contact {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: 20px;
                width: 100%;
            }

            #contact h2 {
                font-size: 2rem;
            }

            #contact p {
                font-size: 1rem;
                max-width: 80%;
            }

            #contact button {
                width: 80%;
                max-width: 250px;
                font-size: 1rem;
                padding: 10px;
            }
        }

        @media screen and (max-width: 768px) {
            .container>div {
                flex: 1 1 100%;
                /* Full width on mobile */
                height: 180px;
            }

            .navbar {
                display: none;
            }

            #burger {
                display: block;
                font-size: 2rem;
                cursor: pointer;
            }


            .home h1 {
                font-size: 2rem;
                text-align: center;
            }

            .home img {
                width: 80%;
            }

            .about {
                font-size: 1.5rem;
                text-align: center;
            }

            .about p {
                font-size: 1rem;
                padding: 0 20px;
            }

            #contact {
                padding: 15px;
                margin-top: 50px;
                /* Push Contact section down */
            }

            #contact h2 {
                font-size: 1.8rem;
            }

            #contact p {
                font-size: 0.9rem;
                max-width: 90%;
            }

            #contact button {
                width: 90%;
                max-width: 200px;
                font-size: 0.9rem;
                padding: 8px;
            }

            #projects {
                padding-bottom: 100px;
                /* Adds space below Projects */
            }
        }

        @media screen and (max-width: 480px) {
            .home h1 {
                font-size: 1.5rem;
            }

            .about {
                font-size: 1.2rem;
                padding: 10px;

            }

            #projects {
                padding-bottom: 100px;
                /* Adds space below Projects */
            }

            #contact {
                margin-top: 250px;
                /* Push Contact section down */
            }
        }

        @media screen and (max-width: 330px) {
            #home {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            #home h1 {
                font-size: 2rem;
                /* Reduce heading size */
                margin-left: 0;
                /* Remove unnecessary left margin */
            }

            #home p {
                font-size: 1rem;
                /* Adjust text size */
                margin-left: 0;
            }

            #home img {
                width: 80%;
                /* Make image responsive */
                height: auto;
                margin: 0 auto;
            }

            #passion {
                font-size: 1rem;


            }

            #projects {
                flex-direction: column;
                padding-bottom: 80px;
                /* Extra spacing */
            }

            #contact {
                margin-top: 250px;
                /* Ensure it does not overlap */
                padding: 20px;
            }
        }


        .bg-halfblack {
            background: rgba(0, 0, 0, 0.5);
        }

        /* Updated row class to space out logo and navbar */
        .row {
            display: flex;
            justify-content: space-between;
            /* Space between the logo and navbar */
            align-items: center;
            width: 100%;
        }

        /* Navbar - Align items to the left */
        .navbar {
            display: flex;
            justify-content: flex-start;
            /* No space between navbar items */
            align-items: center;
        }

        /* Container for the logo */
        .logo {
            display: flex;
            align-items: center;
        }


        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }



        @import url("https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap");



        .container {
            max-width: 80%;
            width: 100%;
            display: flex;
            justify-content: center;
            height: 500px;
            gap: 10px;
        }

        .container>div {
            flex: 0 0 270px;
            border-radius: 0.5rem;
            transition: 0.5s ease-in-out;
            cursor: pointer;
            box-shadow: 1px 5px 15px #335E83;
            position: relative;
            overflow: hidden;
        }

        .container>div:nth-of-type(1) {
            background: url("3.png") no-repeat 50% / cover;
        }

        .container>div:nth-of-type(2) {
            background: url("4.png") no-repeat 50% / cover;
        }

        .container>div:nth-of-type(3) {
            background: url("2.png") no-repeat 50% / cover;
        }

        .container>div:nth-of-type(4) {
            background: url("5.png") no-repeat 50% / cover;
        }

        .content {

            font-size: 1.5rem;
            color: black;
            display: flex;
            align-items: center;
            padding: 15px;
            opacity: 0;
            flex-direction: column;
            height: 100%;
            justify-content: flex-end;
            background: rgb(2, 2, 46);
            background: linear-gradient(0deg, rgba(240, 240, 240, 0.68) 0%, rgba(255, 255, 255, 0) 100%);
            transform: translatey(100%);
            transition: opacity 0.5s ease-in-out, transform 0.5s 0.2s;
            visibility: hidden;
        }

        .content span {
            display: block;
            margin-top: 5px;
            font-size: 1.2rem;
        }

        .container>div:hover {
            flex: 0 0 250px;
            box-shadow: 1px 3px 15px #7645d8;
            transform: translatey(-30px);
        }

        .container>div:hover .content {
            opacity: 1;
            transform: translatey(0%);
            visibility: visible;
        }

        .font2 {
            font-family: "Playfair Display", serif;
            font-size: 5rem;
        }

        .size2 {
            font-size: 1.5rem;
        }

        .halfwhite {
            color: rgba(255, 255, 255, 0.5);

        }

        .spacetop1 {
            margin-top: -1.5rem;
        }


        .img-responsive {
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .about {

            font-family: "Playfair Display", serif;
            font-size: 2rem;

        }
    </style>
</head>


<body class="bg-gray-900 text-white">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector(".navbar");
            setTimeout(() => navbar.classList.add("visible"), 300); // Adds a delay to the navbar animation

            const elements = document.querySelectorAll(".fade-in");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, {
                threshold: 0.3
            });
            elements.forEach(el => observer.observe(el));
        });
    </script>

    <!-- Navbar -->
    <header id="nav" class="header bg-halfblack">
        <div class="container-nav">
            <div class="row jc-between ai-center">
                <div class="flex ai-center logo">

                    <a href="#nav" class="white paddingleft1">Pam</a>
                </div>
                <div id="burger" class="fas fa-bars size3 white"></div>
                <nav class="navbar ">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#projects">Projects</a>
                    <a href="#contact" class="button">Hire me</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="home spacetop15 h-screen flex flex-row justify-between items-center" id="home">
        <div class="row container flex-col items-start text-left ml-12">
            <h1 class="size7 font2 bold ml-72"> I'm</h1> <!-- Centered "I'm" -->
            <h1 class="size7 font2 bold"> Pamela Rose Malasan</h1>
            <p class="size2 halfwhite spacetop1 ml-44">
                IT Support | Web Developer
            </p>
        </div>

        <div class="flex col5 col10-s spacetop5 justify-center ">
            <img src="1.png" alt="" class="float img-responsive h-full w-96 mr-60 mt-28" />
        </div>
    </section>



    <!-- Second Page: Passion -->
    <section id="about" class="h-screen flex flex-col justify-center items-center text-center relative fade-in">
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1600" alt="Passion Background" class="absolute inset-0 w-full h-full object-cover opacity-20">
        <h2 class="text-xl lg:text-4xl md:text-4xl sm:text-xl font-semibold text-blue-400">About</h2>
        <p class="text-xl lg:text-4xl md:text-4xl sm:text-xl text-gray-300 mt-4 max-w-2xl">I'm Pamela Rose Malasan, a Filipino with a strong interest in website development. I currently work at GoodTaste Restaurant as an IT support/programmer and freelancer part-time. I contributed to the company's technological innovation, particularly with regard to websites. I want to expand my knowledge and abilities.</p>
    </section>

    <!-- Third Page: Projects -->
    <section id="projects" class="h-screen flex flex-col justify-center items-center text-center relative fade-in">

        <h2 class="text-4xl font-semibold text-blue-400">Projects</h2>
        <div class="container mt-10 ">
            <div>
                <a href="https://gtr-queuing.pammydev.com/main.php">
                    <div class="content">
                        <h2>Queuing System</h2>
                        <span>A system that manages restaurant queues efficiently.</span>
                        <div class="relative">
                            <div class="absolute left-0 bottom-1 group">
                                <svg id="openModal" class="w-6 h-6 text-black hover:text-blue-500 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <span class="absolute left-8 bottom-1 w-52 bg-gray-800 text-white text-xs rounded-md py-0.5 px-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Click for guidelines.
                            </span>
                        </div>

                        <!-- Modal -->
                        <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-80">
                                <h2 class="text-lg font-semibold mb-2">System Guidelines</h2>
                                <p class="text-sm mb-4">
                                    Put numbers in manual button and double click it for the voiceover <br>
                                    <a href="https://gtr-queuing.pammydev.com/main.php" class="text-blue-500 underline" target="_blank">Main System</a>
                                </p>
                                <p class="text-sm">
                                    The numbers will appear here
                                    <a href="https://gtr-queuing.pammydev.com/tv.php" class="text-blue-500 underline" target="_blank">Queue Display</a>
                                </p>
                                <button id="closeModal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                                    Close
                                </button>
                            </div>
                        </div>






                    </div>
                </a>
            </div>
            <div>
                <a href="https://time-monitoring.pammydev.com/">

                    <div class="content">
                        <h2>Time Monitoring System</h2>
                        <span>A system that manages restaurant queues efficiently.</span>
                        <div class="relative">
                            <div class="absolute left-0 bottom-1 group">
                                <svg id="openModalMonitoring" class="w-6 h-6 text-black hover:text-blue-500 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <span class="absolute left-8 bottom-1 w-52 bg-gray-800 text-white text-xs rounded-md py-0.5 px-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Click for guidelines.
                            </span>
                        </div>

                        <!-- Modal -->
                        <div id="modalMonitoring" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-80">
                                <h2 class="text-lg font-semibold mb-2">System Guidelines</h2>
                                <p class="text-sm mb-4">
                                    Add New Records here <br>
                                    <a href="https://time-monitoring.pammydev.com/add_user.php" class="text-blue-500 underline" target="_blank">Add New Record</a>
                                </p>
                                <p class="text-sm mb-4">
                                    Search the new records here <br>
                                    <a href="https://time-monitoring.pammydev.com/hr_search.php" class="text-blue-500 underline" target="_blank">HR Search</a>
                                </p>
                                <p class="text-sm">
                                    It will also appear here <br>
                                    <a href="https://time-monitoring.pammydev.com" class="text-blue-500 underline" target="_blank">Display</a>
                                </p>
                                <button id="closeModal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                                    Close
                                </button>
                            </div>
                        </div>






                    </div>
                </a>
            </div>
            <div>
                <a href="https://gtr-it-inventory.pammydev.com/">
                    <div class="content">
                        <h2>IT Inventory</h2>
                        <span>A system that manages the assets in IT department.</span>
                        <div class="relative">
                            <div class="absolute left-0 bottom-1 group">
                                <svg id="openModalInventory" class="w-6 h-6 text-black hover:text-blue-500 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <span class="absolute left-8 bottom-1 w-52 bg-gray-800 text-white text-xs rounded-md py-0.5 px-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Click for guidelines.
                            </span>
                        </div>

                        <!-- Modal -->
                        <div id="modalInventory" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-80">
                                <h2 class="text-lg font-semibold mb-2">System Guidelines</h2>
                                <p class="text-sm mb-4">
                                    Username: admin <br>
                                    Password: admin <br>
                                    <a href="https://gtr-it-inventory.pammydev.com/" class="text-blue-500 underline" target="_blank">Main System</a>
                                </p>
                                <button id="closeModal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                                    Close
                                </button>
                            </div>
                        </div>






                    </div>
                </a>
            </div>
            <div>
                <a href="https://goodtaste-menu.pammydev.com/">
                    <div class="content">
                        <h2>QR Menu</h2>
                        <span>A single page menu to view via qr code.</span>
                        <div class="relative">
                            <div class="absolute left-0 bottom-1 group">
                                <svg id="openModalqr" class="w-6 h-6 text-black hover:text-blue-500 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <span class="absolute left-8 bottom-1 w-52 bg-gray-800 text-white text-xs rounded-md py-0.5 px-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Click for guidelines.
                            </span>
                        </div>

                        <!-- Modal -->
                        <div id="modalqr" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-80">
                                <h2 class="text-lg font-semibold mb-2">System Guidelines</h2>
                                <p class="text-sm mb-4">
                                    Scan the menu via QR code <br>
                                    <a href="https://goodtaste-menu.pammydev.com/" class="text-blue-500 underline" target="_blank">Main System</a>
                                </p>
                                <button id="closeModal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div>

                <div class="content">
                    <h2>Warehouse Inventory</h2>
                    <span>On Going.</span>









                </div>

            </div>
    </section>


    <!-- Fourth Page: Contact -->
    <section id="contact" class="h-screen flex flex-col justify-center items-center text-center relative fade-in">
        <h2 class="text-4xl font-semibold text-blue-400">Contact Me</h2>
        <p class="text-gray-300 mt-4">Feel free to reach out for collaboration or inquiries.</p>
        <button class="mt-4 px-6 py-3 bg-gradient-to-r from-purple-500 to-blue-500 hover:from-blue-500 hover:to-purple-500 rounded-lg text-white font-bold shadow-lg transition-transform hover:scale-105" onclick="toggleContactForm()">Email Me</button>

        <!-- Contact Form -->
        <div id="contactForm" class="mt-4 p-4 bg-gray-800 rounded-lg shadow-lg text-white transition-all duration-300 ease-in-out opacity-0 pointer-events-none">
            <h3 class="text-xl font-semibold">Contact Information</h3>
            <p class="mt-2">Phone: 09197807642</p>
            <p>Email: emalasan37@gmail.com</p>
        </div>
    </section>


</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const openModalBtn = document.getElementById("openModal");
        const modal = document.getElementById("modal");
        const closeModalBtn = modal.querySelector("#closeModal");

        // Prevent the click from propagating to the <a> tag
        openModalBtn.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevents <a> from being clicked
            event.preventDefault(); // Prevents the <a> from navigating
            modal.classList.remove("hidden");
        });

        closeModalBtn.addEventListener("click", function() {
            modal.classList.add("hidden");
        });

        // Close modal when clicking outside of it
        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    });


    document.addEventListener("DOMContentLoaded", function() {
        const openModalBtn = document.getElementById("openModalMonitoring");
        const modal = document.getElementById("modalMonitoring");
        const closeModalBtn = modal.querySelector("#closeModal");

        openModalBtn.addEventListener("click", function() {
            event.stopPropagation(); // Prevents <a> from being clicked
            event.preventDefault(); // Prevents the <a> from navigating
            modal.classList.remove("hidden");
        });

        closeModalBtn.addEventListener("click", function() {
            modal.classList.add("hidden");
        });

        // Close modal when clicking outside of it
        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const openModalBtn = document.getElementById("openModalInventory");
        const modal = document.getElementById("modalInventory");
        const closeModalBtn = modal.querySelector("#closeModal");

        openModalBtn.addEventListener("click", function() {
            event.stopPropagation(); // Prevents <a> from being clicked
            event.preventDefault(); // Prevents the <a> from navigating
            modal.classList.remove("hidden");
        });

        closeModalBtn.addEventListener("click", function() {
            modal.classList.add("hidden");
        });

        // Close modal when clicking outside of it
        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const openModalBtn = document.getElementById("openModalqr");
        const modal = document.getElementById("modalqr");
        const closeModalBtn = modal.querySelector("#closeModal");

        openModalBtn.addEventListener("click", function() {
            event.stopPropagation(); // Prevents <a> from being clicked
            event.preventDefault(); // Prevents the <a> from navigating
            modal.classList.remove("hidden");
        });

        closeModalBtn.addEventListener("click", function() {
            modal.classList.add("hidden");
        });

        // Close modal when clicking outside of it
        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });
    });

    function showContactForm() {
        const form = document.getElementById("contactForm");
        form.classList.remove("opacity-0", "pointer-events-none");
        form.classList.add("opacity-100", "pointer-events-auto");
    }

    function hideContactForm() {
        const form = document.getElementById("contactForm");
        form.classList.remove("opacity-100", "pointer-events-auto");
        form.classList.add("opacity-0", "pointer-events-none");
    }

    function toggleContactForm() {
        var contactForm = document.getElementById("contactForm");
        if (contactForm.classList.contains("opacity-0")) {
            contactForm.classList.remove("opacity-0", "pointer-events-none");
            contactForm.classList.add("opacity-100", "pointer-events-auto");
        } else {
            contactForm.classList.add("opacity-0", "pointer-events-none");
            contactForm.classList.remove("opacity-100", "pointer-events-auto");
        }
    }
</script>

</html>