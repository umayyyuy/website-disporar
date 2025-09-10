<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4f6fb781-496d-4194-841e-27aa9986b626.png');
            background-size: cover;
            background-position: center;
        }

        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 10;
            min-width: 200px;
            padding: 0.5rem;
            margin: 0;
        }

        .nav-item:hover .submenu {
            display: block;
        }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- navbar -->
    @include("pembaca.bagian.navbar")

    <!-- halaman -->
    @yield('content')

    <!-- footer -->
    @include("pembaca.bagian.footer")

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        // Simple scroll animation
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.fade-in');
            sections.forEach(section => {
                const box = section.getBoundingClientRect();
                if (box.top < window.innerHeight - 100) {
                    section.style.opacity = '1';
                } else {
                    section.style.opacity = '0';
                }
            });
        });
    </script>
</body>

</html>