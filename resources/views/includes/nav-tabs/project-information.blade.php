<li class="nav-item me-5">
    @php
        $projectLink = url('/projects/' . $project->slug);
        $isActive = request()->is('projects/' . $project->slug);
    @endphp

    @if ($isActive)
        <span class="nav-link tabs-active">Project Information</span>
    @else
        <a class="nav-link nav-tabs" data-toggle="tab" href="{{ $projectLink }}">Project Information</a>
    @endif
</li>
