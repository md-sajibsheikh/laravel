 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
         <span class="sr-only">Loading...</span>
     </div>
 </div>
 <!-- Spinner End -->


 <!-- Topbar Start -->
 <div class="container-fluid bg-light p-0">
     <div class="row gx-0 d-none d-lg-flex">
         <div class="col-lg-7 px-5 text-start">
             <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                 <small class="fa fa-map-marker-alt text-primary me-2"></small>
                 <small>123 Street, New York, USA</small>
             </div>
             <div class="h-100 d-inline-flex align-items-center py-3">
                 <small class="far fa-clock text-primary me-2"></small>
                 <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
             </div>
         </div>
         <div class="col-lg-5 px-5 text-end">
             <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                 <small class="fa fa-phone-alt text-primary me-2"></small>
                 <small>+012 345 6789</small>
             </div>
             <div class="h-100 d-inline-flex align-items-center">
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->

 <body>
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
         <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
             <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2>
         </a>
         <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto p-4 p-lg-0">
                 <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                 <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                 <a href="{{url('/service')}}" class="nav-item nav-link">Services</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                     <div class="dropdown-menu fade-up m-0">
                         <a href="{{url('booking')}}" class="dropdown-item">Booking</a>
                         <a href="{{url('team')}}" class="dropdown-item">Technicians</a>
                         <a href="{{url('testimonial')}}" class="dropdown-item">Testimonial</a>
                         <a href="{{url('/404')}}" class="dropdown-item">404 Page</a>
                     </div>
                 </div>
                 <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>

                 <a href="{{route('login')}}" class="nav-item nav-link">Login/Singup</a>

             </div>


         </div>
     </nav>