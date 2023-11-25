@extends('admin.admin_master')
@section('admin')

            <!-- Product List Start -->
            
            <div class="container-fluid pt-4 px-10">
                <div class="border-primary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="{{route('add.teams')}}" class="btn btn-primary">Add New</a>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="">
                                    <th scope="col">Sl No.</th>
                                    <th scope="col">Profile Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Profile Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php ($i=1)
                            @foreach($meetteamlist as $item)
                            <!-- /backend/upload/{{$item->multi_image}} -->
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item['profile_name']}}</td>
                                    <td>{{$item['profile_role']}}</td>
                                    <td><div class="prdct-img"><img src="/backend/upload/{{$item->profile_image}}"></div></td>
                                    <td>
                                        <div class="d-flex action">
                                            <a class="btn text-secondary edit" href="{{route('meetteam.edit',$item->id)}}">
                                                <i class="fa fa-pen">Edit</i>
                                            </a>
                                            <a class="btn text-secondary delete" href="{{route('meetteam.delete',$item->id)}}">
                                                <i class="fa fa-trash">Delete</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

   
  
@endsection
            <!-- Product List End -->


          