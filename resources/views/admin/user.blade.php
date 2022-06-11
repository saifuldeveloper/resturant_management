<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="main_content"style="position:relative;right:-79px;top:60px;">
            <div class="col-lg-12 stretch-card" style="width: 950px;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Users manager</h4>
                        {{-- <p class="card-description"> Add class <code>.table-{color}</code> --}}
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered  responsive table-contextual" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th style="width: 25%"> # </th>
                                        <th tyle="width: 25%"> Name</th>
                                        <th tyle="width: 25%"> Email </th>
                                        <th tyle="width: 25%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                    <tr class="table-info">
                                        <td> {{ $key }}</td>
                                        <td> {{ $user->name }}</td>
                                        <td> {{ $user->email }} </td>
                                        <td>
                                            {{-- <a href="{{ url('/users/'.$user->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ url('/users/'.$user->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form> --}}
                                            @if($user->usertype  ==0)
                                           <a href="{{ url('/deleteusers',$user->id)}}" id="delete" class="btn btn-danger">Delete</a>
                                            @else
                                            <a href="{{ url('/deleteusers',$user->id)}}" class="btn btn-danger">Not Allowed</a>
                                            @endif
                                          
                                        </td>
                                    
                                           
                                    </tr>
                                    @endforeach
                                         
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
        @include('admin.adminjs')
</body>

</html>
