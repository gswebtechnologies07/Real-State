@extends('admin.layout.front')

@section('content')

 <!-- =====  BANNER STRAT  ===== -->
 <div class="banner2 large-header bg-color" id="large-header">
      <!--<div id="smoky">-->
      <!--  <canvas></canvas>-->
      <!--</div>-->

       <div class="banner-About" style="background-image: url({{asset('public/images/cmspage/'.$cmspages->banner_img)}});">
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  ABOUT START  ===== -->
    <section id="about" class="py-3  mt-4">
      <div class="about">
        <div class="container-xl">
          <div class="about-inner ">
            <div class="row">
                @foreach($residence as $item)
              <div class="col-lg-6">
                <div class="about-text">
                  <div class="about-heading-wrap">
				  <span>Kitchens & Bathrooms</span>
                    <h2 class=" mb_40 wow fadeInUp" data-wow-delay="0.2s">{{$item->title}}</h2>
                  </div>
				  <div class="wow fadeInUp mb-2" data-wow-delay="0.3s">{!!$item->desc!!}</div>
                  <!-- <p class="wow fadeInUp" data-wow-delay="0.3s">The bathrooms are equally luxurious, with Caesarstone vanity tops, polished chrome fixtures and accessories, porcelain flooring, and an elegant taupe porcelain accent wall.</p> -->
                  <a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.4s" type="button"><span>View Portfolio</span></a>
                </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <figure>  <a href="{{asset('public/images/residences/'.$item->image)}}" data-fancybox="group"> <img src="{{asset('public/images/residences/'.$item->image)}}" alt="#"> </a> </figure>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =====  ABOUT END  ===== -->
	
    <!-- =====  WORK WITH US STRAT  ===== -->
     <section class=" parallax ptb_50 d-none" id="Availability" data-source-url="images/fre2.jpg">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-12  m-auto col-sm-12 ptb_50">
            <div class="story_detail">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                      @foreach($availability as $avail)
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                       {{$avail->room_title}}
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <h3>{{$avail->room_no}}</h3>
                                        <p><span class="new_bdarm">{{$avail->bedroom_details}}</span></p>
                                    </div>
                                    <div class=" col-6 text-end">
                                       <h3>{{$avail->price}}</h3> 
                                       
                                    </div>  
                                    <div class="col-12 text-start">
                                        <p>*Offered furnished at {{$avail->offer_price}}</p>
                                    </div>    
                                </div>   
                                <div class="text-center py-2">
                                  <a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.4s" type="button" ><span>View Map</span></a>
                                </div>        
   
                        </div>
                    </div>
                  </div>
                  @endforeach
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =====  WORK WITH US END  ===== -->

@endsection