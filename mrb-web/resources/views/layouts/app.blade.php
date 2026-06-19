<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Masjid Raya Baiturrahman Banda Aceh')</title>

    <meta name="description" content="@yield('meta_description', 'Portal Resmi Masjid Raya Baiturrahman Banda Aceh. Simbol keagungan Islam di Serambi Mekkah, sejarah spiritual, jadwal shalat, kajian, arsip khutbah, galeri, dan donasi online.')" />
    <meta name="keywords" content="masjid raya baiturrahman, baiturrahman banda aceh, masjid aceh, jadwal shalat banda aceh, khutbah jumat baiturrahman, donasi masjid, wisata religi aceh" />
    <meta name="author" content="Badan Pengelola Masjid Raya Baiturrahman" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet" />

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ivory text-charcoal overflow-x-hidden selection:bg-gold selection:text-emerald-dark">

    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>
