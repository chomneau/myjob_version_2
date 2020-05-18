@extends('frontend.layout.main-template-non-home')
@section('content')
<section>
  <div class="block no-padding" style="background-color:#D4FCFA">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner2">
            <div class="inner-title2">
              <h3>Contact</h3>
              <span>Keep up to date with the latest news</span>
            </div>
            <div class="page-breacrumbs">
              <ul class="breadcrumbs">
                <li><a href="/" title="">Home</a></li>
                
                <li><a href="/contact" title="">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="block">
    <div class="container">
       <div class="row">
         <div class="col-lg-6 column">
           <div class="contact-form">

              @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
              @endif

             <h3>Keep In Touch</h3>
             <form action="{{ route('contact.store') }}" method="post">
                {{csrf_field()}}
               <div class="row">
                 <div class="col-lg-12">
                   <span class="pf-title">Full Name</span>
                   <div class="pf-field">
                     <input type="text" name="name" placeholder="Your name" />
                   </div>
                 </div>
                 <div class="col-lg-12">
                   <span class="pf-title">Email</span>
                   <div class="pf-field">
                     <input type="text" name="email" placeholder="your email (ex:jonh@yourmail.com)" />
                   </div>
                 </div>
                 <div class="col-lg-12">
                   <span class="pf-title">Subject</span>
                   <div class="pf-field">
                     <input type="text" name="title" placeholder="Subject" />
                   </div>
                 </div>
                 <div class="col-lg-12">
                   <span class="pf-title">Message</span>
                   <div class="pf-field">
                     <textarea name="body"></textarea>
                   </div>
                 </div>
                 <div class="col-lg-12">
                   <button type="submit">Send</button>
                 </div>
               </div>
             </form>
           </div>
         </div>
         <div class="col-lg-6 column">
           <div class="contact-textinfo">
             <h3>Our Contact</h3>
             <ul>
               {{-- <li><i class="la la-map-marker"></i><span>Jobify Inc. 555 Madison Avenue, Suite F-2 Manhattan, New York 10282 </span></li> --}}
               <li><i class="la la-phone"></i><span>Call Us :  (+855) 70 900 928</span></li>
               
               <li><i class="la la-envelope-o"></i><span>Email : paysjob@gmail.com</span></li>
             </ul>
             <a class="fill" href="#" title="">See on Map</a><a href="#" title="">Directions</a>
           </div>

           <div class="image" style="margin-left:-60px">
           <img src="{{ asset('../images/contact_bg.svg')}}" alt="" width="550px" height="auto">
           </div>
          </div>
       </div>
    </div>
  </div>
</section>
@endsection