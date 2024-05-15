<x-layout>
    <x-slot:heading>
        Nöis Kapitu
    </x-slot:heading>

    <form action="/chapters" method="post">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <p class="mt-1 text-sm leading-6 text-gray-600">Hie chasch d'Date zum nöie Kapitu erfasse.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form.field>
                        <x-form.label for="chapter">Kapitu</x-form.label>
                        <x-form.input type="text" name="chapter" id="chapter" placeholder="Ds Totemügerli" :value="old('chapter')" required/>
                        <x-form.error name="chapter"/>
                    </x-form.field>

                    <x-form.field class="col-span-full">
                        <x-form.label for="excerpt">Uszug vom Kapitu</x-form.label>
                        <x-form.textarea name="excerpt" rows="3" id="excerpt"
                                         placeholder="Da chasch e Uszug dritue vom neue Kapitu.">{{ old('excerpt') }}</x-form.textarea>
                        <x-form.error name="excerpt"/>
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="sequence">Kapitu</x-form.label>
                        <x-form.input type="text" name="sequence" id="sequence" placeholder="42" :value="old('sequence')" required/>
                        <x-form.error name="sequence"/>
                    </x-form.field>
                </div>

                <div class="mt-12 flex items-center gap-x-6">
                    <x-form.submit>Spichere</x-form.submit>
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900"
                            onclick="location.href='/chapters'">Abbräche
                    </button>
                </div>
            </div>
        </div>
    </form>

</x-layout>
