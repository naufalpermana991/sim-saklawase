<li class="nav-item me-5">
    <a class="{{ request()->is('projects/' . $project->id) ? 'nav-link tabs-active' : 'nav-link nav-tabs' }}"
        data-toggle="tab" href={{ url('/projects/' . $project->id) }}>Project
        Information</a>
</li>
