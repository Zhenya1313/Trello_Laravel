@foreach($users as $userItem)
    <option value="{{ $userItem->id ?? '' }}"
            @isset ($user->id)

            @if ($user->users->contains('id', $userItem->id))
            selected=""
        @endif

        @endisset
    >
        {{ $userItem->email ?? ''}}
    </option>


@endforeach
