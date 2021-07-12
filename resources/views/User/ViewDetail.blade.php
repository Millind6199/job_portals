<x-user_header_component/>

<div class="row">
    <div class="col-2"></div>
    <div class="col-10 mt-5">
        <h3>{{$data->post}}</h3>
        <p>Company Name: {{$data->comp_name}}</p>
        <p>Vacancies: {{$data->place}}</p>
        <p>Company Contact: {{$data->mobile_no}}</p>
        <p>Required Skills: {{$data->req_skill}}</p>
        <p>Required Experience: {{$data->req_experience}}</p>
        <p>Required Qualification: {{$data->req_qualification}}</p>
        <p>Salary: {{$data->salary}}</p>

        <form action="/user/jobapply/{{$data->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="post" class="form-label"><b>Select Gender</b></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" vlaue="female" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                </label>
            </div>
                <br><br>
            <div class="mb-3">
                <label for="formFile" class="form-label"><b>Upload your CV</b></label>
                <input class="form-control" name="cv" type="file" id="formFile">
            </div>

            <br><br>
            <div class="mb-3">

                <input class="form-control btn btn-primary" type="submit" id="formFile">
            </div>

        </form>
    </div>

</div>
