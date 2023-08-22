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
              <li class="active">Husk Furnace - Indirect</li>
            </ul>
            <h2> Mesin Husk Furnace - Indirect</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/indirect.jpg') }}"/>
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
        <td>Energi panas</td>
        <td>100 Kw</td>
        </tr>
         <tr>
        <td>Temperatur udara panas</td>
        <td>70 - 200 C</td>
        </tr>
         <tr>
        <td>Kebutuhan sekam</td>
        <td>25 - 40 kg/jam</td>
        </tr>
       <tr>
        <td>Volume arang sekam</td>
        <td>&plusmn; 5 kg/jam</td>
        </tr>
        <tr>
        <td>Temperatur arang sekam</td>
        <td>30 - 50 C</td>
        </tr>
         <tr>
        <td>Total electric power</td>
        <td>1 hp</td>
        </tr>
        </table>
     
        </div>
       
      </div>

    </div>
  </section>


@endsection