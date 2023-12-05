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
    
    
    
    <!---->
    @php
        if(request()->get('type')) {
            $type = request()->get('type');
        } else {
            $type = 'building';
        
        }
    @endphp
          <div class="container mt-5">
              <div class="row">
                  <div class="col-md-12">
                       <ul class="nav nav-pills gap-4 mb-3 justify-content-center mb-4" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link {{($type == 'building')? 'active':''}}" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Common Roof Deck</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link {{($type == 'bedroom')? 'active':''}}" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> 1 Bedroom</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link {{($type == 'studio')? 'active':''}}" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Studio</button>
                          </li>
                         
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade {{($type == 'building')? 'show active':''}}" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                          <!-- =====  ABOUT START  ===== -->
                                <section id="about"  style="padding-bottom:100px;">
                              <div class="about">
                            <!-- Slider main container -->
                                <div class="swiper">
                                  <!-- Additional required wrapper -->
                                  <div class="swiper-wrapper">
                                    <!-- Slides -->
                                       @foreach($building as $key=>$buil)
                                    <div class="swiper-slide">
                                        <div class="container-xl">
                                  <div class="about-inner ">
                                    <div class="row">
                                         
                                      <div class="col-lg-6">
                                        <div class="about-text">
                                          <div class="about-heading-wrap">
                        				  <!--<span>Kitchens & Bathrooms</span>-->
                                            <!--<h2 class=" mb_40 wow fadeInUp" data-wow-delay="0.2s">title</h2>-->
                                          </div>
                        				  <div class="wow fadeInUp mb-2" data-wow-delay="0.3s">{!!$buil->desc!!}</div>
                                          <!--<a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.4s" type="button"><span>View Portfolio</span></a>-->
                                        </div>
                                      </div>
                                      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                                        <figure> <a href="{{asset('public/images/building/'.$buil->image)}}"> 
                                        
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                              
                                              <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                  <img src="{{asset('public/images/building/'.$buil->image)}}" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                             
                                            </div>
                                        </a> </figure>
                                      </div>
                                      </div>
                                       </div>
                                        </div>
                                    
                                    </div>
                                     @endforeach
                                  </div>
                                  <!-- If we need pagination -->
                                  <div class="swiper-pagination"></div>
                                  <!-- If we need navigation buttons -->
                                  <!--<div class="swiper-button-prev"></div>-->
                                  <!--<div class="swiper-button-next"></div>-->
                                </div>
                              </div>
                            </section>
                            <!-- =====  ABOUT END  ===== -->        
                          </div>
                          <div class="tab-pane fade {{($type == 'bedroom')? 'show active':''}}" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <!-- =====  ABOUT START  ===== -->
                               <section id="about"  style="padding-bottom:100px;">
                              <div class="about">
                            <!-- Slider main container -->
                                <div class="swiper">
                                  <!-- Additional required wrapper -->
                                  <div class="swiper-wrapper">
                                    <!-- Slides -->
                                       @foreach($bedroom as $key=>$bed)
                                    <div class="swiper-slide">
                                        <div class="container-xl">
                                  <div class="about-inner ">
                                    <div class="row">
                                         
                                      <div class="col-lg-6">
                                        <div class="about-text">
                                          <div class="about-heading-wrap">
                        				  <!--<span>Kitchens & Bathrooms</span>-->
                                            <!--<h2 class=" mb_40 wow fadeInUp" data-wow-delay="0.2s">title</h2>-->
                                          </div>
                        				  <div class="wow fadeInUp mb-2" data-wow-delay="0.3s">{!!$bed->desc!!}</div>
                                          <!--<a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.4s" type="button"><span>View Portfolio</span></a>-->
                                        </div>
                                      </div>
                                      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                                        <figure> <a href="{{asset('public/images/bedroom/'.$bed->image)}}"> 
                                        
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                             
                                              <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                  <img src="{{asset('public/images/bedroom/'.$bed->image)}}" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                             
                                            </div>
                                        </a> </figure>
                                      </div>
                                      </div>
                                       </div>
                                        </div>
                                    
                                    </div>
                                     @endforeach
                                  </div>
                                  <!-- If we need pagination -->
                                  <div class="swiper-pagination"></div>
                                 
                                  <!-- If we need navigation buttons -->
                                  <!--<div class="swiper-button-prev"></div>-->
                                  <!--<div class="swiper-button-next"></div>-->
                                </div>
                              </div>
                            </section>
                            <!-- =====  ABOUT END  ===== -->        
                          </div>
                          <div class="tab-pane fade {{($type == 'studio')? 'show active':''}}" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <!-- =====  ABOUT START  ===== -->
                              <section id="about"  style="padding-bottom:100px;">
                              <div class="about">
                            <!-- Slider main container -->
                                <div class="swiper">
                                  <!-- Additional required wrapper -->
                                  <div class="swiper-wrapper">
                                    <!-- Slides -->
                                       @foreach($studio as $key=>$stud)
                                    <div class="swiper-slide">
                                        <div class="container-xl">
                                  <div class="about-inner ">
                                    <div class="row">
                                         
                                      <div class="col-lg-6">
                                        <div class="about-text">
                                          <div class="about-heading-wrap">
                        				  <!--<span>Kitchens & Bathrooms</span>-->
                                            <!--<h2 class=" mb_40 wow fadeInUp" data-wow-delay="0.2s">title</h2>-->
                                          </div>
                        				  <div class="wow fadeInUp mb-2" data-wow-delay="0.3s">{!!$stud->desc!!}</div>
                                          <!--<a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.4s" type="button"><span>View Portfolio</span></a>-->
                                        </div>
                                      </div>
                                      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                                        <figure> <a href="{{asset('public/images/studio/'.$stud->image)}}"> 
                                        
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                             
                                              <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                  <img src="{{asset('public/images/studio/'.$stud->image)}}" class="d-block w-100" alt="...">
                                                </div>
                                              </div>
                                             
                                            </div>
                                        </a> </figure>
                                      </div>
                                      </div>
                                       </div>
                                        </div>
                                    
                                    </div>
                                     @endforeach
                                  </div>
                                  <!-- If we need pagination -->
                                  <div class="swiper-pagination"></div>
                                  <!-- If we need navigation buttons -->
                                  <!--<div class="swiper-button-prev"></div>-->
                                  <!--<div class="swiper-button-next"></div>-->
                                </div>
                              </div>
                            </section>
                            <!-- =====  ABOUT END  ===== -->        
                          </div>
                         
                          
                        </div>
                  </div>
              </div>
          </div>
    
    <!---->
    
    
    
    
    
    
    
    
   {{-- <section class="text-center my-5" >
		<div class="container-xl">
			<div class="about-inner ">
				<div class="row">
			@foreach($gallery as $item)
					<div class="col-lg-5 wow fadeInUp"  data-wow-delay="0.2s">
						<figure> <a href="{{asset('public/images/gallery/'.$item->image)}}" data-fancybox="group"><img src="{{asset('public/images/gallery/'.$item->image)}}" alt="#"></a> </figure>
					</div>
            @endforeach
				</div>	
			</div>
		</div>	
	</section> --}}
	
	
    <!-- =====  WORK WITH US STRAT  ===== -->
  {{--  <section class=" parallax ptb_50 d-none" id="Availability" data-source-url="images/fre2.jpg">
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
    </section> --}}
    <!-- =====  WORK WITH US END  ===== -->
@endsection