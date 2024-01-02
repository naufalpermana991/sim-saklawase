<li class="nav-item me-5">
    @php
        $projectLink = url('/planning/' . $project->slug);
        $isActive = request()->is('planning/' . $project->slug);
    @endphp

    @if ($isActive)
        <span class="nav-link tabs-active">Planning</span>
    @else
        <a class="nav-link nav-tabs" data-toggle="tab" href="{{ $projectLink }}">Planning</a>
    @endif
</li>
