@props(['value' => 'value'])

<div class="border border-slate-300 bg-blue-100 drop-shadow-md rounded-xl">
    <p class="mt-4 text-center text-slate-600">{{ $slot }}</p>
    <p class="my-4 text-6xl text-center text-slate-700">{{ $value }}</p>
</div>
