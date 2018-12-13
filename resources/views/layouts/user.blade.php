<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/plugins/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="/assets/images/home1.png"> 
    <title>Simple website</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg partition-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="{{asset('/uploads/'.$general[0]->logopath)}}" alt="" height="40px" width="80px">
              </a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="float-left lead ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active px-3 ">
                        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item px-3">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item px-3">
                          <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">Testimonial</a>
                          </li>
                          <li class="nav-item px-3">
                              <a class="nav-link" href="#">Contact Us</a>
                            </li>                                                                        
                    </ul>
        
                  </div>
            </div>
          </div>
        </nav>
        
        @yield('slider')
        
    <script src="/assets/plugins/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/plugins/bootstrap-4.1.3-dist/js/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

  </body>
</html> 