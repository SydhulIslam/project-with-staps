@extends('comon.dashboard-layout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> {{ $title }}</h4>


        <!-- Contextual Classes -->

        <div class="card">
            <h5 class="card-header">Contextual Classes</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Blog ID</th>
                            <th>Blog Title</th>
                            <th>Blog Thumbnail</th>
                            <th>Blog Categories</th>
                            <th>Blog Author</th>
                            <th>Total View</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">


                        <tr class="table-default">
                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong> 1 </strong></td>

                            <td>Blog Title</td>

                            <td>
                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                        <img src="assets/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                </ul>
                            </td>

                            <td><span class="badge bg-label-primary me-1">Blog Categories</span></td>

                            <td>Blog Title</td>

                            <td><span class="badge bg-label-primary me-1">2314</span></td>

                            <td>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <a class="dropdown-item btn btn-primary" href="admin/blog/edit-blog.blade.php">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>

                                    <form method="post" action="">

                                        @csrf
                                        @method('DELETE')

                                        <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">Remove Blog :
                                                        </h5>

                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>

                                                    </div>

                                                    <div class="modal-body">
                                                        <hr>
                                                        <p> Are You Sure, You Removed this Blog !! </p>
                                                        <hr>
                                                    </div>


                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal"> Close </button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#smallModal"> Remove </button>

                                    </form>

                                </div>
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Contextual Classes -->


    </div>
    <!-- / Content -->
@endsection
