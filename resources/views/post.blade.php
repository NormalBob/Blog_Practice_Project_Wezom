@extends('layouts.site')
    
@section('post_content')
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
    <div class="blog">
      <div class="container">
           <div class="row">
				<div class="mx-auto col-lg-8 " >
					 <div class="card">
                        <img class="card-img-top" src="https://images.pexels.com/photos/129441/pexels-photo-129441.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
                        <div class="card-block">
                        <div class="card-block">
                            <h2 class="card-title">{{ $article -> title }}</h2>
                            <hr>
                            
                            <p class="card-text "><span class="ion-calendar"></span> 25.05.20515</p>
                            <p class="card-text">{{ $article -> text }}</p>
                            <hr>
                            <h4>Tags: 
                                @foreach($tags as $tag)
                                  <a href="{{ route('tagShow', ['tag_url'=>$tag->url]) }}" class="btn btn-info btn-sm" role="button">{{ $tag->name }}</a>
                                @endforeach
                              
                            </h4>
                        </div>
                     </div>
                </div>
            </div>  
        </div>
    </div>
          
    <div class="blog">
      <div class="container">
           <div class="row">
				<div class="mx-auto col-lg-8 " >
					 <div class="card">
                       <div class="card-block">
                            <h4 class="card-title">Add Comment</h4>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="message" rows="5" style="overflow:hidden" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-default">
                                    <span>SUBMIT</span>
                                </button>
                            </div>
                        </div>
                     </div>
                </div>
            </div>  
        </div>
    </div>
          
    <div class="blog">
      <div class="container">
           <div class="row">
				<div class="mx-auto col-lg-8 " >
					 <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Comments</h4>
                        </div>
                        <div class="card-block">
                            <ul class="list-unstyled">
                              <li class="media">
                                <img class="d-flex mr-3" src="https://image.flaticon.com/icons/svg/148/148717.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">List-based media object</h5>
                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                              </li>
                              <li class="media my-4">
                                <img class="d-flex mr-3" src="https://image.flaticon.com/icons/svg/148/148717.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">List-based media object</h5>
                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                              </li>
                              <li class="media">
                                <img class="d-flex mr-3" src="https://image.flaticon.com/icons/svg/148/148717.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                  <h5 class="mt-0 mb-1">List-based media object</h5>
                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                              </li>
                            </ul>
                        </div>
                     </div>
                </div>
            </div>  
        </div>
    </div>
          
@endsection