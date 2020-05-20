
@foreach($projects as $projectItem)
    <option value="{{ $projectItem->id ?? '' }}"
    @isset ($project->id)

        @if ($project->parent_id == $projectItem->id)
            selected=""
        @endif

            @if ($project->id == $projectItem->id)
            disabled=""
        @endif
    @endisset
    >
        {{ $delimiter ?? '' }}{{ $projectItem->title ?? ''}}
    </option>

    @isset($projectItem->children)
        @include('project.projects', [
            'projects' => $projectItem->children,
            'delimiter' => ' - ' . $delimiter
        ])
    @endisset
@endforeach
