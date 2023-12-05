@extends('admin.layout.front')
@section('content')
  <!-- =====  BANNER STRAT  ===== -->
    <div class="banner2 large-header bg-color" id="large-header">
      <div id="smoky">
        <canvas></canvas>
      </div>
      <div class="banner-About" style="background-image: url({{asset('public/images/cmspage/'.$cmspages->banner_img)}});">
        <!--<img src="{{asset('public/images/cmspage/'.$cmspages->banner_img)}}" alt="" title="test">-->
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  ABOUT START  ===== -->
    <!--<section id="about" class="py-5 prject">-->
    <!--  <div class="about">-->
    <!--    <div class="container-xl">-->
    <!--      <div class="about-inner ">-->
    <!--        <div class="row">-->
    <!--            @foreach($residence as $item)-->
    <!--        <div class="col-lg-4 wow fadeInUp mb-4" data-wow-delay="0.2s">-->
    <!--            <div>-->
    <!--            <figure>  <a href="{{asset('public/images/gallery/'.$item->image)}}" data-fancybox="group"> <img src="{{asset('public/images/gallery/'.$item->image)}}" alt="#"> </a> </figure>-->
    <!--            </div>-->
    <!--             <div class="about-text mt-3">-->
    <!--              <div class="about-heading-wrap">-->
    <!--                <h6 class="about-heading letters mb_40 wow fadeInUp" data-wow-delay="0.2s">{{$item->title}}</h6>-->
    <!--              </div>-->
    <!--              <p class="wow fadeInUp" data-wow-delay="0.3s">{!!$item->desc!!}</p>-->
    <!--              <a href="project_details.html" type="button" class="btn btn-outline-warning mt-3 rounded">Warning</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        @endforeach-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

	
    <section id="about" class="pt-5">
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
                  <a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.4s" type="button"><span>View Portfolio</span></a>
                </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <figure> <a href="{{asset('public/images/residences/'.$item->image)}}"> <img src="{{asset('public/images/residences/'.$item->image)}}" alt="#"> </a> </figure>
              </div>
               @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection