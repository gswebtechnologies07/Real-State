@extends('admin.layout.front')
@section('content')
<div class="banner2 large-header bg-color" id="large-header">
    <div id="smoky">
        <canvas></canvas>
    </div>
    <div class="banner-About" style="background-image: url({{asset('public/images/cmspage/'.$cmspages->banner_img)}});">
    <!--<img src="" alt="" title="test">-->
    </div>
</div>
<section id="contact" class="">
    <div class="container">
        <div class="row text-left">
            <div class="col-md-4 col-sm-6 mt_30 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-i-left">
                    <div class="icon-right"><i class="icon ion-location"></i></div>
                    <h4 class="mb_10 title">Our Location</h4>
                    <p>{{$setting->address}}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt_30 wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature-i-left">
                    <div class="icon-right"><i class="icon ion-paper-airplane"></i></div>
                    <h4 class="mb_10 title">Send E-mail</h4>
                    <div class="email"> <a href="mailto:info@yourdomailname.com" target="_top">{{$setting->email}}</a> </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt_30 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-i-left">
                    <div class="icon-right"><i class="icon ion-ipad"></i></div>
                    <h4 class="mb_10 title">Contact Us</h4>
                    <p>{{$setting->phone}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="pb_100 new_one">-->
<!--      <div class="container">-->
        
<!--            <div class="heading-part text-center pb-5">-->
<!--              <h2 class="main_title mb_20 wow fadeInUp text-dark" data-wow-delay="0.5s">Get In Touch</h2>-->
<!--              <p class=" wow fadeInUp" data-wow-delay="0.6s">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>-->
<!--            </div>-->
         
        <!-- contact  -->
<!--        <div class="row">-->
<!--            <div class="col-lg-6 ">-->
<!--              <div class="contact-form mb_50 wow fadeInUp" data-wow-delay="0.7s">-->
                <!-- Contact FORM -->
<!--                <div id="contact_form">-->
<!--                  <form id="contact_body" method="post" action="https://html.lionode.com/jobado/layout/contact_me.php">-->
<!--                    <div class="col-xs-12 ">-->
<!--                      <input class="full-with-form mt_30" type="text" name="name" placeholder="Name" data-required="true" />-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 ">-->
<!--                      <input class="full-with-form mt_30" type="email" name="email" placeholder="Email Address" data-required="true" />-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 ">-->
<!--                      <input class="full-with-form mt_30" type="text" name="phone1" placeholder="Phone Number" maxlength="15" data-required="true" />-->
<!--                    </div>-->
                    
<!--                    <div class="col-xs-12">-->
<!--                      <input class="full-with-form mt_30" type="text" name="subject" placeholder="Subject" data-required="true">-->
<!--                    </div>-->
<!--                    <div class="col-xs-12">-->
<!--                      <textarea class="full-with-form  mt_30" name="message" placeholder="Message" data-required="true"></textarea>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12">-->
<!--                      <button class="custom-btn custom-btns light mt_30" type="button"><span>Send Message</span></button>-->
<!--                    </div>-->
<!--                  </form>-->
<!--                  <div id="contact_results" class="mt_40"></div>-->
<!--                </div>-->
                <!-- END Contact FORM -->
<!--              </div>-->
<!--            </div>  -->
<!--        </div>-->
        <!-- map  -->
<!--    <style>-->
<!--        #map .map-class{-->
<!--            width:100%;-->
<!--            height:100%;-->
<!--        }-->
<!--    </style>-->
<!--        <div class="row mt_100 wow fadeInUp" data-wow-delay="0.2s">-->
<!--          <div class="col-xs-12 map">-->
<!--            <div id="map">-->
<!--                <iframe class="map-class"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.509700536433!2d-74.06450922510365!3d40.728808736588164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2573304713af5%3A0x25819ad18c7a221e!2s53%20High%20St%2C%20Jersey%20City%2C%20NJ%2007306%2C%20USA!5e0!3m2!1sen!2sin!4v1700026879113!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
    
    
        <section class=" new_trem_and" style="background:white;" >
	    <div class="container-xl py-5">
	         <div class="heading-part text-center pb-5">
              <h2 class="main_title mb_20 wow fadeInUp text-dark" data-wow-delay="0.5s">Get In Touch</h2>
              <p class=" wow fadeInUp" data-wow-delay="0.6s">TO LEARN MORE, CONTACT US WITH YOUR INFO BELOW</p>
            </div>
         
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
                      <form id="contact_body" method="post" action="{{ route('contact.us.store') }}" enctype="multipart/form-data" >
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
                       <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.509700536433!2d-74.06450922510365!3d40.728808736588164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2573304713af5%3A0x25819ad18c7a221e!2s53%20High%20St%2C%20Jersey%20City%2C%20NJ%2007306%2C%20USA!5e0!3m2!1sen!2sin!4v1700026879113!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection