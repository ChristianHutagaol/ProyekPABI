@extends('layouts.frontend')

@section('content')

<section>
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <!--========== ISLANDS 1 ==========-->
        <section class="islands swiper-slide">
          <img
            src="{{ asset('frontend/assets/img/R1.jpg') }}"
            alt=""
            class="islands__bg"
          />
          <div class="bg__overlay">
            <div class="islands__container container">
              <div class="islands__data">
                <h2 class="islands__subtitle"></h2>
                <h1 class="islands__title">GALERI</h1>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <br><br><br>
  <h2> Tanah Lot </h2>
  <section id="gallery">
    <div><img src="images/lot6.jpg" /> </div>
    <div><img src="images/lot5.jpg" /> </div>
    <div><img src="images/lot7.jpg" /> </div>
    <div><img src="images/lot8.jpg" /> </div>

</section>
<section class="video-container">
    <div class="video-overlay"></div>
    <video autoplay muted loop class="video">
        <source src="video/Tanahlot.mp4" type="video/mp4" />
    </video>
</section>
<br><br><br>
<h2>Danau Beratan</h2>
<section id="gallery">
    <div><img src="images/Beratan1.jpg" /> </div>
    <div><img src="images/Beratan5.jpg" /> </div>
    <div><img src="images/Beratan3.jpeg" /> </div>
    <div><img src="images/Beratan4.jpg" /> </div>

</section>
<section class="video-container">
    <div class="video-overlay"></div>
    <video autoplay muted loop class="video">
        <source src="video/Beratan.mp4" type="video/mp4" />
    </video>
</section>

<br><br><br>
<h2>Arung Jeram Sungai Ayung</h2>
<section id="gallery">
    <div><img src="images/arung1.jpg" /> </div>
    <div><img src="images/arung2.jpg" /> </div>
    <div><img src="images/arung3.png" /> </div>
    <div><img src="images/arung6.jpg" /> </div>

</section>
<section class="video-container">
    <div class="video-overlay"></div>
    <video autoplay muted loop class="video">
        <source src="video/Arung.mp4" type="video/mp4" />
    </video>
</section>


 