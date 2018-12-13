@extends('layouts.user')

@section('slider')
    <div class="container mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $i=0 ?>
                @foreach($image as $img)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <?php $cnt=0 ?>
                @foreach($image as $img)
                @if($cnt==0)
                <div class="carousel-item active">
                    <img class="w-100" height="480px" src="{{asset('/uploads/'.$img->imgpath)}}" alt="{{asset('/uploads/web1.PNG')}}">   
                </div>
                <?php $cnt=1 ?>
                @else
                <div class="carousel-item ">
                        <img class="w-100" height="480px" src="{{asset('/uploads/'.$img->imgpath)}}" alt="{{asset('/uploads/web1.PNG')}}">   
                </div>
                @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        <div class="row mt-3">
                <div class="display-4 m-auto" >
                  About Us
                  <div class="section_heading_border"></div>
                </div>
        </div>

        <div class="row mt-3  ">
            <div class="col-md-12">
                <div class="jumbotron partition pt-5">
                    <p class="lead">{{$general[0]->about}}</p>   
                    </p>
                    <b class="bold-font">Mission:<p class="lead">{{$general[0]->mission}}</p></b>
                    <b class="bold-font">Vision:<p class="lead">{{$general[0]->vision}}</p></b>
                    <b class="bold-font">Founder:<p class="lead">{{$general[0]->founder}}</p></b>
                    
                </div>
            </div>
        </div>
              <div class="row ">
                  <div class="display-4 m-auto" >
                    Our Services
                    <div class="section_heading_border"></div>
                  </div>
                </div>
                <div class="row partition mt-3">
                    @foreach($services as $service)
                    <div class="col-md-4 ">
                      <div class="card my-4" >
                          <img class="card-img-top" src="{{asset('/uploads/'.$service->imgpath)}}" alt="Card image cap" width="100%"  height="150px">
                          <div class="card-body">
                            <h4 class="card-title ">{{$service->title}} </h4>
                            <a href="#" data-toggle="modal" data-target="#mymodel{{$service->id}}">
                                <b>Full Details</b>
                            </a>
                            <div class="modal" id="mymodel{{$service->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$service->title}}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>{{$service->description}}</p>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                @endforeach
            </div>
                <div class="row mt-3 ">
                  <div class="display-4 m-auto" >
                    Testimonial
                    <div class="section_heading_border"></div>
                  </div>
                </div>
                <div class="jumbotron partition mt-3">
                  <div id="carouselTestimonialIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $i=0 ?>
                            @foreach($testimonials as $testimonial)
                            <li data-target="#carouselTestimonialIndicators" data-slide-to="{{$i++}}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            <?php $cnt=0 ?>
                            @foreach($testimonials as $testimonial)
                            @if($cnt==0)
                            <div class="carousel-item active">
                                <div class="mx-5 px-5">
                                    <p class="lead">
                                        {{$testimonial->description}}
                                    </p>
                                    <h5><footer class="blockquote-footer  text-dark">
                                        {{$testimonial->author}}
                                    </footer></h5>
                                    <h5><footer class=" text-dark">
                                            {{$testimonial->position}}
                                    </footer></h5>
                                </div>
                            </div>
                            <?php $cnt=1 ?>
                            @else
                            <div class="carousel-item ">
                                <div class="mx-5 px-5">
                                    <p class="lead">
                                        {{$testimonial->description}}
                                        </p>
                                        <h5><footer class="blockquote-footer  text-dark">
                                            {{$testimonial->author}}
                                        </footer></h5>
                                        <h5><footer class=" text-dark">
                                                {{$testimonial->position}}
                                        </footer></h5>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselTestimonialIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTestimonialIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="row ">
                  <div class="display-4 m-auto" >
                    Contact Us
                    <div class="section_heading_border"></div>
                  </div>
                </div>
                <div class="jumbotron partition pt-5  mt-3 pb-2  ">
                <div class="row ">

                        <div class="col-md-8">
                            <form enctype="multipart/form-data" method="post" action="{{url('admin/contact/')}}">
                                {{ csrf_field() }}
                                <div class="form-row ">
                                  <div class="form-group col-md-6">
                                    <label >Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Mark Angel">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label >Email</label>
                                    <input type="email" class="form-control " name="email" placeholder="mark@somthing.com">
                                  </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label >Phone</label>
                                      <input type="number" class="form-control" name="phone" placeholder="01*********">
                                    </div>
                                    <div class="form-group col-md-8">
                                      <label >Subject</label>
                                      <input type="text" class="form-control " name="subject" placeholder="What are you writing for?">
                                    </div>
                                  </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                            <label >Message</label>
                                            <textarea class="form-control " name="message" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success">Send</button>
                              </form>
                        </div>

                        <div class="col-md-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.962557350254!2d90.40111091428771!3d23.748714584590175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b88fd1fd672d%3A0x9ba033810adabfd1!2sSystech+Unimax+Ltd.!5e0!3m2!1sen!2sbd!4v1543821899528" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> 
                  </div>
                </div>
                <div class="jumbotron partition">
                  <div class="row  mt-3 p-0">

                      <div class="col-md-3 ">
                          <img src="{{asset('/uploads/'.$general[0]->logopath)}}" alt="" width="100%">
                        </div>
                        <div class="col-md-3 ">
                          <h3>
                            Address
                          </h3>
                          <p>
                              <img src="/assets/images/location.svg" alt="" width="15px" height="15px" >
                                {{$general[0]->full_address}}
                          </p>
                          <a href="#">
                            <img src="/assets/images/web.jpg" alt=""width="15px" height="15px">
                            www.systechunimax.com
                          </a><br>
                          <a href="#">
                              <img src="/assets/images/phone.png" alt=""width="15px" height="15px">
                              09611-111000
                            </a> 
                        </div>
              
                        <div class="col-md-6 ">
                          <form class="row pt-5" enctype="multipart/form-data" method="post" action="{{url('admin/subscriber/')}}">
                            {{ csrf_field() }}
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control form-control-lg " id="inputEmail4" placeholder="somthing@example.com">
                            </div>
                            <div class="col-md-4 ">
                              <button type="submit" class="btn btn-lg btn-success btn-block" >
                                  Subscribe
                                </button>
                            </div>
                          </form>
                        </div>
                  </div>
                  </div>
        </div>
        <nav class="navbar partition-navbar navbar-expand-lg">
          <div class="container">
              <b class="">
                {{$general[0]->copyright}}
              </b>
              <div class="float-left">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                          <a class="nav-link " href="{{$general[0]->google}}"> <img src="assets/images/google.png" alt="" height="35px" width="35px"></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{$general[0]->facebook}}"> <img src="assets/images/Facebook-share-icon.png" alt="" height="35px" width="35px"></a>
                        </li>
                        <li class="nav-item ">
                              <a class="nav-link " href="{{$general[0]->twitter}}"> <img src="assets/images/Twitter-High-Quality-PNG.png" alt="" height="35px" width="35px"></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link " href="{{$general[0]->linkdin}}"> <img src="assets/images/linkedin.png" alt="" height="35px" width="35px"></a>
                        </li>
                      </ul>
                  </div>
              </div>
          </div>

        </nav>          
@endsection
              