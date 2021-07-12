<x-header-component/>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4 mt-5">
    Add City For Job:

    <form action="/admin/addcity" method="post" autocomplete="on">
        @csrf
        <input type="text" name="city">
        <input type="submit"  name="submit" class="btn btn-success" value="Submit">
    </form>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>City</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $city)
            <tr>
                <td>{{$city->id}}</td>
                <td>{{$city->name}}</td>
                <td><a href="/admin/addcity/{{$city->id}}" ><i class="fas fa-edit"></i></a>&nbsp;
                    &nbsp;
                    &nbsp;
                    <a href="/admin/delcity/{{$city->id}}"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>


        </div>



    </div>
    </div>
</div>
<script>
    fucntion
</script>
