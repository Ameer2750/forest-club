<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <!-- map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <title>Forest club</title>
</head>

<body class="w-full h-full">
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>

    <header>

        <div class="flex flex-row justify-between px-14 py-8 ">
            <div>
                <img src="{{asset('images/forest-club-logo.png')}}" alt="">
            </div>
            <div class="flex flex-row gap-6">
                <div class="flex flex-row items-center gap-4">
                    <span class="material-symbols-outlined text-4xl">
                        phone_iphone
                    </span>
                    <span>
                        Hyderabad
                        <br>
                        +91 7999223344
                    </span>
                </div>
                <div class="flex flex-row items-center gap-4">
                    <span class="material-symbols-outlined text-4xl">
                        phone_iphone
                    </span>
                    <span>
                        Maharashtra
                        <br>
                        +91 9823159663
                    </span>
                </div>
            </div>
        </div>

        <div>
            <nav class="flex flex-row justify-center bg-black py-4 ">
                <ul class="flex flex-row  gap-6 text-white">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>























    </header>
