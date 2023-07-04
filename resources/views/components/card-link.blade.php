@props(['imagen', 'titulo', 'link'])
<a href="{{$link}}">
    <div class="max-w-sm p-6 bg-white border border-green-200 rounded shadow">
        <img src="{{ asset($imagen)}}" alt="">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$titulo}}</h5>
    </div>
</a>
