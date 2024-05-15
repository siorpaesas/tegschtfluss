<x-layout>
    <x-slot:heading>
        {{ $book->name }} - Statistik
    </x-slot:heading>
    <div class="mt-6">
        <p>
            Es Tool zum chli en Übersicht z bercho, was aues so geit i dim Buech.
        </p>
    </div>
    <div class="mt-6 grid grid-cols-2 gap-6">
        <div class="border rounded-xl p-4">
            <h3 class="text-xl">Hie chöme so gwüssi Date zur Statistik</h3>
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
            <h3 class="text-xl">Di neuschte Arbeite</h3>
            <div class="border border-slate-300 bg-blue-200 drop-shadow-md rounded-xl mt-6">
                <p class="p-2 text-slate-600 italic">Lorem Ipsum sowieso tschüss hallo bergell und Comersee. Ufem Splüge liegt no immer chli Cadmium-Schnee. Fasch wie uf der Venus aber dert bi chli höchere Temperature.</p>
            </div>
            <h3 class="mt-8 text-xl">Grad fertig worde..</h3>
            <div class="border border-slate-300 bg-sky-200 drop-shadow-md rounded-xl mt-6">
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
