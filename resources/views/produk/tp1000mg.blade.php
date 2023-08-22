@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              <li><a href="perontokpadi">Perontok padi & jagung</a> <i class="icon-angle-right"></i></li>
             <li class="active">TPA 1000 MG</li>
            </ul>
            <h2> Mesin TPA 1000 MG </h2>
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
            <div align="center">
             <img src="{{ asset('assets/img/product/pasca-panen/TPA1000MG-NEW-min.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span6">
         <table class="table table-bordered">
           <tr style="background-color:#04145e; color:white">
           <td><strong>#</strong></td>
           <td colspan="2"><strong>Spesifikasi</strong></td>
           </tr>
           <tr>
           <td>Model</td>
           <td colspan="2">TP 1000 MG</td>
           </tr>
           <tr>
           <td rowspan="3">Kapasitas</td>
           <td>Padi</td>
            <td>800 - 900 kg/jam </td>
           </tr>
           <tr>
           <td>Kedelai</td>
            <td>450 - 550 kg/jam </td>
           </tr>
            <tr>
           <td>Jagung</td>
            <td>1300 - 1350 kg/jam </td>
           </tr>
           <tr>
           <td>Kebutuhan tenaga</td>
           <td colspan="2">7-8 hp/5-6 kW</td>
           </tr>
           <tr>
           <td>Putaran poros utama</td>
           <td colspan="2">600 - 650 rpm</td>
           </tr>
           <tr>
           <td rowspan="2">Dimensi</td>
           <td>Padi/Kedelai</td>
           <td>1675 mm x 1195 mm x 1425 mm</td>
           </tr>
            <tr>
          
           <td>Jagung</td>
           <td>1675 mm x 1195 mm x 1480 mm</td>
           </tr>
           <tr>
           <td>Berat tanpa penggerak</td>
           <td colspan="2">180 kg</td>
           </tr>
            <tr>
           <td>Panjang jerami</td>
           <td colspan="2">400 mm - 450 mm</td>
           </tr>
            <tr>
           <td>Panjang tangkai kedelai</td>
           <td colspan="2">500 mm - 550 mm</td>
           </tr>
           
           </table>
     
        </div>
       
      </div>

    </div>
  </section>
@endsection