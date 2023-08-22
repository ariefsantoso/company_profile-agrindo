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
             <img src="{{ asset('assets/img/product/milling-unit/avs.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
           <table class="table table-bordered">
        <tr>
        <td><strong>Model</strong></td>
        <td><strong>AVS-1</strong></td>
        </tr>
        <tr>
        <td>Kapasitas (kg/jam)</td>
        <td>2000 - 2500</td>
        </tr>
        <tr>
        <td>Daya Mesin (kW/HP)</td>
        <td>1.49-1.86 / 2-2.5</td>
        </tr>
        <tr>
        <td>Putaran poros utama (rpm)</td>
        <td>900-1000</td>
        </tr>
        <tr>
        <td>Dimensi (mm)</td>
        <td>2081 x 1048 x 1725</td>
        </tr>
        <tr>
        <td>Berat (kg)</td>
        <td>210 </td>
        </tr>
        </table>
        </div>
        
        </div>
        <div class="row">
            <div class="span12">
          <p style="text-align:justify">
  Mesin ini digunakan untuk memisahkan beras menjadi beras kepala, beras patah dan menir dengan tingkat akurasi yang tinggi.
            </p>
            
        </div><br>

       `
      </div>

    </div>
  </section>

@endsection