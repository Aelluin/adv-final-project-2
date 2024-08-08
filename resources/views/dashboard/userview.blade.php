@extends('dashboard.dapp')

@section('style')
@endsection
@section('content')
<!-- Header Start -->
   <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
     <div class="row align-items-center px-3">
       <div class="col-lg-6 text-center text-lg-left">
         <h4 class="text-white mb-4 mt-5 mt-lg-0">Bloggit</h4>
         <h1 class="display-3 font-weight-bold text-white">
          A web based blogging system.
         </h1>
         <p class="text-white mb-4">
           Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed
           sit. Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed
           ipsum at ipsum nonumy amet. Clita lorem dolore sed stet et est justo
           dolore.
         </p>
       </div>
       <div class="col-lg-6 text-center text-lg-right">
         <img class="img-fluid mt-5" src="img/header.png" alt="" />
       </div>
     </div>
   </div>
   <!-- Header End -->

   <!-- Registration Start -->
   <div class="container-fluid py-5">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-lg-7 mb-5 mb-lg-0">
           <p class="section-title pr-5">
             <span class="pr-2">Book A Seat</span>
           </p>
           <h1 class="mb-4">Book A Seat For Your Kid</h1>
           <p>
             Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
             dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
             Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
             dolor
           </p>
           <ul class="list-inline m-0">
             <li class="py-2">
               <i class="fa fa-check text-success mr-3"></i>Labore eos amet
               dolor amet diam
             </li>
             <li class="py-2">
               <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
               amet ipsum
             </li>
             <li class="py-2">
               <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
               elitripsum vero.
             </li>
           </ul>
           <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
         </div>
         <div class="col-lg-5">
           <div class="card border-0">
             <div class="card-header bg-secondary text-center p-4">
               <h1 class="text-white m-0">Book A Seat</h1>
             </div>
             <div class="card-body rounded-bottom bg-primary p-5">
               <form>
                 <div class="form-group">
                   <input
                     type="text"
                     class="form-control border-0 p-4"
                     placeholder="Your Name"
                     required="required"
                   />
                 </div>
                 <div class="form-group">
                   <input
                     type="email"
                     class="form-control border-0 p-4"
                     placeholder="Your Email"
                     required="required"
                   />
                 </div>
                 <div class="form-group">
                   <select
                     class="custom-select border-0 px-4"
                     style="height: 47px"
                   >
                     <option selected>Select A Class</option>
                     <option value="1">Class 1</option>
                     <option value="2">Class 1</option>
                     <option value="3">Class 1</option>
                   </select>
                 </div>
                 <div>
                   <button
                     class="btn btn-secondary btn-block border-0 py-3"
                     type="submit"
                   >
                     Book Now
                   </button>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Registration End -->



   <!-- Testimonial Start -->
   <div class="container-fluid py-5">
     <div class="container p-0">
       <div class="text-center pb-2">
         <p class="section-title px-5">
           <span class="px-2">Testimonial</span>
         </p>
         <h1 class="mb-4">What Parents Say!</h1>
       </div>
       <div class="owl-carousel testimonial-carousel">
         <div class="testimonial-item px-3">
           <div class="bg-light shadow-sm rounded mb-4 p-4">
             <h3 class="fas fa-quote-left text-primary mr-3"></h3>
             Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
             eirmod clita lorem. Dolor tempor ipsum clita
           </div>
           <div class="d-flex align-items-center">
             <img
               class="rounded-circle"
               src="img/testimonial-1.jpg"
               style="width: 70px; height: 70px"
               alt="Image"
             />
             <div class="pl-3">
               <h5>Parent Name</h5>
               <i>Profession</i>
             </div>
           </div>
         </div>
         <div class="testimonial-item px-3">
           <div class="bg-light shadow-sm rounded mb-4 p-4">
             <h3 class="fas fa-quote-left text-primary mr-3"></h3>
             Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
             eirmod clita lorem. Dolor tempor ipsum clita
           </div>
           <div class="d-flex align-items-center">
             <img
               class="rounded-circle"
               src="img/testimonial-2.jpg"
               style="width: 70px; height: 70px"
               alt="Image"
             />
             <div class="pl-3">
               <h5>Parent Name</h5>
               <i>Profession</i>
             </div>
           </div>
         </div>
         <div class="testimonial-item px-3">
           <div class="bg-light shadow-sm rounded mb-4 p-4">
             <h3 class="fas fa-quote-left text-primary mr-3"></h3>
             Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
             eirmod clita lorem. Dolor tempor ipsum clita
           </div>
           <div class="d-flex align-items-center">
             <img
               class="rounded-circle"
               src="img/testimonial-3.jpg"
               style="width: 70px; height: 70px"
               alt="Image"
             />
             <div class="pl-3">
               <h5>Parent Name</h5>
               <i>Profession</i>
             </div>
           </div>
         </div>
         <div class="testimonial-item px-3">
           <div class="bg-light shadow-sm rounded mb-4 p-4">
             <h3 class="fas fa-quote-left text-primary mr-3"></h3>
             Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr
             eirmod clita lorem. Dolor tempor ipsum clita
           </div>
           <div class="d-flex align-items-center">
             <img
               class="rounded-circle"
               src="img/testimonial-4.jpg"
               style="width: 70px; height: 70px"
               alt="Image"
             />
             <div class="pl-3">
               <h5>Parent Name</h5>
               <i>Profession</i>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Testimonial End -->

   <!-- Blog Start -->
   <div class="container-fluid pt-5">
     <div class="container">
       <div class="text-center pb-2">
         <p class="section-title px-5">
           <span class="px-2">Latest Blog</span>
         </p>
         <h1 class="mb-4">Latest Articles From Blog</h1>
       </div>
       <div class="row pb-3">
         <div class="col-lg-4 mb-4">
           <div class="card border-0 shadow-sm mb-2">
             <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
             <div class="card-body bg-light text-center p-4">
               <h4 class="">Diam amet eos at no eos</h4>
               <div class="d-flex justify-content-center mb-3">
                 <small class="mr-3"
                   ><i class="fa fa-user text-primary"></i> Admin</small
                 >
                 <small class="mr-3"
                   ><i class="fa fa-folder text-primary"></i> Web Design</small
                 >
                 <small class="mr-3"
                   ><i class="fa fa-comments text-primary"></i> 15</small
                 >
               </div>
               <p>
                 Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                 eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                 lorem. Tempor ipsum justo amet stet...
               </p>
               <a href="" class="btn btn-primary px-4 mx-auto my-2"
                 >Read More</a
               >
             </div>
           </div>
         </div>
         <div class="col-lg-4 mb-4">
           <div class="card border-0 shadow-sm mb-2">
             <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="" />
             <div class="card-body bg-light text-center p-4">
               <h4 class="">Diam amet eos at no eos</h4>
               <div class="d-flex justify-content-center mb-3">
                 <small class="mr-3"
                   ><i class="fa fa-user text-primary"></i> Admin</small
                 >
                 <small class="mr-3"
                   ><i class="fa fa-folder text-primary"></i> Web Design</small
                 >
                 <small class="mr-3"
                   ><i class="fa fa-comments text-primary"></i> 15</small
                 >
               </div>
               <p>
                 Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                 eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                 lorem. Tempor ipsum justo amet stet...
               </p>
               <a href="" class="btn btn-primary px-4 mx-auto my-2"
                 >Read More</a
               >
             </div>
           </div>
         </div>
         <div class="col-lg-4 mb-4">
           <div class="card border-0 shadow-sm mb-2">
             <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="" />
             <div class="card-body bg-light text-center p-4">
               <h4 class="">Diam amet eos at no eos</h4>
               <div class="d-flex justify-content-center mb-3">
                 <small class="mr-3"
                   ><i class="fa fa-user text-primary"></i> Admin</small
                 >
                 <small class="mr-3"
                   ><i class="fa fa-folder text-primary"></i> Web Design</small
                 >
                 <small class="mr-3"
                   ><i class="fa fa-comments text-primary"></i> 15</small
                 >
               </div>
               <p>
                 Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                 eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                 lorem. Tempor ipsum justo amet stet...
               </p>
               <a href="" class="btn btn-primary px-4 mx-auto my-2"
                 >Read More</a
               >
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Blog End -->

@endsection
@section('script')
@endsection
