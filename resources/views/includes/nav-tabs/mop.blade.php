<li class="nav-item me-5">
    @php
        $projectLink = url('/mop/' . $project->slug);
        $isActive = request()->is('mop/' . $project->slug);
    @endphp

    @if ($isActive)
        <span class="nav-link tabs-active">Man of Power</span>
    @else
        <a class="nav-link nav-tabs" data-toggle="tab" href="{{ $projectLink }}">Man of Power</a>
    @endif
</li>
