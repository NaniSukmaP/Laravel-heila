@extends('layout.temp')

@section('content')
<div class="container">
<div class="row pt-5"></div>
  <div class="row text-center pt-4">
    <div class="col">
    <h1>OUR PRODUCT</h1>
    </div>
  </div>
</div>
<div class="row pt-4">
  <div class="col-1"></div>
  <div class="col-md-3">
  <div class="card" >
  <img src="image\Letter2.jpg" class="card-img-top" alt="Responsive image">
        <div class="card-body">
        <h5 class="card-title">Handwritten Letter</h5>
        <p class="card-text">Stay special and send your loved ones the sweetest letter ever. Lets make that happen!                        </p>
        <a href="/create" class="btn btn-warning">Order Here</a>
        </div>
    </div>
  </div>
  
  <div class="col-md-3">
  <div class="card" >
      <img src="image\Totebag.jpeg" class="card-img-top" alt="Responsive image">
        <div class="card-body">
          <h5 class="card-title">Totebag</h5>
          <p class="card-text">Turn your imagination into something you can carry anywhere. Let this totebag complete your day!</p>
          <a href="/create" class="btn btn-warning alignment=center">Order Here</a>
        </div>
    </div>
  </div> 

   
    <div class="col-md-3">
      <div class="card" >
        <img src="image\ButtonClip.jpeg" class="card-img-top" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">Button-Clip Pouch</h5>
            <p class="card-text">We also offer a plain button-clip pouch to gather your smallest stuff. Travel anywhere with no worry!</p>
            <a href="/create" class="btn btn-warning">Order Here</a>
          </div>
      </div>
    </div>
</div>

<div class="row pt-4">
  <div class="col-1"></div>
  <div class="col-md-3">
      <div class="card" >
      <img src="image\Pouch2.jpg" class="card-img-top" >
        <div class="card-body">
          <h4 class="card-title">Hand-Painted Pouch</h4>
          <p class="card-text">Custom your own handpainted pouch specially made by the one and only artist at Heila!.</p>
          <a href="/create" class="btn btn-warning">Order Here</a>
      
        </div>
      </div>
  </div>
  
  <div class="col-md-3">
    <div class="card" >
    <img src="image\Painting.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Painting</h5>
        <p class="card-text">Do you want us to turn your wildest imagination into a painting ? Lets to that !</p>
        <a href="/create" class="btn btn-warning">Order Here</a>
      </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="card" >
    <img src="image\merchandise.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Merchandise</h5>
        <p class="card-text">We also offer a string pouch for a merchandise. Need the other ? Find out here </p>
        <a href="/create" class="btn btn-warning">Order Here</a>
      </div>
    </div>
  </div>
</div>

<div class="row pb-5"></div>


@endsection

