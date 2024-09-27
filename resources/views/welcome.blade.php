<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ORM BACKEND LARAVEL</title>
        @vite("resources/css/app.css")
    </head>
    <body class="font-sans">
        <div class="">
            <div
                class="relative flex min-h-screen flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
            >
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header
                        class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"
                    ></header>
                    <main class="mt-6">
                        <div class="mb-6 text-center text-8xl">
                            Eloquent: Relaciones
                        </div>
                        <div class="flex justify-center space-x-4 text-center">
                            @foreach ($users as $user)
                                <a
                                    href="{{ route("profile", $user->id) }}"
                                    class="transform transition duration-200 hover:-translate-y-1 hover:underline"
                                >
                                    {{ $user->name }}
                                </a>
                            @endforeach
                        </div>
                    </main>
                    <footer class="py-16 text-center text-sm text-black">
                        Todos los derechos reservados, Chinos Interprises.
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
