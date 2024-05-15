<x-layout>
    <x-slot:heading>
        Statistik-Update ersteue
    </x-slot:heading>
    <p>Kapitu: <strong>{{ $chapter->name }}</strong></p>
    <form action="/chapter/{{$chapter->id}}/stats" method="post">
        @csrf
        <div class="space-y-12">
            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form.field>
                    <x-form.label for="words">Aazau Wörter im Kapitu</x-form.label>
                    <x-form.input type="text" name="words" id="words" placeholder="2222" required/>
                    <x-form.error name="words"/>
                </x-form.field>
                <x-form.field>
                    <x-form.label for="length">Aazau Minute wos brucht zum z Kapitu düreläse</x-form.label>
                    <x-form.input type="text" name="length" id="length" placeholder="9" required/>
                    <x-form.error name="length"/>
                </x-form.field>
                <x-form.field>
                    <x-form.label for="commit">Was isch gmacht worde? (Commit-Mäudig)</x-form.label>
                    <x-form.input type="text" name="commit" id="commit" placeholder="Der Durscht uf Ärde besiegt" required/>
                    <x-form.error name="commit"/>
                </x-form.field>
            </div>
            <div class="mt-12 flex items-center gap-x-6">
                <x-form.submit>Neui Stats spichere</x-form.submit>
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900"
                        onclick="location.href='/chapters/{{$chapter->id}}'">Abbräche
                </button>
            </div>
        </div>
    </form>
</x-layout>
