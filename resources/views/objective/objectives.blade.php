@foreach($projects as $projectItem)
    <option value="{{ $projectItem->id ?? '' }}"
    @isset ($objective->id)

        @if ($objective->projects->contains('id', $projectItem->id))
                selected=""
            @endif

    @endisset
    >
        {{ $delimiter ?? '' }}{{ $projectItem->title ?? ''}}
    </option>

    @isset($projectItem->children)
        @include('objective.objectives', [
            'projects' => $projectItem->children,
            'delimiter' => ' - ' . $delimiter
        ])
    @endisset
@endforeach
