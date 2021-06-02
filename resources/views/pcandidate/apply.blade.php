<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="description" content="Lewis - Creative Portfolio HTML Template">
    <meta name="author" content="Paul, Logan Cee">

    <title>Cara Recruitment</title>

    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.pagepiling.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/LineIcons.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/cara-01.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/cara-01.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/cara-01.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicons/safari-pinned-tab.svg') }}" color="#222222">
    <link rel="shortcut icon" href="{{ asset('assets/img/cara-01.png') }}">
    <meta name="msapplication-TileColor" content="#222222">
    <meta name="msapplication-config" content="{{ asset('assets/img/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

  </head>

  <body class="body-copyright-light">
    <div class="preloader">
      <div class="three-bounce">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>
    </div>
    <div class="wrapper">
      <header id="header" class="header header-fixed">
        <div class="header-bg"></div>
        <div class="container-fluid clearfix">
          <div class="brand">
            <a href="/cara_recruitment/public/">
              <div class="brand-name font-custom"><img src="{{ asset('assets/img/cara logo-03.png') }}"style="width: 150px;" alt=""></div>
            </a>
          </div>

          <button class="nav-toggle-btn a-nav-toggle">
            <span class="nav-toggle">
              <span class="stick stick-1"></span>
              <span class="stick stick-2"></span>
            </span>
          </button>

          <div class="header-content d-none d-md-block">
            <div class="row">
              <div class="col-md-3">
                <div class="header-tagline">CARA<br /> rECRUITMENT</div>
              </div>
              <div class="col-md-9">
                <div class="header-contacts">
                  <div class="header-contact-item">Call me.&nbsp; <a href="tel:+7068980751" class="phone-link">+603-88007700</a></div>
                  <div class="header-contact-divider">/</div>
                  <div class="header-contact-item"><a href="mailto:Cara.design@gmail.com" class="mail-link">caracommy@gmail.com</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hide-menu a-nav-toggle"></div>

        <div class="menu">
          <div class="menu-lang">
            <a href="#" class="menu-lang-item active">Eng</a>
            <a href="#" class="menu-lang-item">fra</a>
            <a href="#" class="menu-lang-item">ger</a>
          </div>

          <nav class="menu-main" id="accordion">
            <ul id="menuMain">
                <li data-menuanchor="Intro" class="active"><a href="/cara_recruitment/public/">Home</a></li>
                <li data-menuanchor="Services"><a href="#Services">Job Listing</a></li>
                <li data-menuanchor="Projects"><a href="#Projects">Missions</a></li>
                <li data-menuanchor="Awards"><a href="#Awards">Working Here</a></li>
                <li data-menuanchor="Experience"><a href="#Experience">Achievements</a></li>
                <li data-menuanchor="Clients"><a href="#Clients">Testimonials</a></li>
                <li data-menuanchor="Testimonials"><a href="#Testimonials">Contact</a></li>
              </ul>
          </nav>

          <div class="menu-footer">
              <ul class="social social-rounded">
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-facebook-original"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
              </ul>
            <div class="menu-copyright">&copy; Cara 2020<br /> All Rights Reserved</div>
          </div>
        </div>
      </header>


      <div id="content" class="content">
        <div class="homepage-personal a-pagepiling">


            <div class="section pp-scrollable slide-dark slide-dark-footer slide-personal-intro">
                <div class="slide-container">
                  <div class="slide-bg">
                    <div class="slide-photo circle-golden slide-intro-circle1 transformLeft"></div>
                    <div class="slide-photo circle-brown slide-intro-circle2 transformRight"></div>
                    <!-- <div class="slide-photo slide-intro-man"></div> -->
                  </div>
                   @foreach ($jobs as $job) 
                   
                   
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-6 col-lg-6 col-10">
                          {{-- <img class="w-50 mb-3 animate-element delay5 fadeInDown" src="{{ asset('assets/img/LOGO_COMPANY_CARA_NST_DATACARA_2021-01.png') }}" alt=""> --}}
                        {{-- <h1 class="slide-title-sub animate-element delay5 fadeInDown" style="font-size: 25px;" <img style="height:100px;width:170px"
                         src="{{ asset('/storage'.$job->company_logo) }}"></img> </h1>  --}}



                        <h3 class="slide-title-sub animate-element delay5 fadeInDown">{{ $job->salary_from }}- {{ $job->salary_to }}</h3>
                        <div class="animate-element delay5 fadeInUp">
                          <h3 class="slide-title-sub">{{ $job->position}}</h3>
                          <div class="slide-descr slide-descr-intro">@php echo $job->description @endphp</div>
                          {{-- <div class="slide-btn">
                            <button class="btn btn-success" data-toggle="modal" data-target="#send-request">get started</button>
                          </div> --}}
                        </div>
                      </div>
                      <div class="col-lg-6 animate-element delay7 fadeInUp">
                        <!-- <div class="slide-title-info">Let's grab a coffee and jump on  conversation <span class="text-primary">chat with me.</span></div> -->
                        <form action="{{ route('success') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <!-- <form class="contact-personal-form a-ajax-form"> -->
                          <div class="form-group form-group-material a-form-group">
                            <label class="label">Full name</label>
                            <input type="text" class="form-control" name="fullname" required />
                          </div>
                          <div class="form-group form-group-material a-form-group">
                            <label class="label">Email</label>
                            <input type="email" class="form-control" name="email" required />
                          </div>
                          <div class="form-group form-group-material a-form-group">
                            <label class="label">Phone Number</label>
                            <input type="tel" class="form-control" name="contact" required />
                          </div>
                          <div class="form-group form-group-material a-form-group">
                            <label class="label">Address</label>
                            <textarea class="form-control" name="address" cols="30" rows="3"></textarea>
                          </div>
                          <div class="form-group form-group-material a-form-group">
                            <label class="label">Category</label>
                            {{-- <textarea class="form-control" name="category" cols="30" rows="3"></textarea> --}}
                            <input type="text" class="form-control" name="category"  value="{{ $job->category }}"  readonly />
                          </div>
                          <div class="form-group form-group-material a-form-group">
                            <label class="label">Position</label>
                            {{-- <textarea class="form-control" name="position" cols="30" rows="3"></textarea> --}}
                            <input type="text" class="form-control" name="position"  value="{{ $job->position}}"  readonly/>
                          </div>
                          <div class="form-group control-file a-file">
                            <input type="file" name="attachment" accept=".doc,.pdf,.docx" multiple />
                            <div class="file-path-wrapper">
                            <i class="lni lni-paperclip text-primary"></i>
                             <input class="file-path form-control" placeholder="Add Attachment(.doc;.pdf)" />
                            </div>
                            </div>
                          <div class="message text-success success-message">Your message is successfully sent...</div>
                          <div class="message text-danger error-message">Sorry something went wrong</div>
                          <div class="control-btn">
                            <button class="btn btn-success" type="submit">Send</button>
                          </div>
    
                        </form>
                      </div>
                    </div>
                  </div> 
                   @endforeach
                </div>
              </div>


        </div>
      </div>


      <footer id="footer" class="footer">
        <ul class="social social-fixed">
          <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
          <li><a href="#"><i class="lni lni-facebook-original"></i></a></li>
          <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
        </ul>

        <div class="copyright copyright-fixed d-none d-md-block">
          &copy; Cara 2020<br /> All Rights Reserved
        </div>
      </footer>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="send-request">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Send request</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="lni lni-close"></i>
            </button>
          </div>
          <div class="modal-body">
            <p class="slide-descr">Leave your contacts and our managers will contact you soon.</p>
            <form class="form-request a-ajax-form">
              <div class="form-group form-group-material a-form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group form-group-material a-form-group">
                <input type="email" name="email"  class="form-control" required="" placeholder="Email *">
              </div>
              <div class="form-group form-group-material a-form-group">
                <textarea rows="3" name="message"  class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="message text-success success-message">Your message is successfully sent...</div>
              <div class="message text-danger error-message">Sorry something went wrong</div>
              <div class="control-btn text-right">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> 
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.pagepiling.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

  </body>
</html>
