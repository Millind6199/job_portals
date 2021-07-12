<x-header-component/>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4 mt-5">
        <form action="/admin/updatejob/{{$data['jobs']->id}}" method="POST" autocomplete="on">
            @csrf
            <div class="mb-3">
                <label for="comp_name" class="form-label">Select City</label>
                <select name="city_id" class="form-control" >
                    @foreach($data['city'] as $cities)
                        <option value="{{$cities->id}}">{{$cities->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="comp_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" name="comp_name" value="{{$data['jobs']->comp_name}}">
                <span>@error('comp_name'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="post" class="form-label">Post</label>
                <input type="text" class="form-control" name="post" value="{{$data['jobs']->post}}">
                <span>@error('post'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="place" class="form-label">Places</label>
                <input type="text" class="form-control" name="place" value="{{$data['jobs']->place}}">
                <span>@error('place'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="mobile_no" class="form-label">Mobile No.</label>
                <input type="text" class="form-control" name="mobile_no" value="{{$data['jobs']->mobile_no}}">
                <span>@error('mobile_no'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="req_skills" class="form-label">Require Skills</label>
                <input type="text" class="form-control" name="req_skills" value="{{$data['jobs']->req_skills}}">
                <span>@error('req_skills'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="req_experience" class="form-label">Require Experience</label>
                <input type="text" class="form-control" name="req_experience" value="{{$data['jobs']->req_experience}}">
                <span>@error('req_experience'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="req_qualification" class="form-label">Require Qualification</label>
                <input type="text" class="form-control" name="req_qualification" value="{{$data['jobs']->req_qualification}}">
                <span>@error('req_qualification'){{$message}}@enderror</span>

            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" value="{{$data['jobs']->salary}}">
                <span>@error('salary'){{$message}}@enderror</span>

            </div>


            <div class="mb-3">
                <input type="submit" name="submit" value="Submit" class="btn btn-dark"><br><br>

            </div>
        </form>
    </div>
</div>
