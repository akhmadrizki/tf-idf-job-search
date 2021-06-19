@extends('layouts.landing')

@section('additional-css')
<style>
  .result {
    border-bottom: 1px solid #ebebeb;
  }

  .result img {
    width: 182px;
  }

  .search-custom {
    height: 44px;
  }

  .input-custom {
    border-radius: 24px;
  }

  .result-content {
    color: #333;
  }

  .card-result {
    padding: 4px 0;
    width: 100%;
  }

  .card-result h1 {
    color: #007188;
    font-weight: normal;
  }

  .card-result-company {
    font-size: 18px;
  }

  .footers {
    background-color: #f2f2f2;
    color: rgba(0, 0, 0, .54);
    font-weight: 700;
    padding: 4px 0;
    width: 100%;
  }
</style>
@endsection

@section('content')
<div class="result">
  <div class="container">
    <div class="row gx-1 py-4 d-flex align-items-center">
      <div class="col-3">
        <a href="/"><img src="{{ asset('argon/img/brand/alihgae-logo.png') }}" alt="alihgae-logo"></a>
      </div>
      <div class="col-8">
        <form action="">
          <div class="input-group search-custom">
            <input type="text" class="form-control input-custom" placeholder="Search and find the job you want"
              autofocus>
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                class="fas fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="result-content py-4">
    @if (count($jobs) == 0)
    <h2>Sorry we couldn't find what you were looking for</h2>
    @else
    <p>About 128 results</p>

    @foreach ($jobs as $job)
    <div class="card-result my-2">
      <h1>{{ $job->job_name }}</h1>
      <p class="card-result-company"><i class="far fa-building"></i> {{ $job->company_name }}</p>
      <p>
        <i class="fas fa-map-marker-alt"></i> {{ $job->address }}
        <i class="fas fa-tag"></i> {{ $job->category }}
      </p>
      <small>{{ strip_tags($job->description) }}</small>
    </div>
    @endforeach
    @endif
  </div>
  <div class="py-4">
    <ul class="pagination justify-content-end mb-0">
      {{ $jobs->links('vendor.pagination.bootstrap-4') }}
    </ul>
  </div>
</div>
<div class="footers text-center">
  <span>
    {{ date("Y") }} &copy; Alihgae.com
  </span>
</div>
@endsection