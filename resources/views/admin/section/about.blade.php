@include('admin.components.header')
<body>
    <div class="wrapper">
     <!-- Content For Sidebar -->
     @include('admin.components.side')
        <div class="main">
           <!-- navbar -->
            @include('admin.components.navbar')


           <!-- Content -->
           
           <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3">
                    <h4>About</h4>
                </div>
                <div class="row">
                    {{-- name --}}
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-1 m-1">
                                                <h4>Update Name</h4>
                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Name:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- role --}}
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-1 m-1">
                                                <h4>Update Role</h4>
                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Role:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     {{-- location --}}
                     <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-1 m-1">
                                                <h4>Update Location</h4>
                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Location:</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <!-- description -->
                 <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Update Description
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Description</label>
                          </div>
                    </div>
                </div>

                 <!-- Table awards -->
                 <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Update Award
                        </h5>
                              <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Launch demo modal
                                </button>
  
                    </div>
                    <div class="card-body">
                        <table  class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th >Title</th>
                                    <th >Description</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center">
                                        <button><i class="uil uil-edit"></i></button>
                                        <button><i class="uil uil-trash-alt"></i></button>
                                    </td>
                                </tr>
                                
                                 
                            </tbody>
                        </table>
                    </div>
                </div>

        
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Title</label>
              </div> 
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Description</label>
              </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
               
               
            </div>
            <a href="#" class="theme-toggle">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
        </a>
        </main>
      

           
          
        </div>
    </div>
  <!-- footer -->
  @include('admin.components.footer')  