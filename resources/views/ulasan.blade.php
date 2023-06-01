@extends('layouts.frontend')
@section('content')

<section>
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <!--========== ISLANDS 1 ==========-->
        <section class="islands swiper-slide">
          <img
            src="{{ asset('frontend/assets/img/ulasan.jpg') }}"
            alt=""
            class="islands__bg"
          />
          <div class="bg__overlay">
            <div class="islands__container container">
              <div class="islands__data">
                
                <h1 class="islands__title">Berikan Ulasan Anda</h1>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
<div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class ="card-body">
        <form action ="{{ route('insertData', ['id' => 1]) }}" method="POST">
            @csrf
            <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
            <div class="form-group">
                <p> Nama :</p>
                <input class="form-control" type="text" name="nama"></input>
</div>
<div class="form-group">
    <p> Ulasan : </p>
    <input class="form-control" type="text" name="ulasan"></input>
</div>
<input type="submit" class="btn btn-primary">


</form>
</div>
</div>

@foreach($ulasan as $k)
@if($k->id_konten==$id)
<div class="media mb-4">
    <img class ="d-flex mr-3 rounded-circle" src="{{$k->profile_photo}}" alt ="">
    <div class ="media-body">
        <h5 class ="mt-0">{{$k->nama}}</h5>
        <p>{{$k->ulasan}}</p>
</div>
</div>
@endif
@endforeach

@endsection




