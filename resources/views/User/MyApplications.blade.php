<x-user_header_component/>
<div class="row">
    <div class="col-4"></div>
    <div class="col-8">
        @foreach($data as $job)
            <div class="card mt-5" style="width:18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$job->post}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Company Name: {{$job->comp_name}}</h6>
                    <p class="card-text">Vacancies : {{$job->place}}</p>
                    <p class="card-text">Salary : &#8377; {{$job->salary}}</p>
                    <a href="/user/viewdetail/{{$job->id}}" class="card-link btn btn-primary">Apply</a>

                </div>
            </div>
        @endforeach
    </div>
</div>
