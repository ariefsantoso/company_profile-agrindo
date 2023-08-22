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
              <li class="active">Cyclonic Husk Furnace</li>
            </ul>
            <h2> Mesin Cyclonic Husk Furnace</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/cyclonic.jpg') }}"/>
            </div>
          </div>
        </div>
        
        <div class="span8">
         <table class="table table-bordered">
         <tr>
         <td rowspan="2" style="vertical-align : middle;text-align:center;">#</td>
         <td colspan="5" style="text-align:center;">Model</td>
         </tr>
         <tr>
         <td>AHF 250</td>
         <td>AHF 500</td>
         <td>AHF 1000</td>
         <td>AHF 2000</td>
         <td>AHF 3000</td>
         </tr>
         <tr>
          <td>Energi panas (kw)</td>
         <td>250</td>
         <td>500</td>
         <td>1000</td>
         <td>2000</td>
         <td>3000</td>
         </tr>
         <tr>
         <td>Temperatur Udara Panas</td>
         <td colspan="5" style="text-align : center">70 - 300 &deg C</td>
         </tr>
            <tr>
          <td>Kebutuhan sekam (kg/jam)</td>
         <td>60-65</td>
         <td>40-100</td>
         <td>100-200</td>		   
         <td>250-450</td> 
         <td>350-600</td>
         </tr>
          <tr>
          <td>Volume Arang Sekam (kg/jam)</td>
         <td>5-15</td>
         <td>15-25</td>
         <td>30-60</td>
         <td>50-90</td>
         <td>70-120</td>
         </tr>
           <tr>
         <td>Temperatur Arang Sekam</td>
         <td colspan="5" style="text-align : center">30 - 50 &deg C</td>
         </tr>
           <tr>
          <td>Total Electric Power (HP)</td>
         <td>2.5</td>
         <td>4.5</td>
         <td>7.5</td>
         <td>8</td>
         <td>8</td>
         </tr>
         </table>
        </div>
       
      </div>

    </div>
  </section>

@endsection