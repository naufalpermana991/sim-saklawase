<li class="nav-item me-5">
    @php
        $projectLink = url('/cost/' . $project->slug);
        $isActive = request()->is('cost/' . $project->slug);
    @endphp

    @if ($isActive)
        <span class="nav-link tabs-active">Cost</span>
    @else
        <a class="nav-link nav-tabs" data-toggle="tab" href="{{ $projectLink }}">Cost</a>
    @endif
</li>
