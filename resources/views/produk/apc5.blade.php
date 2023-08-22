@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="pembersih-gabah">Mesin Pembersih Gabah</a> <i class="icon-angle-right"></i></li>
              <li class="active">Mesin APC 5</li>
            </ul>
            <h2> Mesin APC 5</h2>
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
            
             <img src="{{ asset('assets/img/product/milling-unit/APC-5.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
            <p>Mesin APC 5 Digunakan untuk membersihkan gabah kotor menjadi bersih dan siap untuk digiling (pembersihan pertama)</p>
        <table class="table table-bordered">
        <tr>
        <td><strong>#</strong></td>
        <td><strong>Spesifikasi</strong></td>
        </tr>
        <tr>
        <td>Model</td>
        <td>APC 5</td>
        </tr>
        <tr>
        <td>Fitur</td>
        <td>Menggunakan 3 pemisahan kotoran</td>
        </tr>
        <tr>
        <td>Kapasitas pemasukan</td>
        <td>5 Ton/jam</td>
        </tr>
        <tr>
        <td>Daya yang dibutuhkan</td>
        <td>2,2 kW / 3HP-4P</td>
        </tr>
        <tr>
        <td>Putaran poros utama</td>
        <td>440 rpm</td>
        </tr>
        
        </table>
          <br>
        </div>
        <div class="span12">
              <a href="brosur_apc5" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>
@endsection