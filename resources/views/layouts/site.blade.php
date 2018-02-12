<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}"  crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet"> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

    <title>BLOG</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a href="/" class="navbar-brand">
            <img src="https://image.flaticon.com/icons/svg/148/148717.svg" width="30" height="30" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">HOME</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">CATEGORIES</a>
                    <ul class="dropdown-menu bg-dark">
                    @foreach($categories as $cat)
                        <li class="nav-item">
                            <a href="{{ route('categoryShow', $cat->url) }}" class="nav-link">{{$cat->category_name}}</a>
                        </li>
                    @endforeach
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="/contact" class="nav-link">CONTACTS</a>
                </li>
                <li class="nav-item ">
                    <a href="/about" class="nav-link">ABOUT US</a>
                </li>
            </ul>
            <!-- 
                <form class="form-inline my-2 my-lg-0">
                    <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-lg-0">Search</button>
                </form> 
            -->
            <ul class="navbar-nav  my-2 my-lg-0">
                <li class="nav-item">
                    @if(Auth::check())
                        <a href="/login" class="nav-link my-2 my-lg-0">{{ Auth::user() -> name}}</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
    <!-- 
    <div class="container ">
        <div class="col-md-10 center-block" >
            <h1 class="post-title">
                <a href="#">Very nice post</a>
            </h1>
            <span class="post-date">22.22.2222</span>
            <img class="img-responsive center-block" src="{{asset('abstract.jpg')}}" height="570"></div>

        </div>
    </div>
    -->
    
          @yield('home_content')
          @yield('post_content')
          @yield('about_content')
          @yield('contact_content')
          @yield('category_content')
          @yield('tag_content')
          
           <footer>
             <div class="container">
               <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <ul class="adress">
                         <span>Adress</span>    
                         <li>
                            <p>Lorem ipsum dolor sit amet, vero omnis vocibus</p>
                          </li>
                               
                          <li>
                            <p>+90 1234 56789</p>
                          </li>
                               
                          <li>
                            <p>info@gmail.com</p>
                          </li>
                     </ul>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul class="contact">
                         <span>Contact</span>    
                         <li>
                            <a href="#">Home</a>
                          </li>
                               
                          <li>
                             <a href="#">About</a>
                          </li>
                               
                          <li>
                            <a href="#">Blog</a>
                          </li>
                               
                          <li>
                             <a href="#">Gallery </a>
                          </li>
                               
                          <li>
                            <a href="#">Contact</a>
                         </li>
                    </ul>
                </div>
           
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                   <ul class="social">
                              <span>Social</span>    
                               <li>
                                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                               </li>
                              
                               <li>
                                    <a href="#"><i class="fa fa-github fa-2x"></i></a>
                               </li>
                                
                               <li>
                                    <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                               </li>
                               
                               <li>
                                    <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                               </li>
                                
                               <li>
                                    <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                              </li>
                              
                     </ul>
                </div>
           </div> 
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>