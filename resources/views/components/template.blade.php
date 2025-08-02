<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Coolvetica via CDN alternatif (karena tidak tersedia di Google Fonts) -->
    <link href="https://fonts.cdnfonts.com/css/coolvetica" rel="stylesheet"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .clip-diagonal {
            clip-path: polygon(0 0, 100% 0, 100% 75%, 0% 100%);
        }

        .clip-diagonals {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 75%);
        }

        .clip-tummy {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 90% 100%, 0 100%);
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins-Regular.ttf') format('truetype');
            font-weight: normal;
        }

        @font-face {
            font-family: 'Coolvetica';
            src: url('/fonts/coolvetica-rg.ttf') format('truetype');
            font-weight: normal;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
        }

        .coolvetica {
            font-family: 'Coolvetica', sans-serif;
        }
    </style>

</head>

<body class="bg-[#fff9f2] font-sans">

    <x-navbar></x-navbar>
    {{ $slot }}


</body>

</html>
