@props(['name'])

@error($name)
    <p class="text-xs text-red-400 font-semibold">{{ $message }}</p>
@enderror
