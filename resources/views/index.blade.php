@extends('temp.dasar')
<!-- Begin page content -->
@section('content')

<main class="flex-shrink-0">

  <img src="/img/Banner.jpg" class="img-fluid" alt="...">

<div class="container">
<div class="row align-items-start">
<div class="col">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
  <img src="/img/kenbotol.jpg" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>Kopi SUG Kenangan Glamour</h5>
    <p>Kopi Kenangan dalam Kemasan Botol yang Praktis untuk dibawa kemana-mana</p>
  </div>
</div>
<div class="carousel-item">
  <img src="/img/kopiken.jpg" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>Kopi SUG Kenangan Mix Gula Aren</h5>
    <p>Perpaduan Kopi yang di Campur dengan Gula Aren asli</p>
  </div>
</div>
<div class="carousel-item">
  <img src="/img/kopikenban.png" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>Brand of the Year</h5>
    <p>Kopi SUG Kenangan Mendapat Penghargaan sebagai Kopi dengan Brand Tersukses</p>
  </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</div>
<div class="col-lg-6 mb-0 d-flex align-items-center">
  <div class="text-align-left align-self-center">
    <h1 class="h1 text-info"><b>Kopi SUG Kenangan</b> 06.06</h1>
    <h3 class="h3 text-primary">PROMO SPESIAL DISKON s/d 90% !</h3>
    <h4>Biji Kopi pilihan yang dipadukan dengan Gula Aren Asli, Menciptakan Cita rasa yang membuat hari-hari kalian menjadi fokus dan santai</h4>
    <h5>Jadi Tunggu apalagi ? Ayo segera beli ! Promo Terbatas</h5>
    </div>
    </div>
</main>

<section class="bg-light">
    <!-- Start Categories of The Month -->
    <div class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Hot Sales Kopi SUG Kenangan Pada Bulan ini
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="/img/home4.jpg"" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Kopi Kenangan Kencan</h5>
                <p class="text-center"><a class="btn btn-success"  href="/produk">Beli Sekarang</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="/img/home3.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kopi Kenangan Merindu</h2>
                <p class="text-center"><a class="btn btn-success"  href="/produk">Beli Sekarang</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="/img/5.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kopi SUGtan</h2>
                <p class="text-center"><a class="btn btn-success"  href="/produk">Beli Sekarang</a></p>
            </div>
        </div>
        </div>
    </section>
    <!-- End Categories of The Month -->
@endsection