<x-layout>
    <x-slot:heading>
        Kapitu
    </x-slot:heading>
    <p>Hie chame sech en Übersicht zu de Kapitu im Buech <strong>{{ $chapters[0]->book->name }}</strong> schaffe.</p>
    <p>Es het im Moment <span class="italic font-bold">{{ $chapters->total() }}</span> Kapitu.</p>
    <div class="mt-8">
        <x-button :action="'/chapters/create'">+ Nöis Kapitu</x-button>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-8">
        @foreach($chapters as $chapter)
            <div class="rounded-xl p-4 bg-blue-100 drop-shadow-md">
                <a href="chapters/{{ $chapter->id }}">
                    <h2 class="text-xl font-bold">{{ $chapter->name }}</h2>
                    <p class="mt-2 italic" style="font-family: coda, Helvetica, sans-serif">{{ $chapter->excerpt }}</p>
                    <p class="mt-4">{{ $chapter->book->name }}</p>
                </a>
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        {{ $chapters->links() }}
    </div>
    <div class="mt-8">
        <x-button :action="'/chapters/create'">+ Nöis Kapitu</x-button>
    </div>
</x-layout>
