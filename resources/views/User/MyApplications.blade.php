<x-user_header_component/>
<div class="row">
    <div class="col-4"></div>
    <div class="col-8">
        @foreach($data as $job)
            <div class="card mt-5" style="width:18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$job->post}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Company Name: {{$job->comp_name}}</h6>
                    <p class="card-text">Applied Date:{{$job->created_at}}</p>
                    <a href="/user/removeapply/{{$job->id}}" class="card-link btn btn-primary">remove</a>
</div>
            </div>
        @endforeach
    </div>
</div>
