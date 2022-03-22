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
      <h2>Watch Video</h2>
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

<!-- Chat Container -->
<div class="container">
  <h2 class="pb-2 border-bottom">Watch Now</h2>
  <div class="py-4 d-grid gap-3" style="grid-template-columns: 4fr 2fr; min-height:500px; max-height: 500px;">
    <div class="bg-dark border rounded-3 p-3">
      <input id="message-input" type="text" class="form-control" placeholder="Paste link from YouTube: https://www.youtube.com/watch?v=0iK0yevab-k">
      <div id="player"></div>
    </div>
    <div class="bg-dark border rounded-3 p-3">
      <!-- username -->
      <header>
        <h5 class="text-center text-light"><i class="fa fa-circle text-success" style="font-size: 9px"></i> Online Chat</h5>
        <input type="text" class="form-control text-center" name="username" id="username" placeholder="Enter a username...">
      </header>
      <!-- messages -->
      <div class="card mt-2 mb-2">
        <div class="card-body">
          <div id="messages" style="min-height: 280px;"></div>
        </div>
      </div>
      <!-- send message -->
      <form id="message-form">
        <div class="input-group mb-3">
          <input id="message-input" type="text" class="form-control" placeholder="Write a message..." aria-label="Write a message..." aria-describedby="message-send">
          <button class="btn btn-primary" type="submit" id="message-send"><i class="fa-solid fa-paper-plane"></i> Send</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection