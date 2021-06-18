@extends('layouts.landing')

@section('additional-css')
<style>
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
</style>
@endsection

@section('content')

<div class="row">
  <div class="col-12 d-flex align-items-center flex-column">
    <img src="{{ asset('argon/img/brand/alihgae-logo.png') }}" alt="alihgae-logo" class="logo pb-2">
    <form action="">
      <div class="input-group search-custom">
        <input type="text" class="form-control input-custom" placeholder="Search and find the job you want" autofocus>
        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
            class="fas fa-search"></i></button>
      </div>
    </form>
  </div>
</div>

@endsection