@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
   <li data-target="#myCarousel" data-slide-to="3"></li>
   
   <li data-target="#myCarousel" data-slide-to="4"></li>
</ol>
<div class="carousel-inner">
  <div class="item active">
    <img src="{{ asset('assets/img/slides/camera/slide1/slide-80.png') }}" alt="">
  </div>
   <div class="item">
    <img src="{{ asset('assets/img/slides/camera/slide1/slide-photo1.jpg') }}" alt="">
  </div>
   <div class="item">
    <img src="{{ asset('assets/img/slides/camera/slide1/hc600 rev.png') }}" alt="">
  </div>
  <div class="item">
    <img src="{{ asset('assets/img/slides/camera/slide1/rmu2phase.jpg') }}" alt="">
  </div>
   <div class="item">
    <img src="{{ asset('assets/img/slides/camera/slide1/AgrRubberRoll.jpg') }}" alt="">
  </div>
   <div class="item">
    <img src="{{ asset('assets/img/slides/camera/slide1/AW60.jpg') }}" alt="">
  </div>
     
</div>

<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left">❮</span>
 
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right">❯</span>
</a>
</div>
</div>
    <!-- slideshow end here -->

  </section>
  <!-- /section featured -->
<!-- /section featured -->
 <section id="content">
    <div class="container">
        
        <div class="row">
               <div class="cta-text">
                   <h6 style="text-align:justify;"> PT AGRINDO memproduksi mesin dan alat pertanian mulai dari pra panen hingga pasca panen. PT AGRINDO terus berkontribusi untuk kemajuan pertanian indonesia dan berusaha untuk terus memenuhi kebutuhan pasar Nasional maupun Internasional.
            Selain memproduksi mesin dan alat pertanian, PT AGRINDO juga menyediakan sparepart pertanian dan jasa seperti di bawah ini:  </h6>
            
                </div>
            <div class="span4">
              <div class="box flyLeft">
                <div class="icon">
            
                   <img src="/assets/ico/smelter4.png" height="80" width="80" alt=""/>
                </div>
                <div class="text">
                  <h4><strong>Pengecoran</strong></h4>
                  <p>
                    Pengecoran yang kami lakukan menggunakan fasilitas canggih yang memiliki kapasitas lebih banyak dan menggunakan mesin pemanas pada pola besi dan pasir sehingga dapat menghasilkan cetakan yang kuat dan keras.
                  </p>
                   {{-- <a href="<?php echo base_url('index.php/Index/pengecoran')?>"> Detail info</a> --}}
                </div>
              </div>
            </div>

            <div class="span4">
              <div class="box flyIn">
                <div class="icon">
                 <img src="/assets/ico/laser.png" height="80" width="80" alt=""/>
                </div>
                <div class="text">
                  <h4><strong>Cutting</strong></h4>
                  <p>
                 Proses pemotongan lembaran besi yang kami lakukan menggunakan mesin laser terbaru dan lembaran besi yang dapat dipotong yaitu ketebalan 1 mm - 22 mm. Hasil yang di dapatkan berupa potongan yang lebih rapi, presisi, dan dapat menghasilkan potongan yang lebih banyak dalam waktu yang singkat.
                  </p>
                 {{-- <a href="<?php echo base_url('index.php/Index/cutting')?>"> Detail Info</a> --}}
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="box flyRight">
                <div class="icon">
                  <img src="/assets/ico/bending.png" height="80" width="80" alt=""/>
                </div>
                <div class="text">
                  <h4><strong>Bending</strong></h4>
                  <p>
                  Kami menawarkan jasa Bending dengan menggunakan mesin bending terbaru sehingga proses penekukan besi bisa lebih presisi dan mudah karena sudut kemiringannya bisa disesuaikan. Selain itu,   juga tidak merusak kondisi fisik barang.
                  </p>
                   {{-- <a href="<?php echo base_url('index.php/Index/bending')?>"> Detail Info</a> --}}
                </div>
              </div>
            </div>
 
          </div>
      </div>
      </section>
<section id="works">
      <div>
<div id="mixedSlider">
                  <div class="MS-content">
                  <div class="item">
                          <div class="imgTitle">
                              <h6 class="blogTitle">Cutting</h6>
                              <img src="/assets/img/fasilitas/fasilitas-cutting.jpg" alt=""/>
                          </div>
                      </div>
                      <div class="item">
                          <div class="imgTitle">
                              <h6 class="blogTitle">Bending</h6>
                              <img src="/assets/img/fasilitas/fasilitas-bending.png" alt="" />
                          </div>
                      </div>
                   
                       <div class="item">
                          <div class="imgTitle">
                              <h6 class="blogTitle">Smelter</h6>
                              <img src="/assets/img/fasilitas/fasilitas-smelter.png" alt="" />
                          </div>
                      </div>
                      <div class="item">
                          <div class="imgTitle">
                              <h6 class="blogTitle">Sandmill</h6>
                              <img src="/assets/img/fasilitas/fasilitas-sandmill.png" alt="" />
                          </div>
                      </div>
                      <div class="item">
                          <div class="imgTitle">
                              <h6 class="blogTitle">Moulding</h6>
                              <img src="/assets/img/fasilitas/fasilitas-moulding.png" alt="" />
                          </div>
                      </div>
                      <div class="item">
                          <div class="imgTitle">
                              <h6 class="blogTitle">CNC</h6>
                              <img src="/assets/img/fasilitas/fasilitas-cnc.png" alt="" />
                          </div>
                      </div>
                  </div>
                  <div class="MS-controls">
                      <button class="MS-left"><i class="icon-angle-left" aria-hidden="true"></i></button>
                      <button class="MS-right"><i class="icon-angle-right" aria-hidden="true"></i></button>
                  </div>
              </div>

      </div>
      

  </section>
@endsection