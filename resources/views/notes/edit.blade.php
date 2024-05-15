<x-layout>
    <x-slot:heading>
        Todo Bearbeite
    </x-slot:heading>
    <div class="mt-2">

        <form action="/notes/{{$note->id}}/edit" method="post">
            @csrf
            @method('PATCH')
            <div class="flex flex-row space-x-4">
                <div class="mt-3 w-2/6">
                    <x-form.textarea name="todo" id="todo" required rows="3" placeholder="Was mues de genau no gmacht wärde?">{{ $note->todo ? $note->todo : old('todo') }}</x-form.textarea>
                    <x-form.error name="todo" />
                </div>
                <div class="mt-3 basis-1/6">
                    <div class="w-full mb-1">
                        <input type="radio" name="prio" id="prio" value="low" {{ $note->prio == 'low' ? 'checked' : '' }} />
                        <label for="töiff" style="color: #155724;">Töiff</label>
                    </div>
                    <div class="w-full my-1">
                        <input type="radio" name="prio" id="prio" value="medium" {{ $note->prio == 'medium' ? 'checked' : '' }} />
                        <label for="mittu" style="color: #856404;">Mittu</label>
                    </div>
                    <div class="w-full mt-1">
                        <input type="radio" name="prio" id="prio" value="high" {{ $note->prio == 'high' ? 'checked' : ''}} />
                        <label for="höch" style="color:#842029;">Höch</label>
                    </div>
                    <x-form.error name="prio"></x-form.error>
                </div>
            </div>
            <div class="mt-3">
                <x-form.submit>Ändere</x-form.submit>
            </div>
        </form>
    </div>

</x-layout>
