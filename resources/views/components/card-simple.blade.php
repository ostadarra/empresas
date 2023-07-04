@props(['titulo'])
<article href="#" class="block p-6 text-blue-700 bg-green-100 border border-blue-200 rounded-lg shadow max-w hover:bg-blue-100 ">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-900 ">{{$titulo}}</h5>
    <p class="font-normal text-blue-700 ">{{ $slot }}</p>
</article>
