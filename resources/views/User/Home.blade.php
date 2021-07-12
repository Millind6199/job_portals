<x-user_header_component/>
<div class="row">
    <div class="col-1"></div>

    <div class="col-11 mt-5">
        <form action="/user/getJobsByCity" method="post">
            @csrf
            <label for="comp_name" class="form-label">Select City</label>
            <select name="city_id" class="form-control" >
                @foreach($data['cities'] as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Search" class="btn btn-info">
        </form>

            @foreach($data['jobs'] as $job)
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
