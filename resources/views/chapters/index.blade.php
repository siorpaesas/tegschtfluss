<x-layout>
    <x-slot:heading>
        Kapitu
    </x-slot:heading>
    <p class="text-xl">Hie chasch der Übersicht zu de Kapitu i dim Buech <strong>{{ $chapters[0]->book->name }}</strong>
        verschaffe.</p>
    <p class="mt-3">Dis Buech <span class="italic font-bold">{{ $chapters[0]->book->name }}</span> het im Moment <span
            class="italic font-bold">{{ $chapters->total() }}</span> Kapitu.</p>
    <div class="mt-8">
        <x-button :action="'/chapters/create'">+ Nöis Kapitu</x-button>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-8">
        @foreach($chapters as $chapter)
            <div class="rounded-xl p-4 bg-blue-100 drop-shadow-md">
                <a href="chapters/{{ $chapter->id }}">
                    <div class="flex flex-col h-auto">
                        <h3 class="text-lg font-bold">{{ $chapter->name }}</h3>
                        <p class="italic font-ingress">{{ $chapter->excerpt }}</p>
                        <p class="font-sans font-bold text-md">Nummere vom Kapitu: {{ $chapter->sequence }}</p>
                    </div>
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
