<li class="nav-item me-5">
    @php
        $projectLink = url('/actuals/' . $project->slug);
        $isActive = request()->is('actuals/' . $project->slug);
    @endphp

    @if ($isActive)
        <span class="nav-link tabs-active">Actual</span>
    @else
        <a class="nav-link nav-tabs" data-toggle="tab" href="{{ $projectLink }}">Actual</a>
    @endif
</li>
