<x-layout>
    <x-slot:heading>
        Nöis Todo
    </x-slot:heading>
    <div class="mt-2">
        <div class="">
            <p>E neui Notiz bzw. es nöis ToDo für z Kapitu <strong>{{ $chapter->name }}</strong> im Buech <strong>{{ $chapter->book->name }}</strong> erfasse.</p>
        </div>

        <form action="/chapters/{{$chapter->id}}/note/create" method="post">
            @csrf
            <div class="flex flex-row space-x-4">
                <div class="mt-3 w-2/6">
                    <x-form.textarea name="todo" id="todo" required rows="3" placeholder="Was mues de genau no gmacht wärde?">{{ old('todo') }}</x-form.textarea>
                    <x-form.error name="todo" />
                </div>
                <div class="mt-3 basis-1/6">
                    <div class="w-full mb-1">
                        <input type="radio" name="prio" id="prio" value="low" />
                        <label for="töiff" style="color: #155724;">Töiff</label>
                    </div>
                    <div class="w-full my-1">
                        <input type="radio" name="prio" id="prio" value="medium" />
                        <label for="mittu" style="color: #856404;">Mittu</label>
                    </div>
                    <div class="w-full mt-1">
                        <input type="radio" name="prio" id="prio" value="high" />
                        <label for="höch" style="color:#842029;">Höch</label>
                    </div>
                    <x-form.error name="prio"></x-form.error>
                </div>
            </div>
            <div class="mt-3">
                <x-form.submit>Notiere</x-form.submit>
            </div>
        </form>
    </div>

</x-layout>
