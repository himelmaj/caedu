@props(['url', 'label'])

@php
$quotes = [
[
'text' => 'I am enough of the artist to draw freely upon my imagination. Imagination is more important than knowledge.
Knowledge is limited. Imagination encircles the world.',
'author' => 'Albert Einstein'
],
[
'text' => 'Education is the most powerful weapon which you can use to change the world.',
'author' => 'Nelson Mandela'
],
[
'text' => 'Live as if you were to die tomorrow. Learn as if you were to live forever.',
'author' => 'Mahatma Gandhi'
],
[
'text' => 'Somewhere, something incredible is waiting to be known.',
'author' => 'Carl Sagan'
],
[
'text' => 'One child, one teacher, one book, and one pen can change the world.',
'author' => 'Malala Yousafzai'
]
];

$randomQuote = $quotes[array_rand($quotes)];
@endphp

<div class="bg-black flex-col items-center justify-center md:grid lg:max-w-none lg:grid-cols-2 lg:px-0">
    <a href="{{ $url }}" wire:navigate
        class="text-white  inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 absolute right-4 top-4 md:right-8 md:top-8">
        {{ $label }}
    </a>
    <div class="relative hidden h-full flex-col bg-muted p-10 text-white lg:flex dark:border-r border-zinc-800">
        <div class="absolute inset-0 bg-zinc-900"></div>
        <div class="relative z-20 flex items-center text-lg font-medium">
            <x-application-logo class="w-8 h-8 mr-2" />

            <h2 class="text-4xl font-bold">
                {{ config('app.name') }}
            </h2>
        </div>
        <div class="relative z-20 mt-auto">
            <blockquote class="space-y-2">
                <p class="text-lg">"{{ $randomQuote['text'] }}"</p>
                <footer class="text-sm text-zinc-400">{{ $randomQuote['author'] }}</footer>
            </blockquote>
        </div>
    </div>

    {{ $slot }}
</div>