@extends('layout.main')

@section('content')
<section id="inner-headline">
    <div class="container">
       <div class="row">
    <div class="span12">
              <div class="tabs">
                <ul class="nav nav-tabs">
                   <li class="active"><a href="#cutting" data-toggle="tab">Cutting</a></li>
                    <li><a href="#bending" data-toggle="tab">Bending</a></li>
                  <li><a href="#pengecoran" data-toggle="tab"> Pengecoran</a></li>
                </ul>
                <div class="tab-content">
                 <div class="tab-pane active" id="cutting">
                   
                                 <div class="span6">
              <div class="box flyLeft">
                <div class="icon">
                   <img src="{{ asset('assets/img/fasilitas/fasilitas-cutting.jpg') }}" alt=""/>
                </div>
             
              </div>
            </div>
                         <div class="span5">
               <div class="text">
                  <h4><strong>Cutting</strong></h4>
                  <p style="text-align:justify;">PT. AGRINDO menerima jasa pemotongan (cutting) dengan menggunakan mesin CNC laser yang terbaru. Hasil potongan lebih rapi, presisi, efisien dan dapat menghasilkan potongan lebih banyak dalam waktu yang singkat. 
Ukuran lembaran plat yang dapat dipotong yaitu 3 m (panjang) x 1,5 m (lebar) dengan ketebalan maksimal 20 mm.</p>
                </div>
                </div>  
                 
              </div>
              <div class="tab-pane" id="bending">
                                 <div class="span6">
              <div class="box flyLeft">
                <div class="icon">
                   <img src="{{ asset('assets/img/fasilitas/fasilitas-bending.png') }}" alt=""/>
                </div>
             
              </div>
            </div>
                         <div class="span5">
               <div class="text">
                  <h4><strong>Bending</strong></h4>
                  <p style="text-align:justify;">PT AGRINDO menerima jasa penekukan (bending) menggunakan mesin CNC Bending yang canggih dan modern. Proses penekukan pada plat bisa lebih presisi dan sudut kemiringannya bisa disesuaikan, 
                  sehingga lebih efisien dan produk yang dihasilkan lebih banyak. Proses penekukan ini tidak merusak kondisi fisik. Panjang penekukan maksimal 3050 mm.</p>
                </div>
                </div>  
                 
              </div>
             <div class="tab-pane" id="pengecoran">
                                 <div class="span6">
              <div class="box flyLeft">
                <div class="icon">
                   <img src="{{ asset('assets/img/fasilitas/fasilitas-smelter.png') }}" alt=""/>
                </div>
             
              </div>
            </div>
                         <div class="span5">
               <div class="text">
                  <h4><strong>Pengecoran</strong></h4>
                  <p style="text-align:justify;">Proses  Melting menggunakan Induction Furnace (Inductotherm) yang memiliki kapasitas 1 ton dan 2 ton.</p>
                </div>
                </div>  
                 
              </div>
      
          </div>
      </div>     
        </div>
          </div>
            </div>
</div>
    </div>
  </section>
@endsection