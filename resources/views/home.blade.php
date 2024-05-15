<x-layout>
    <x-slot:heading>
        {{ $book->name }} - Statistiktool
    </x-slot:heading>
    <div class="mt-6">
        <p>
            Es Tool zum chli en Übersicht z bercho, was aues so geit im Buech {{ $book->name }}.
        </p>
    </div>
    <div class="mt-6 grid grid-cols-2 gap-6">
        <div class="border rounded-xl p-4">
            <p>Hie chöme so gwüssi Date zur Statistik</p>
            <div class="grid grid-cols-2 gap-6 pt-6">
                <x-shield :value="'1'">Büecher</x-shield>
                <x-shield :value="'29'">Kapitu</x-shield>
                <x-shield :value="'91\'578'">Wörter</x-shield>
                <x-shield :value="'18'">Todos</x-shield>
                <x-shield :value="'30'">Gmachti Updates</x-shield>
                <x-shield :value="'14. Mai'">Letschts Update</x-shield>
            </div>
        </div>
        <div class="border rounded-xl p-4">
            <p>Di letschte paar Updates</p>
            <div class="border border-slate-300 bg-blue-100 drop-shadow-md rounded-xl mt-6">
                <p class="mt-2 p-2 text-xl text-slate-600">Letschte Iitrag im Wörklog</p>
                <p class="p-2 text-slate-600 italic">Lorem Ipsum sowieso tschüss hallo bergell und Comersee. Ufem Splüge liegt no immer chli Cadmium-Schnee. Fasch wie uf der Venus aber dert bi chli höchere Temperature.</p>
            </div>
        </div>
    </div>

    <p class="mt-16">
        <strong>{{ $book->name }}</strong>
        isch im Jahr
        <strong>{{ $book->year }}</strong>
        gschribe worde vom
        <strong>{{ $book->author }}</strong>.
    </p>
</x-layout>
