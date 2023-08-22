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
              <li class="active">VRD Series</li>
            </ul>
            <h2> Mesin VRD Series</h2>
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
             <img src="{{ asset('assets/img/product/milling-unit/vrd.jpg') }}"/>
            </div>

          </div>
        </div>
        
        <div class="span8">
        <table class="table table-bordered" >
        <tr>
        <td align="center">Tipe</td>
        <td align="center">Daya (HP)</td>
        <td align="center">Kapasitas Tampung (Ton)</td>
        </tr>
        <tr>
        <td>VRD 60</td>
        <td>7</td>
        <td>6</td>
        </tr>
        <tr>
        <td>VRD 100</td>
        <td>10,5</td>
        <td>10</td>
        </tr>
        <tr>
        <td>VRD 200</td>
        <td>18</td>
        <td>20</td>
        </tr>
         <tr>
        <td>VRD 300</td>
        <td>26</td>
        <td>30</td>
        </tr>
         <tr>
        <td>VRD 400</td>
        <td>37</td>
        <td>40</td>
        </tr>
        </table>
     
        </div>
         <div class="span12">
              <a href="brosur_vrd" class="btn btn-medium btn-theme">Download Brosur</a>
              
          </div>
      </div>

    </div>
  </section>


@endsection