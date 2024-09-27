<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $user->name }}</title>

    @vite("resources/css/app.css")
</head>
<body class="font-sans bg-gray-50">
    <div class="selection:bg-[#FF2D20] selection:text-white">
        <div class="container mx-auto p-6">
            <div class="flex flex-wrap">
                <div class="my-3 w-full pt-3 shadow-lg rounded-lg bg-white">
                    <!-- Informacion de los usuarios -->
                    <img
                        src="{{ $user->image->url }}"
                        alt="{{ $user->name }}"
                        class="w-full h-64 object-cover rounded-t-lg"
                    />
                    <div class="p-6">
                        <h1 class="mt-4 text-4xl font-bold text-gray-800">{{ $user->name }}</h1>
                        <h3 class="mt-2 text-xl text-gray-600">{{ $user->email }}</h3>
                        <p class="mt-4 text-gray-700">
                            <strong>Instagram:</strong> <a href="https://instagram.com/{{ $user->profile->instagram }}" class="text-blue-500 hover:underline">{{ $user->profile->instagram }}</a>
                            <br />
                            <strong>Github:</strong> <a href="https://github.com/{{ $user->profile->github }}" class="text-blue-500 hover:underline">{{ $user->profile->github }}</a>
                            <br />
                            <strong>Web:</strong> <a href="{{ $user->profile->web }}" class="text-blue-500 hover:underline">{{ $user->profile->web }}</a>
                        </p>
                        <p class="mt-4 text-gray-700">
                            <strong>País:</strong> {{ $user->location->country }}
                            <br />
                            <strong>Nivel:</strong>
                            @if ($user->level)
                                <a href="{{ route('level', $user->level->id) }}" class="transform text-emerald-600 transition duration-200 hover:-translate-y-1 hover:underline">
                                    {{ $user->level->name }}
                                </a>
                            @else
                                <span class="text-gray-500">---</span>
                            @endif
                        </p>
                        <hr class="my-4 border-gray-300" />
                        <p class="text-gray-700">
                            <strong>Grupos:</strong>
                            @forelse ($user->groups as $group)
                                <span class="inline-flex items-center rounded-full bg-blue-600 px-2 py-0.5 text-sm font-medium text-white mr-2">
                                    {{ $group->name }}
                                </span>
                            @empty
                                <em class="text-gray-500">No pertenece a ningún grupo.</em>
                            @endforelse
                        </p>
                        <hr class="my-4 border-gray-300" />
                        <h3 class="mb-4 text-2xl font-bold text-gray-800">Posts</h3>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            @foreach ($posts as $post)
                                <div class="mb-1 flex flex-col overflow-hidden rounded bg-white text-lg font-bold shadow-lg md:flex-row">
                                    <div class="md:w-1/3">
                                        <img
                                            class="h-auto w-full object-cover md:h-full"
                                            src="https://media.vogue.mx/photos/64e15be96e16315ea8208e2c/3:4/w_2560%2Cc_limit/taylor-swift-cantante.jpg"
                                            alt="{{ $post->name }}"
                                        />
                                    </div>
                                    <div class="p-4 md:w-2/3">
                                        <div class="rounded p-4">
                                            <h5 class="mb-2 text-xl font-bold text-gray-800">{{ $post->name }}</h5>
                                            <h6 class="text-lg text-gray-500">
                                                {{ $post->category->name }} | {{ $post->comments_count }} {{ Str::plural('comentario', $post->comments_count) }}
                                            </h6>
                                            <p class="text-sm text-gray-600">
                                                @foreach ($post->tags as $tag)
                                                    <span class="mb-2 mr-2 inline-flex items-center rounded-full bg-gray-200 px-2 py-0.5 text-sm font-medium text-gray-800">
                                                        #{{ $tag->name }}
                                                    </span>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <h3 class="mb-4 text-2xl font-bold text-gray-800">Videos</h3>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            @foreach ($videos as $video)
                                <div class="mb-1 flex flex-col overflow-hidden rounded bg-white text-lg font-bold shadow-lg md:flex-row">
                                    <div class="md:w-1/3">
                                        <img
                                            class="h-auto w-full object-cover md:h-full"
                                            src="{{ $video->image->url }}"
                                            alt="{{ $video->name }}"
                                        />
                                    </div>
                                    <div class="p-4 md:w-2/3">
                                        <div class="rounded p-4">
                                            <h5 class="mb-2 text-xl font-bold text-gray-800">{{ $video->name }}</h5>
                                            <h6 class="text-lg text-gray-500">
                                                {{ $video->category->name }} | {{ $video->comments_count }} {{ Str::plural('comentario', $video->comments_count) }}
                                            </h6>
                                            <p class="text-sm text-gray-600">
                                                @foreach ($video->tags as $tag)
                                                    <span class="mb-2 mr-2 inline-flex items-center rounded-full bg-gray-200 px-2 py-0.5 text-sm font-medium text-gray-800">
                                                        #{{ $tag->name }}
                                                    </span>
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>