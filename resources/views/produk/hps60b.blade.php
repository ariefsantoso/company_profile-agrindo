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
              
              <li class="active">HPS 60B</li>
            </ul>
            <h2> Mesin HPS 60B</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
<div class="row">
         <div class="span6">
          <div class="pricing-box-wrap special">
            <div>
             <img src="{{ asset('assets/img/product/milling-unit/HPS.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span6">
        <table class="table table-bordered">
        <tr style="background-color:#04145e; color:white">
        <td colspan="2" style="text-align:center;"><strong>Model</strong></td>
        <td style="text-align:center;"><strong>HPS 60B</strong></td>
        </tr>
        <tr>
        <td colspan="2">Kapasitas mesin </td>
        <td>1 ton/jam</td>
        </tr>
        <tr>
        <td colspan="2">Tenaga yang dibutuhkan </td>
        <td>5.5 KW, 4P</td>
        </tr>
        <tr>
        <td colspan="2">Kapasitas pelemparan husker </td>
        <td>12 m (kondisi mendatar)</td>
        </tr>
        <tr>
        <td colspan="2">Kapasitas pelemparan husker </td>
        <td>12 m (kondisi mendatar)</td>
        </tr>
        <tr>
        <td colspan="2">Jumlah separating tray </td>
        <td>4</td>
        </tr>
        <tr>
        <td colspan="2">Ukuran rubber roll </td>
        <td>6" x 8.75"</td>
        </tr>
        <tr>
        <td colspan="2">Kapasitas corong </td>
        <td>40 kg</td>
        </tr>
         <tr>
        <td rowspan="4" style="vertical-align : middle;text-align:center;">Putaran</td>
        <td>Main shaft</td>
        <td>110 Rpm</td>
        </tr>
        <tr>
        <td> kipas </td>
        <td> 1425 rpm, 1750 rpm (2 tingkat)</td>
        </tr>
         <tr>
         <td> Separating tray </td>
        <td> 195, 200, 205 (3 tingkat) </td>
        </tr>
         <tr>
         <td>Bucket Elevator</td>
        <td>330 Rpm </td>
        </tr>
        <tr>
        <td colspan="2">Berat </td>
        <td>350 kg</td>
        </tr>
        </table>
       
        </div>
       
      </div>

    </div>
  </section>

@endsection