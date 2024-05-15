<x-layout>
    <x-slot:heading>
        Kapitu: {{ $chapter->name }}
    </x-slot:heading>
    <div>
        <h2 class="text-2xl font-bold mb-4">Generelli Date zum Kapitu</h2>
        <p class="text-sm">Nummere vom Kapitu: {{ $chapter->sequence }}</p>
        @empty($lastBuild)
            <p class="text-sm mt-2">No kes Update zum Kapitu. -> <a class="hover:underline" href="/chapter/{{ $chapter->id }}/stats">Itz grad ändere</a></p>
        @else
            <p class="text-sm">Aazau Wörter bis itz: {{ $lastBuild->words }}</p>
        <p class="text-sm">Wielang me zirka het zum Läse vom Kapitu: {{ $lastBuild->length }} Minute</p>
        <p class="text-sm mt-2">Z letschte Statistik-Update het stattgfunde am <span class="font-bold italic">{{ $lastBuild->created_at->locale('de_DE')->isoFormat('LL') }}</span>
            -> <a class="hover:underline" href="/chapter/{{ $chapter->id }}/stats">Update</a></p>
        @endempty
        <p class="text-sm mt-4"><a href="/chapters/{{ $chapter->id }}/detail">Detaijierti Stats aaluege</a></p>
    </div>
    <div class="mt-6">
        <h2 class="text-2xl font-bold mb-4">Was no z mache isch</h2>
        @if($notes->count() > 0)
            <div class="space-y-4 mb-6 text-xl">
                @foreach($notes as $note)
                    @if($note->status == 0)
                        <x-note :note="$note"/>
                    @endif
                @endforeach
            </div>
        @endif
        <div class="mt-6">
            <x-button :action="'/chapters/'.$chapter->id.'/note/create'">+ Neue Punkt</x-button>
        </div>
    </div>

    <div class="mt-6">
        <h2 class="text-2xl font-bold mb-4">Uszug vom Kapitu</h2>
        <div class="mt-2" style="font-family: coda, Helvetica, sans-serif;">
            {{ $chapter->excerpt }}
        </div>
    </div>

    <div class="mt-6">
        <h2 class="text-2xl font-bold mb-6">Wörklog vom Kapitu</h2>
        <div class="mt-4 border border-sky-200 rounded-lg flex flex-wrap bg-sky-100 p-4 drop-shadow-sm">
            <div class="w-1/6">
                <span class="italic">Datum</span>
            </div>
            <div class="w-5/6">
                <p>Me sött de no chli Risott al Sambügh mit Merlott mangiare. Ussertdäm fäut no der al Böcc mit sine
                    Raviöö. Im Mendrisiòtt mache si Gelati mit superfeine Zuetate. Voraumen z Riva San Vitale sisi
                    super.<br><br>E chli Minestrone mit Porcini fäut ono. Ussertdäm isch d'Rena no nid so guet
                    informiert, wie si sött si.</p>
            </div>
        </div>
        <div class="mt-4 border border-sky-200 rounded-lg flex flex-wrap bg-sky-100 p-4 drop-shadow-sm">
            <div class="w-1/6">
                <span class="italic">Datum</span>
            </div>
            <div class="w-5/6">
                <p>Me sött de no chli Risott al Sambügh mit Merlott mangiare. Ussertdäm fäut no der al Böcc mit sine
                    Raviöö. Im Mendrisiòtt mache si Gelati mit superfeine Zuetate. Voraumen z Riva San Vitale sisi
                    super.<br><br>E chli Minestrone mit Porcini fäut ono. Ussertdäm isch d'Rena no nid so guet
                    informiert, wie si sött si.</p>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <x-button :action="'/chapters/'.$chapter->id.'/edit'">Kapitu bearbeite</x-button>
    </div>

    <div class="mt-16">
        <p>
            <a class="text-sm font-semibold leading-6 text-gray-900 hover:underline" href="/chapters">Zrügg</a>
        </p>
    </div>
</x-layout>
