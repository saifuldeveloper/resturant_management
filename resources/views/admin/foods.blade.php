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
        <div class="main_content" style="position:relative;right:-79px;top:60px;">
            <div class="col-lg-12 stretch-card" style="width: 950px;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title "> Foods Items</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title text-light">All Foods</h4>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="bx bx-plus"></i>
                                    Add Foods
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th> Food Name </th>
                                        <th> Image</th>
                                        <th> Price </th>
                                        <th> Title </th>
                                        <th> Description </th>
                                        <th> Status </th>
                                        <th> Creator</th>
                                        <th> Created At</th>
                                        <th> Action </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 01</td>
                                        <td> fuska </td>
                                        <td> ttile</td>
                                        <td> Description</td>
                                        <td> Description</td>
                                        <td>
                                            <div class="badge badge-outline-success">active</div>
                                        </td>
                                        <td> saiful </td>
                                        <td> 04 Dec 2019 </td>
                                        <td>
                                            <a href="" id="delete" class="btn btn-danger">Delete</a>
                                            <a href="" id="delete" class="btn btn-warning">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- add  product modal --}}
                        <!-- Modal -->
                        <div class="modal fade text-light" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center bg-primary">
                                        <h5 class="modal-title text-center" id="exampleModalLabel"> Add Product
                                            Information</h5>
                                        <button type="button" class="close btn btn-outline-danger" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="title" class="form-label fw-bold">Food Title</label>
                                                    <input type="text" class="form-control text-light" id="title"
                                                        name="title" placeholder="Food title" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="name" class="form-label fw-bold">Food Name</label>
                                                    <input type="text" class="form-control text-light" id="name"
                                                        name="name" placeholder="Food Name" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="price" class="form-label fw-bold">Food price</label>
                                                    <input type="text" class="form-control text-light" id="price"
                                                        name="price" placeholder="price" required>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <label for="description"
                                                        class="form-label fw-bold">Describtion</label>

                                                    <textarea class="form-control" name="description" id="description" placeholder="Describtion" rows="3"></textarea>
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <label for="status" class="form-label fw-bold">Status</label>
                                                    <select name="status" class="form-control text-light">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>

                                                    </select>
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <label for="image" class="form-label fw-bold">Food
                                                        Image</label>
                                                    <input type="file" class="form-control mb-4 text-light" name="image"
                                                        id="image">

                                                </div>
                                                <div class="col-4">

                                                    <img class="profile-user-img img-fluid " id="showImage"
                                                        src="{{ asset('backend/images/avatar.png') }}" alt="User"
                                                        style="width:100px; height:100px;">
                                                </div>

                                            </div>







                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>



    </div>
    @include('admin.adminjs')
</body>

</html>
