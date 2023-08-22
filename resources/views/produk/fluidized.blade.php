@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Halaman Utama</a> <i class="icon-angle-right"></i></li>
              <li><a href="pengering-biji-bijian">Mesin Pengering</a> <i class="icon-angle-right"></i></li>
              <li class="active">Fluidized</li>
            </ul>
            <h2> Mesin Fluidized Bed Dryer</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/fluidized.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
        <table class="table table-bordered">
        <tr>
        <td>#</td>
        <td>Spesifikasi</td>
        </tr>
        <tr>
        <td>Tipe</td>
        <td>AFBD12N</td>
        </tr>
         <tr>
        <td>Kapasitas aliran</td>
        <td>7 - 10 ton/jam</td>
        </tr>
         <tr>
        <td>Laju pengeringan</td>
        <td>4 - 6 %</td>
        </tr>
         <tr>
        <td>Temperatur udara panas</td>
        <td>90 - 150 C</td>
        </tr>
       <tr>
        <td>Volume udara panas</td>
        <td>300 - 500 M/min</td>
        </tr>
         <tr>
        <td>Daya</td>
        <td>25 - 30 HP</td>
        </tr>
        </table>
     
        </div>
       
      </div>

    </div>
  </section>
@endsection