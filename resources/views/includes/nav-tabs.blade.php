<!--nav&tabs-->
<div class="container-nav mt-4">
    <ul class="nav">
        @include('includes.nav-tabs.project-information')
        @include('includes.nav-tabs.planning')
        @include('includes.nav-tabs.mop')
        @include('includes.nav-tabs.actual')
        @include('includes.nav-tabs.cost')


        {{-- <li class="nav-item me-5">
            <a class="{{ request()->is('man_of_power/' . $navTabs->id) ? 'nav-link tabs-active' : 'nav-link nav-tabs' }}"
                data-toggle="tab" href="{{ url('/man_of_power/' . $navTabs->id) }}">Man of Power</a>
        </li>
        <li class="nav-item me-5">
            <a class="{{ request()->is('actual/' . $navTabs->id) ? 'nav-link tabs-active' : 'nav-link nav-tabs' }}"
                data-toggle="tab" href="{{ url('/actual/' . $navTabs->id) }}">Actual</a>
        </li>
        <li class="nav-item me-5">
            <a class="{{ request()->is('cost/' . $navTabs->id) ? 'nav-link tabs-active' : 'nav-link nav-tabs' }}"
                data-toggle="tab" href="{{ url('/cost/' . $navTabs->id) }}">Cost</a>
        </li> --}}
    </ul>
</div>
<!--end-nav&tabs-->
