@extends('layout.main')
@section('content')
<section id="inner-headline">
    <div class="container">
       <div class="row">
    <div class="span12">
        <div class="row">
              <div class="tabs">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#topone" data-toggle="tab"> Sejarah</a></li>
                  <li><a href="#keunggulan" data-toggle="tab">Keunggulan Agrindo</a></li>
                  <li><a href="#sertifikasi" data-toggle="tab">Sertifikasi</a></li>
                  <li><a href="#csr" data-toggle="tab">What We Do</a></li>
                </ul>
                
                <div class="tab-content">
                  <div class="tab-pane active" id="topone">
                 
        <div class="span12">
               <div class="page-header">
         <h4><strong>Sejarah</strong></h4>
        </div>
                <p>
          PT. AGRINDO berdiri pada tahun 1976, berlokasi di Bambe, Kabupaten Gresik, Provinsi Jawa Timur. PT AGRINDO didukung dengan Manajemen yang enerjik, dinamis dan berpengalaman sejak tahun 1942 (Tan Brothers). PT AGRINDO memproduksi mesin dan alat pertanian pra dan pasca panensparepart, jasa cutting, bending, casting dan fabrication. 

</p>
          <br>
          <div><img src="{{ asset('assets/img/founder-agrindo.jpg') }}"/></div>
          <br>
          <br>
          <br>
          <p>
              Manajemen berkomitmen untuk terus berkontribusi bagi kemajuan pertanian di Indonesia, memberikan kualitas dan pelayanan terbaik bagi konsumen, dan melakukan inovasi berkelanjutan. Didukung dengan distribusi pemasaran yang luas,
PT. AGRINDO berusaha untuk memenuhi kebutuhan pasar Nasional maupun Internasional.
</p>
      
        </div>
      
           
                  </div>
                  <div class="tab-pane" id="visi-misi">
                    <div class="page-header">
          <h4><strong>Visi</strong></h4>
          </div>
     <p>PT AGRINDO Rubber Roll Factory menjadi pemain tingkat Dunia di Industri Rol Karet pengupas kulit padi.</p>
          <br>
          <h4><strong>Misi</strong></h4>
          <p>Menjadi pemasok roll karet pengupas padi yang terbesar untuk pasar domestik dan internasional dengan menawarkan produk dan kualitas tinggi, berstandart Internasional, dan pelayanan konsumen yang memuaskan.</p>                    
          </div>
          
          
          <div class="tab-pane" id="keunggulan">
                    <div class="page-header">
          <h4><strong>Mengapa harus memilih produk AGRINDO ?</strong></h4>
          </div>
         
          <br>
           
           <div class="span6">
              <div class="box flyLeft">
                <div class="icon">
                  <i class="ico icon-circled icon-bgdark icon-refresh active icon-3x"></i>
                </div>
                <div class="text">
                  <h6>Produk <strong>Berkualitas</strong></h6>
                  <p>
                  Menghasilkan produk berkualitas dimulai dari proses pemilihan bahan baku sampai dengan produk jadi.
                  Quality Control yang terlatih melakukan pengujian menggunakan peralatan uji berteknologi tinggi dan modern, antara lain CMM, Spektrometer, Mooney Viscometer, Tensile Strenght Tester, Rheometer, Hardness Tester dan DIN Abrasion </p></div>
             <br> </div>
            </div>
            
             <div class="span5">
              <div class="box flyRight">
                <div class="icon">
                  <i class="ico icon-circled icon-bgdark icon-cogs active icon-3x"></i>
                </div>
                <div class="text">
                  <h6>Teknologi <strong>Modern</strong></h6>
                    PT. Agrindo menggunakan teknologi modern dan peralatan yang canggih seperti CNC Laser Cutting, CNC Bending, Banbury, Induction Furnace (Inductotherm), dan 3D Printing untuk pembuatan pattern.  
                </div>
              </div>
            </div>
            
             <div class="span6">
              <div class="box flyLeft">
                <div class="icon">
                  <i class="ico icon-circled icon-bgdark icon-globe active icon-3x"></i>
                </div>
                <div class="text">
                  <h6>Sertifikasi <strong>Nasional</strong> dan <strong>Internasional</strong></h6>
                  <p>Sejak tahun 1997 PT AGRINDO telah menerapkan dan mendapatkan sertifikat Sistem Manajemen Mutu Internasional ISO 9001 dan saat ini sudah diperbarui menjadi ISO 9001:2015. 
Pada tahun 2022 produk Rubber Roll (rol karet pengupas gabah) mendapatkan sertifikat HALAL.
                  </p>
                </div>
              </div>
            </div>
             <div class="span5">
              <div class="box flyRight">
                <div class="icon">
                  <i class="ico icon-circled icon-bgdark icon-money active icon-3x"></i>
                </div>
                <div class="text">
                  <h6>Perawatan <strong>Mudah</strong></h6>
                  <p>
                Produk PT.AGRINDO memiliki bentuk yang sederhana, mudah di operasikan dan maintenance yang mudhah dilakukan.
                  </p>
                </div>
              </div>
            </div>
        </div>
        
        
        <div class="tab-pane" id="sertifikasi">
                <div class="span12">
            <p>Untuk menunjang mutu produk kami, pihak manajemen berkomitmen untuk menerapkan sistem manajemen berkualitas sesuai dengan standar ISO 9001-2015.</p><br>
       
      </div>                   
          </div>
      <div class="tab-pane" id="csr">
                <div class="span12">
            <h4><strong>Corporate Social Responsibility</strong></h4>
            <div class="grid cs-style-4">
             <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="{{ asset('assets/img/csr/csr-1.jpg') }}" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
                              <a href="{{ asset('assets/img/csr/csr-1.jpg') }}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                        <span>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
                  <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="{{ asset('assets/img/csr/csr-2.jpg') }}" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
                              <a href="{{ asset('assets/img/csr/csr-2.jpg') }}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                        <span>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="{{ asset('assets/img/csr/csr-3.jpg') }}" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
                              <a href="{{ asset('assets/img/csr/csr-3.jpg') }}" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                        <span>
                              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                              </span>
                      </div>
                    </figcaption>
                  </figure>
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
            </div>

  </section>
@endsection