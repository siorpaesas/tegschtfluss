<x-layout>
    <x-slot:heading>
        Im App Regischtriere
    </x-slot:heading>

    <form action="/register" method="post">
        @csrf
        <div class="space-y-12">
            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form.field>
                    <x-form.label for="name">Name (Vor- u Nachname, oder eifach wie nech wou isch)</x-form.label>
                    <x-form.input type="text" name="name" id="name" placeholder="Andreas Neukomm" required/>
                    <x-form.error name="name"/>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="email">E-Mail Adrässe</x-form.label>
                    <x-form.input type="email" name="email" id="email" placeholder="jans@der-rick.ch" required/>
                    <x-form.error name="email"/>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="password">Passwort</x-form.label>
                    <x-form.input type="password" name="password" id="password" required/>
                    <x-form.error name="password"/>
                </x-form.field>

                <x-form.field>
                    <x-form.label for="password_confirmation">Passwort Widerhole</x-form.label>
                    <x-form.input type="password" name="password_confirmation" id="password_confirmation" required/>
                    <x-form.error name="password_confirmation"/>
                </x-form.field>
            </div>

            <div class="mt-12 flex items-center gap-x-6">
                <x-form.submit>Regischtiere</x-form.submit>
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900"
                        onclick="location.href='/'">Abbräche
                </button>
            </div>
        </div>
    </form>

</x-layout>
