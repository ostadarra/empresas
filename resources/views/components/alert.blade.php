@props(['titulo'])
<article class="p-4 text-blue-700 bg-blue-100 border-t-8 border-blue-500 rounded" role="alert">
    <h1 class="font-bold">{{$titulo}}</h1>
    <p>{{ $slot }}</p>
</article>
