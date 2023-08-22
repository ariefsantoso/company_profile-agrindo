@extends('layout.main')

@section('content')


<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="#">Mesin Pemoles</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin SATAKE KB 40G</li>
            </ul>
            <h2> SATAKE KB 40G</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
<div class="row">
         <div class="span4">
          <div class="pricing-box-wrap special">
              
            <div align="center">
            
             <img src="{{ asset('assets/img/product/milling-unit/KB40G.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
              <p>Mesin SATAKE KB 40G digunakan untuk memoles beras menjadi lebih mengkilat / kristal dan dapat menghilangkan katul sehingga beras bisa lebih tahan lama di tempat penyimpanan. 
        Mesin ini juga memiliki keunggulan yaitu Getarannya rendah/halus dan Broken rendah.</p>
        <table class="table table-bordered">
        <tr>
        <td><strong>#</strong></td>
        <td><strong>Spesifikasi</strong></td>
        </tr>
        <tr>
        <td>Model</td>
        <td>SATAKE KB 40</td>
        </tr>
        <tr>
        <td>Fitur</td>
        <td>Menggunakan 3 pemisahan kotoran</td>
        </tr>
        <tr>
        <td>Kapasitas pemasukan</td>
        <td>3 Ton/jam</td>
        </tr>
        <tr>
        <td>Daya yang dibutuhkan</td>
        <td>2,2 kW / 3HP-4P</td>
        </tr>
        <tr>
        <td>Putaran poros utama</td>
        <td>470-480 rpm</td>
        </tr>
        
        </table>
          
        </div>
        <div class="span12">
              <a href="brosur_kb40g" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>


@endsection