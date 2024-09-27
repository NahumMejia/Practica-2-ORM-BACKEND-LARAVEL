<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Usuarios de {{ $level->name }}</title>

        @vite("resources/css/app.css")
    </head>
    <body class="font-sans">
        <div class="selection:bg-[#FF2D20] selection:text-white">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="mb-8 w-full">
                        <h1
                            class="mb-4 rounded-lg py-4 text-center text-4xl font-bold shadow-lg"
                        >
                            Contenido de usuario nivel {{ $level->name }}
                        </h1>
                        <hr class="mb-6 border-gray-300" />
                    </div>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        @foreach ($posts as $post)
                            <div
                                class="mb-4 flex flex-col overflow-hidden rounded bg-white text-lg font-bold shadow-md md:flex-row"
                            >
                                <div class="md:w-1/3">
                                    <img
                                        class="h-auto w-full object-cover md:h-full"
                                        src="https://media.vogue.mx/photos/64e15be96e16315ea8208e2c/3:4/w_2560%2Cc_limit/taylor-swift-cantante.jpg"
                                        alt="{{ $post->name }}"
                                    />
                                </div>
                                <div class="p-4 md:w-2/3">
                                    <h5
                                        class="mb-2 text-xl font-bold text-gray-800"
                                    >
                                        {{ $post->name }}
                                    </h5>
                                    <h6 class="text-lg text-gray-500">
                                        {{ $post->category->name }} |
                                        {{ $post->comments_count }}
                                        {{ Str::plural("comentario", $post->comments_count) }}
                                    </h6>
                                    <p class="mt-2 text-sm text-gray-600">
                                        @foreach ($post->tags as $tag)
                                            <span
                                                class="mb-2 mr-2 inline-flex items-center rounded-full bg-gray-200 px-2 py-0.5 text-sm font-medium text-gray-800"
                                            >
                                                #{{ $tag->name }}
                                            </span>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Videos Section -->
                    <div class="mb-8 w-full">
                        <h1
                            class="mb-4 rounded-lg py-4 text-center text-4xl font-bold shadow-lg"
                        >
                            Contenido en video de usuarios nivel
                            {{ $level->name }}
                        </h1>
                        <hr class="mb-6 border-gray-300" />
                    </div>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        @foreach ($videos as $video)
                            <div
                                class="mb-4 flex flex-col overflow-hidden rounded bg-white text-lg font-bold shadow-md md:flex-row"
                            >
                                <div class="md:w-1/3">
                                    <img
                                        class="h-auto w-full object-cover md:h-full"
                                        src="{{ $video->image->url }}"
                                        alt="{{ $video->name }}"
                                    />
                                </div>
                                <div class="p-4 md:w-2/3">
                                    <h5
                                        class="mb-2 text-xl font-bold text-gray-800"
                                    >
                                        {{ $video->name }}
                                    </h5>
                                    <h6 class="text-lg text-gray-500">
                                        {{ $video->category->name }} |
                                        {{ $video->comments_count }}
                                        {{ Str::plural("comentario", $video->comments_count) }}
                                    </h6>
                                    <p class="mt-2 text-sm text-gray-600">
                                        @foreach ($video->tags as $tag)
                                            <span
                                                class="mb-2 mr-2 inline-flex items-center rounded-full bg-gray-200 px-2 py-0.5 text-sm font-medium text-gray-800"
                                            >
                                                #{{ $tag->name }}
                                            </span>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
