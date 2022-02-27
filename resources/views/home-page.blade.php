@extends('layouts.master')

@section('content')
<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-7 fw-bold text-white"><i class="fa-brands fa-youtube text-danger"></i> Watch Videos With Friends</h1>
        <div class="col-lg-5 mx-auto">
        <p class="fs-5 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ducimus animi corporis, quaerat quisquam impedit odit recusandae</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-md px-4 me-sm-3 fw-bold"><i class="fa-solid fa-square-plus"></i> Create New Room</button>
            <button type="button" class="btn btn-outline-light btn-md px-4"><i class="fa-solid fa-heart"></i> Subscribe</button>
        </div>
        </div>
    </div>
</div>

<div class="container px-4 py-5 pb-1" id="featured-3">
  <h2 class="pb-2 border-bottom">Features Available</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
      <div class="feature-icon mb-3">
        <i class="fa-solid fa-comments fa-2xl text-primary"></i>
      </div>
      <h2>Chat</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    </div>
    <div class="feature col">
      <div class="feature-icon mb-3">
        <i class="fa-solid fa-video fa-2xl text-primary"></i>
      </div>
      <h2>Video Chat</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    </div>
    <div class="feature col">
      <div class="feature-icon mb-3">
        <i class="fa-solid fa-rotate fa-2xl text-primary"></i>
      </div>
      <h2>Synchronized</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    </div>
  </div>
</div>
@endsection