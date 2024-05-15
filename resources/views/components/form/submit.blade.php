@props(['layout' => 'default'])

@if($layout == 'default')
    <button {{ $attributes->merge(['class' => 'rounded-md bg-sky-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600', 'type' => 'submit']) }}
    >{{ $slot }}</button>
@else
    <button {{ $attributes->merge(['class' => '', 'type' => 'submit', 'style' => 'display:inherit;']) }}
    >{{ $slot }}</button>
@endif
