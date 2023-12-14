@foreach ($project as $projects)
    <div id="tabContent" class="container mb-3">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <p class="location-details">
                    {{ $projects->location }}
                </p>

                <p class="value-text">
                    <span>Project Value</span> : {{ $projects->project_value }}
                </p>
            </div>
        </div>
    </div>
@endforeach
