@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <!-- Account Settings Start -->
            <!-- <div class="content">  -->
            <div class="container-fluid pt-4 px-4">
                <div class="row border-primary rounded mx-0 p-3">
                    <div class="col-12">
                        <div class="row" id="editprofile" style="display: flex;">
                            <div class="col-12">
                                <strong class="fs-16 fw-500 light-blue-txt mb-3 d-block">Update Team Members</strong>
                                <form action="/updateteam/{{$meetteamedit->id}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    {{method_field('PUT')}}
                                  @csrf
                                  <div class="col-md-7 mb-2">
                                        <label for="">Profile Name</label>
                                        <input style="width: 560px; height: 50px;" name ="profile_name"type="text" class="form-control" value ="{{$meetteamedit->profile_name}}">
                                    </div>
                                    <div class="col-md-7 mb-2">
                                        <label for="">Profile Role</label>
                                        <input style="width: 560px; height: 50px;" name ="profile_role"type="text" class="form-control" value ="{{$meetteamedit->profile_role}}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Upload profile Photo</label>
                                        <label class="uploadFile form-control">
                                            <span class="filename"></span>
                                            <input type="file" class="inputfile" name="profile_image" id ="image">
                                        </label>
                                        <!-- <span class="d-block">Note : Maximum Image Size 1000 kb</span> -->
                                    </div>
                                    <div>
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                        <div class ="col-sm-4">
                                            <img id ="showImage" class ="rounded avatar-xl" src="{{asset('backend/upload/'.$meetteamedit->profile_image)}}" style="max-width: 250x; max-height: 250px" alt ="Card image cap">
                                       </div>

                                    </div>
                                    <div class="col-12 d-flex">
                                        <button type="submit" class="btn btn-primary btn-typ4">Update Member</button>
                                        <!-- <button type="button" class="btn btn-primary btn-typ3 ms-2">CANCEL</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <form class="row">
                            <div class="col-md-6 form-group mb-2">
                                <label for="inputProfilePicture">Profile Picture</label>
                                <input type="file" class="form-control" id="inputProfilePicture">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label for="inputUserName">User Name</label>
                                <input type="text" class="form-control" id="inputUserName">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label for="InputEmail1">Email</label>
                                <input type="email" class="form-control" id="InputEmail1">
                            </div>
                            
                            <div class="col-md-6 form-group mb-2">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary d-block m-auto">Submit</button>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>

            <!-- Account Settings End -->
            <script type="text/javascript">  
$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload=function (e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });

});
</script> 




@endsection


          

            