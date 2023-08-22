@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
         <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="pemisah-beras">Mesin Pemisah Beras</a> <i class="icon-angle-right"></i></li>
              
              <li class="active">RPS 10 A</li>
            </ul>
            <h2> Mesin RPS 10 A</h2>
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
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/RPS10A.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
           <table class="table table-bordered">
        <tr>
        <td><strong>Model</strong></td>
        <td><strong>RPS 10A</strong></td>
        </tr>
        <tr>
        <td>Kapasitas</td>
        <td>1000 - 1200 kg/jam</td>
        </tr>
        <tr>
        <td>Daya Mesin</td>
        <td>0.75 kW/1 hp</td>
        </tr>
        <tr>
        <td>Putaran poros utama</td>
        <td>200-210 rpm </td>
        </tr>
        <tr>
        <td>Dimensi</td>
        <td>1325mm x 1025mm x 1170mm</td>
        </tr>
        <tr>
        <td>Berat tanpa penggerak</td>
        <td>150 kg</td>
        </tr>
        </table>
        </div>
        
        </div>
        <div class="row">
            <div class="span12">
          <strong>KEISTIMEWAAN</strong><br>
          <p style="text-align:justify">
          1. Mudah dioperasikan<br>
          2. Perawatan mudah<br>
          3. Hasil pemisahan beras pecah kulit dan gabah lebih sempurna<br>
            </p>
            
        </div><br>

       ` <div class="span12">
              <a href="brosur_rps10a" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>


@endsection