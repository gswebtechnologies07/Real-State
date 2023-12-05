@extends('admin.layout.front')

@section('content')
    
    <!-- =====  BANNER STRAT  ===== -->
    <div class="banner2 large-header bg-color" id="large-header">
      <!--<div id="smoky">-->
      <!--  <canvas></canvas>-->
      <!--</div>-->
      <div class="banner-detail">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-interval="3000" data-bs-ride="carousel">
		  <div class="carousel-inner">
      @foreach($slider as $key=>$slid)
			<div class="carousel-item @if($key==0)active @endif">
			  <a href="{{asset('public/images/slider/'.$slid->img)}}" data-fancybox="group"><img src="{{asset('public/images/slider/'.$slid->img)}}" alt="#"></a>
			</div>
      @endforeach
      </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
			<div class="cd-intro d-none">
          <h1 class="cd-headline letters type"> <span class="cd-words-wrapper waiting"> <b class="is-visible">Welcome to </b> <b>39 High Street</b>  </span> </h1>
          <a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.2s" type="button"><span>LATEST WORKS</span></a>
        </div>
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  ABOUT START  ===== -->
    <section id="about" class="py-5">
      <div class="about">
        <div class="container-xl py-5">
          <div class="about-inner " style="padding-bottom: 60px;">
            <div class="row">
                @foreach($residence as $item)
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <figure>  <a href="{{asset('public/images/residences/'.$item->image)}}" data-fancybox="group"> <img src="{{asset('public/images/residences/'.$item->image)}}" alt="#"> </a> </figure>
              </div>
              <div class="col-lg-6">
                <div class="about-text">
                  <div class="about-heading-wrap">
                    <h2 class="about-heading letters mb_40 wow fadeInUp" data-wow-delay="0.2s">{{$item->title}}</h2>
                  </div>
                  <div class="wow fadeInUp" data-wow-delay="0.3s"> {!!$item->desc!!}</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =====  ABOUT END  ===== -->
    
    <!--<section id="about" class="py-4">-->
    <!--  <div class="about">-->
    <!--    <div class="container-xl">-->
    <!--      <div class="about-inner ">-->
    <!--        <div class="row">-->
    <!--          <div class="col-lg-6">-->
    <!--            <div class="about-text">-->
    <!--              <div class="about-heading-wrap">-->
    <!--                <h2 class="about-heading letters mb_40 wow fadeInUp" data-wow-delay="0.2s">Welcome to 39 High Street</h2>-->
    <!--              </div>-->
    <!--              <p class="wow fadeInUp" data-wow-delay="0.3s">Located in the lively Journal Square neighborhood and a mere 5 minutes from the PATH station, 39 High Street is a newly constructed residential building that offers 83 beautifully designed studio, one, two, and three-bedroom apartments, most of which feature private terraces. This building is the epitome of luxury living, with amenities such as a beautifully landscaped rooftop, bike storage, and a parking garage. Make 39 High Street your new home and experience the ultimate elevated lifestyle.</p>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">-->
    <!--            <figure>  <a href="#" data-fancybox="group"> <img src="#" alt="#"> </a> </figure>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <!-- =====  ABOUT END  ===== -->
    <section class="text-center py-5 new_trem_and" >
		<div class="container-xl">
			<div class="about-inner " style="padding-bottom: 60px;">
				<div class="row">
				    
				     <div class="col-md-4 mb-4 mb-md-0">
				        <div class="team3 ">
				            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-interval="3000" data-bs-ride="carousel">
		                        <div class="carousel-inner">
		                            <div class="carousel-indicators">
		                                 @foreach($building as $key=>$buil)
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to={{$key}} class=" @if($key==0)active @endif" aria-label="Slide {{$key + 1}}"></button>
                                                   @endforeach
                                              
                                              </div>
		          
		                                 @foreach($building as $key=>$buil)
                                        <div class="carousel-item @if($key==0)active @endif">
                                            <figure> 
                                                <a href="{{asset('public/images/building/'.$buil->image)}}" data-fancybox="group">
                                                    <img src="{{asset('public/images/building/'.$buil->image)}}" alt="#"></a> 
                                            </figure>
                                        </div>
                                        @endforeach
                				 
                				</div> 
                			</div>	
			    	    </div>
			    	    <div class="col-xs-12">
                          <a href="{{url('residences')}}?type=building" class="custom-btn custom-btns light mt_30"  type="submit"><span>Common Roof Deck</span></a>
                        </div>
				    </div>
				    <div class="col-md-4 mb-4 mb-md-0">
				        <div class="team3 ">
				            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-interval="3000" data-bs-ride="carousel">
		                        <div class="carousel-inner">
		                              <div class="carousel-indicators">
		                             @foreach($bedroom as $key=>$buil)
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to={{$key}} class=" @if($key==0)active @endif" aria-label="Slide {{$key + 1}}"></button>
                                                   @endforeach
		                                       </div>
		                                 @foreach($bedroom as $key=>$bed)
                                        <div class="carousel-item @if($key==0)active @endif">
                                            <figure> 
                                                <a href="{{asset('public/images/bedroom/'.$bed->image)}}" data-fancybox="group">
                                                    <img src="{{asset('public/images/bedroom/'.$bed->image)}}" alt="#"></a> 
                                            </figure>
                                        </div>
                                        @endforeach
                				 
                				</div> 
                			</div>	
			    	    </div>
			    	    <div class="col-xs-12">
                          <a href="{{url('residences')}}?type=bedroom" class="custom-btn custom-btns light mt_30" type="submit"><span>1 Bedroom</span></a>
                        </div>
				    </div>
				     <div class="col-md-4 mb-4 mb-md-0">
				        <div class="team3 ">
				            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-interval="3000" data-bs-ride="carousel">
		                        <div class="carousel-inner">
		                             <div class="carousel-indicators">
		                                        @foreach($studio as $key=>$buil)
                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to={{$key}} class=" @if($key==0)active @endif" aria-label="Slide {{$key + 1}}"></button>
                                                   @endforeach
                                                   </div>
		                                 @foreach($studio as $key=>$stud)
                                        <div class="carousel-item @if($key==0)active @endif">
                                            <figure> 
                                                <a href="{{asset('public/images/studio/'.$stud->image)}}" data-fancybox="group">
                                                    <img src="{{asset('public/images/studio/'.$stud->image)}}" alt="#"></a> 
                                            </figure>
                                        </div>
                                        @endforeach
                				 
                				</div> 
                			</div>	
			    	    </div>
			    	    <div class="col-xs-12">
                          <a href="{{url('residences')}}?type=studio" class="custom-btn custom-btns light mt_30" type="submit"><span>Studio</span></a>
                        </div>
				    </div>
			    </div>
		    </div>	
	</section>
  <div class="heading-part text-center pb-3 pt-4">
              <h2 class=" wow fadeInUp" data-wow-delay="0.6s">TO LEARN MORE, CONTACT US WITH YOUR INFO BELOW</h2>
            </div>
    <section class=" my-5 new_trem_and" >
	    <div class="container-xl">
    	    <div class="row">
                <div class="col-lg-6 ">
                  <div class="contact-form mb_50 wow fadeInUp" data-wow-delay="0.7s">
                    <!-- Contact FORM -->
                    <div id="contact_form">
                         @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                      <form id="contact_body" method="post" action="{{ route('contact.us.store') }}" enctype="multipart/form-data">
                           {{ csrf_field() }}
                        <div class="col-xs-12 ">
                          <input class="full-with-form mt_30" type="text" name="name" placeholder="Name" data-required="true" />
                        </div>
                        <div class="col-xs-12 ">
                          <input class="full-with-form mt_30" type="email" name="email" placeholder="Email Address" data-required="true" />
                        </div>
                        <div class="col-xs-12 ">
                          <input class="full-with-form mt_30" type="text" name="phone" placeholder="Phone Number" maxlength="15" data-required="true" />
                        </div>
                        
                        <div class="col-xs-12">
                          <input class="full-with-form mt_30" type="text" name="subject" placeholder="Subject" data-required="true">
                        </div>
                        <div class="col-xs-12">
                          <textarea class="full-with-form  mt_30" name="message" placeholder="Message" data-required="true"></textarea>
                        </div>
                        <div class="col-xs-12">
                          <button class="custom-btn custom-btns light mt_30" type="submit"><span>Send Message</span></button>
                        </div>
                      </form>
                      <div id="contact_results" class="mt_40"></div>
                    </div>
                    <!-- END Contact FORM -->
                  </div>
                </div>  
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h4 class="mb-3 text-center">NEIGHBORHOOD</h4>
                    <div id="map">
                       <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.509700536433!2d-74.06450922510365!3d40.728808736588164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2573304713af5%3A0x25819ad18c7a221e!2s53%20High%20St%2C%20Jersey%20City%2C%20NJ%2007306%2C%20USA!5e0!3m2!1sen!2sin!4v1700026879113!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  
    
    <!-- =====  WORK WITH US STRAT  ===== -->
    <section class=" parallax ptb_50 d-none" id="Availability" data-source-url="{{ asset('public/front/images/fre2.jpg')}}">
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