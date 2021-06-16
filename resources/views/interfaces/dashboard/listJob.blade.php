@extends('layouts.dashboard')

@section('header-body')
<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
      <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="{{ route('index.wellcome') }}"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">List Jobs</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <button class="btn btn-icon btn-primary" type="button">
          <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
          <span class="btn-inner--text">Add Job</span>
        </button>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" class="sort" data-sort="name">Company</th>
              <th scope="col" class="sort" data-sort="budget">Job Title</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="list">
            <tr>
              <th scope="row">
                <div class="media align-items-center">
                  <div class="media-body">
                    <span class="name mb-0 text-sm">Argon Design System</span>
                  </div>
                </div>
              </th>
              <td class="budget">
                $2500 USD
              </td>
              <td class="text-right">
                <div class="dropdown">
                  <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" type="button" data-toggle="modal"
                      data-target="#modal-notification">Delete</a>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog"
                    aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                      <div class="modal-content bg-gradient-danger">

                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>

                        <div class="modal-body">

                          <div class="py-3 text-center">
                            <i class="ni ni-bell-55 ni-3x"></i>
                            <h4 class="heading mt-4">You should read this!</h4>
                            <p>A small river named Duden flows</p>
                          </div>

                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-white">Ok, Got it</button>
                          <button type="button" class="btn btn-link text-white ml-auto"
                            data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- End Modal -->

                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Card footer -->
      <div class="card-footer py-4">
        <nav aria-label="...">
          <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection