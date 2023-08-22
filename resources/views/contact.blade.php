@extends('layout.main')

@section('content')
<section id="content">
    <div class="container">
      <div class="row">
        <div class="span8">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9511337899667!2d112.64896731432086!3d-7.3593747946893915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e2c931d1eb9b%3A0x1edf0dc9c23c3f5a!2sPT.+Agrindo!5e0!3m2!1sid!2sid!4v1519002376417" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
       </div>
        <div class="span4">
          <div class="clearfix"></div>
          <aside class="right-sidebar">

            <div class="widget">
              <h5 class="widgetheading">Contact information<span></span></h5>
              <ul class="contact-info">
                <li><label>Address :</label> Jl. Raya Bambe KM 19,3<br /> Driyorejo - Gresik 61177 </br> Jawa Timur - INDONESIA</li>
                <li><a href="https://maps.app.goo.gl/ysHC7TGr5hvzr8Vg8" style="color:blue"><i class="fa-solid fa-location-dot"></i>  Link Google Map</a></li>
                 <li><label>Phone :</label>+62 31 750 8070<br>+62 31 759 0300 (Marketing)</li>
                  <li><label>Whatsapp :  </label><a href="https://wa.me/+6281130537888" style="color:blue">+62 811 3053 7888</a></li>
                <li><label>Email : </label> <a href="mailto:info@agrindo.com" style="color:blue">info@agrindo.com</a></li>
               
                <li><label>FOLLOW US</label></li>
                <a href="https://www.instagram.com/agrindo.pt/?hl=id"><img src="{{ asset('assets/ico/instagram-icon.png') }}" style="width:50px;height:50px;" alt="intagram-agrindo" /></a></li>
                <a href="https://www.tokopedia.com/ptagrindo?utm_medium=Share&utm_campaign=Shop%20Share&utm_source=Desktop"><img src="{{ asset('assets/ico/tokopedia-icon.png') }}" style="width:40px;height:40px;" alt="tokopedia-agrindo" /></a></li>
                <a href="https://shopee.co.id/agrindo.pt"><img src="{{ asset('assets/ico/shopee2.png') }}" style="width:40px;height:50px;" alt="shopee-agrindo" /></a></li>
                <a href="https://www.youtube.com/channel/UCcOoDpb54XZkqKWHmOrumNg"><img src="{{ asset('assets/ico/youtube.png') }}" style="width:100px;height:30px;" alt="youtube-agrindo" /></a></li>
                <br><br>
                <li><a href="https://linktr.ee/ptagrindo" style="color:blue"><i class="fas fa-link"></i>  https://linktr.ee/ptagrindo </a></li>
                
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
@endsection