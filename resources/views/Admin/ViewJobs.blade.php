<x-header-component/>
<div class="row">
<div class="col-1"></div>
<div class="col-10 mt-5">
    <form action="/admin/getJobsByCity" method="post">
        @csrf
        <label for="comp_name" class="form-label">Select City</label>
        <select name="city_id" class="form-control" >
            @foreach($data['cities'] as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Search" class="btn btn-info">
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Company Name</th>
            <th scope="col">Post</th>
            <th scope="col">Places</th>
            <th scope="col">Mobile no</th>
            <th scope="col">Require Skills</th>
            <th scope="col">Require Experince</th>
            <th scope="col">Require Qualification</th>
            <th scope="col">Salary</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>


        @foreach($data['jobs'] as $jobs)

        <tr>
            <td scope="row">{{$jobs->id}}</td>
            <td>{{$jobs->comp_name}}</td>
            <td>{{$jobs->post}}</td>
            <td>{{$jobs->place}}</td>
            <td>{{$jobs->mobile_no}}</td>
            <td>{{$jobs->req_skills}}</td>
            <td>{{$jobs->req_experience}}</td>
            <td>{{$jobs->req_qualification}}</td>
            <td>{{$jobs->salary}}</td>
            <td><a href="/admin/editjob/{{$jobs->id}}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;
                &nbsp;
                <a href="/admin/deljob/{{$jobs->id}}"><i class="fas fa-trash-alt"></i></a></td>

        </tr>
        @endforeach

        </tbody>
    </table>
</div>
</div>
