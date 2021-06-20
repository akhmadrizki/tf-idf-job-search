@extends('layouts.landing')

@section('additional-css')
<style>
  .landing {
    height: 90vh;
  }

  .logo {
    width: 300px;
  }

  .search-custom {
    height: 44px;
    width: 584px;
  }

  .input-custom {
    border-radius: 24px;
  }

  .footer {
    background-color: #f2f2f2;
    color: rgba(0, 0, 0, .54);
    font-weight: normal;
    height: 10vh;
  }
</style>
@endsection

@section('content')
<div class="landing d-flex flex-column justify-content-center align-items-center">
  <div class="container d-flex justify-content-center align-items-center">
    <div class="row">
      <div class="col-12 d-flex align-items-center flex-column">
        <img src="{{ asset('argon/img/brand/alihgae-logo.png') }}" alt="alihgae-logo" class="logo pb-2">
        <form action="{{ route('index.result') }}" method="POST">
          @csrf
          <div class="input-group search-custom">
            <input type="text" name="search" class="form-control input-custom" placeholder="Search and find the job you want"
              autofocus>
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer d-flex justify-content-center align-items-center">
  <h6>
    {{ date("Y") }} &copy; Alihgae.com
  </h6>
</div>

@endsection