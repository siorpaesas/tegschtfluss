<x-layout>
    <x-slot:heading>
        Iistellige
    </x-slot:heading>
    <div class="mt-3">
        <div>
            <p>Hie isch d'Übersicht vo dine Büecher, wode grad dranne bisch.</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-6">
            @foreach($books as $book)
                <div class="rounded rounded-xl border border-sky-900 bg-violet-100 p-6">
                    <p>{{ $book->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
