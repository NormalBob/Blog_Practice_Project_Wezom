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
                        <img class="card-img-top" src="{{ asset('storage/'.$post -> image )}}" alt="" width="100%">
                        <div class="card-block">
                        <div class="card-block">
                            <h2 class="card-title">{{ $post -> title }}</h2>
                            <hr>
                            
                            <p class="card-text "><span class="ion-calendar"></span> {{ $post->created_at->toFormattedDateString() }} </p>
                            <p class="card-text">{!! $post -> body !!}</p>
                            <hr>

                            <h4>Tags: 
                                @foreach($tags as $tag)
                                  <a href="{{ route('tagShow', ['tag_url'=>$tag->slug]) }}" class="btn btn-info btn-sm" role="button">{{ $tag->name }}</a>
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
                            
                            <form method="post" action="/{{ $category_url }}/{{ $post -> slug }}/comments">
                               {{ csrf_field() }}
                               
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" name="text" rows="5" style="overflow:hidden" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-default">
                                        <span>SUBMIT</span>
                                    </button>
                                </div>
                                
                                @if(count($errors))
                                    <div class="form-group">
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </form>
                            
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
                            <hr>
                            <ul class="list-unstyled">
                            @if(count($comments) > 0)
                               
                                @foreach($comments as $comment)
                                  <li class="media mt-2">
                                    <img class="d-flex mr-3 img-circle " style="width: 100px; height: 100px; border-radius: 50%;" src="{{ asset('storage/'.$comment->user->avatar) }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                      <h5 class="mt-0 mb-1">{{ $comment->user->name}} <small>{{ $comment->created_at->diffForHumans() }}</small></h5>
                                        {{ $comment->text }}
                                    </div>
                                  </li>
                                @endforeach
                                
                            @else
                                 <h5 class="mt-0 mb-1"> - Comments not exist</h5>
                            @endif
                            
                            </ul>
                        </div>
                     </div>
                </div>
            </div>  
        </div>
    </div>
          
@endsection