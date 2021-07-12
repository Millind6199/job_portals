<x-header-component/>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4 mt-5">
        Add City For Job:

        <form action="/admin/updatecity/{{$city->id}}" method="post" autocomplete="on">
            @csrf
            <input type="text" name="city" value="{{$city->name}}">
            <input type="submit"  name="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
</div>
