@props([
    'note' => []
])

@php
    switch($note->prio) {
        case 'low':
            $bgColor = '#d1e7dd';
            $color = '#155724';
            break;
        case 'medium':
        default:
            $bgColor = '#fff3cd';
            $color = '#856404';
            break;
        case 'high':
            $bgColor = '#f8d7da';
            $color = '#842029';
            break;
    }

    $rand = mt_rand(56, 736234);
@endphp

<div class="border rounded m-2 p-2" style="background-color: {{ $bgColor }}">
    <div class="grid grid-cols-5 gap-4">
        <div class="ml-2 border-l-4 pl-4 col-span-4" style="border-color: {{ $color }}; color: {{ $color }}">
            {{ $note->todo }}
        </div>
        <div class="col-span-1 flex place-items-end justify-end space-x-2">
            <div class="hover:opacity-40">
                <a href="/notes/{{ $note->id }}/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                    </svg>
                </a>
            </div>
            <div class="hover:opacity-40">
                <a href="/notes/{{ $note->id }}/done">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                </a>
            </div>
            <div class="hover:opacity-40">
                <x-form.submit form="delete-note_{{ $rand }}" layout="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                    </svg>
                </x-form.submit>
            </div>
        </div>
    </div>
</div>

<form method="post" action="/notes/{{ $note->id }}/delete" id="delete-note_{{ $rand }}" class="hidden">
    @csrf
    @method('DELETE')
</form>
