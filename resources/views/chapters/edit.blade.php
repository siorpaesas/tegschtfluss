<x-layout>
    <x-slot:heading>
        Kapitu <span class="italic">{{ $chapter->name }}</span> bearbeite
    </x-slot:heading>

    <form action="/chapters/{{ $chapter->id }}" method="post">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="chapter" class="block text-sm font-medium leading-6 text-gray-900">Kapitu</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="chapter"
                                       id="chapter"
                                       class="block flex-1 border-0 bg-transparent py-1 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                       placeholder="Ds Totemügerli"
                                       value="{{ old('chapter') ? old('chapter') : $chapter->name }}"
                                       required>
                            </div>
                            @error('chapter')
                            <p class="text-xs text-red-400 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="excerpt" class="block text-sm font-medium leading-6 text-gray-900">Uszug vom
                            Kapitu</label>
                        <div class="mt-2">
                            <textarea
                                id="excerpt"
                                name="excerpt"
                                rows="3"
                                class="block w-full rounded-md border-0 py-1 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                required>{{ old('excerpt') ? old('excerpt') : $chapter->excerpt }}</textarea>
                        </div>
                        @error('excerpt')
                        <p class="text-xs text-red-400 font-semibold">{{ $message }}</p>
                        @enderror
                        <p class="mt-3 text-sm leading-6 text-gray-600">Da chasch e Uszug dritue vom neue Kapitu.</p>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="sequence"
                               class="block text-sm font-medium leading-6 text-gray-900">Kapitunummere</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text"
                                       name="sequence"
                                       id="sequence"
                                       class="block flex-1 border-0 bg-transparent py-1 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                       placeholder="Z wieviute Kapitu i dim Buech isch es?"
                                       value="{{ old('sequence') ? old('sequence') : $chapter->sequence }}"
                                >
                            </div>
                            @error('sequence')
                            <p class="text-xs text-red-400 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex items-center justify-between gap-x-6">
                    <div class="flex items-center gap-x-6">
                        <button type="submit"
                                class="rounded-md bg-sky-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Öpdeite
                        </button>
                        <button type="button"
                                class="text-sm font-semibold leading-6 text-gray-900"
                                onclick="location.href='/chapters/{{ $chapter->id }}'"
                        >Abbräche
                        </button>

                    </div>
                    <div class="flex items-center">
                        <button type="submit"
                                form="delete-form"
                                class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                            Kapitu Lösche
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="/chapters/{{ $chapter->id }}" id="delete-form" method="post" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
