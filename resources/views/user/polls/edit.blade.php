<x-layout>
    <x-polls-layout title="Edit">
        <form
            id="main-form"
            action="{{ route('polls.update', $poll) }}"
            method="post"
        >
            @csrf
            @method('PUT')
            <div id="form-body"></div>
            <button type="button" onclick="location.href = '{{ route('polls.show', $poll) }}'">Cancel</button>
            <button type="button" id='add-translation'>Add Translation</button>
            <button type="submit">Update Poll</button>
        </form>
        @include('user.polls._add-translation-script')
    </x-polls-layout>
</x-layout>
