<x-layout>
    <x-slot:heading>
        Im App Iilogge
    </x-slot:heading>

    <form action="/login" method="post">
        @csrf
        <div class="space-y-12">
            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-form.field>
                        <x-form.label for="email">E-Mail Adrässe</x-form.label>
                        <x-form.input type="email" name="email" id="email" :value="old('email')" required/>
                        <x-form.error name="email"/>
                    </x-form.field>
                </div>

                <div class="sm:col-span-4">
                    <x-form.field>
                        <x-form.label for="password">Passwort</x-form.label>
                        <x-form.input type="password" name="password" id="password" required/>
                        <x-form.error name="password"/>
                    </x-form.field>
                </div>
            </div>

            <div class="mt-12 flex items-center gap-x-6">
                <x-form.submit>Iilogge</x-form.submit>
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900"
                        onclick="location.href='/'">Abbräche
                </button>
            </div>
        </div>
    </form>

</x-layout>
