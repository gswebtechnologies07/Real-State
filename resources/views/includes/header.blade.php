<header id="header">
     <nav class="navbar navbar-expand-lg navbar-light ">
       <div class="container-xl">
         <a class="navbar-brand" href="{{asset('public/images/setting/'.$setting->logo)}}"></a>
         <img class="navbar-brand" src="{{asset('public/images/setting/'.$setting->logo)}}" width="250px">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
           <ul class="navbar-nav">
                 <li class="nav-item active"> <a class="nav-link" href="{{url('/')}}">Home</a></li>
             <li class="nav-item"> <a class="nav-link" href="{{url('about')}}">About</a></li>
             <li class="nav-item"> <a class="nav-link " href="{{url('residences')}}">Residences</a></li>
             <!--<li class="nav-item"> <a class="nav-link" href="{{url('amenities')}}">Amenities</a></li>-->
             <!--<li class="nav-item"> <a class="nav-link" href="{{url('jersey-city')}}">Jersey City</a></li>-->
             <!--<li class="nav-item"> <a class="nav-link" href="{{url('project')}}">Project</a></li>-->
             <li class="nav-item"> <a class="nav-link" href="{{url('contact')}}">Contact</a></li>
           </ul>
         </div>
       </div>
     </nav>
 </header>