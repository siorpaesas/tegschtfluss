@props(['action'])

<button class="hover:bg-sky-800 text-white bg-sky-600 block rounded-md px-3 py-2 text-base font-medium"
        aria-current="false" onclick="location.href='{{ $action }}'"
>{{ $slot }}</button>
