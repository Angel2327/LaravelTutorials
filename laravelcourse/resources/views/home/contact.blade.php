@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto text-center">
      <p class="lead">{{ $email }}</p>
    </div>
    <div class="col-lg-4 me-auto text-center">
      <p class="lead">{{ $addres }}</p>
    </div>
    <div class="col-lg-4 me-auto text-center">
      <p class="lead">{{ $phone }}</p>
    </div>
  </div>
</div>

@endsection
