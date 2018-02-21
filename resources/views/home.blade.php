@extends('layouts.site')
    
@section('home_content')
     <div class="blog">
      <div class="container">
           
            <div class="row">
                 <div class=" mx-auto col-lg-6 col-lg-offset-3 text-center">  
                    <h2 class="mar-top"><span class="ion-minus"></span>Blog Posts<span class="ion-minus"></span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis  dis parturient montes, nascetur ridiculus </p><br>
                 </div> 
            </div>  
                
           <div class="row">
           
            @foreach($posts as $post)
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
					 <div class="card text-center">
                        <img class="card-img-top" src="{{asset('storage/'.$post -> image)}}" alt="" width="100%">
                        <div class="card-block">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <p class="">Categorie: 
                                @foreach($categories as $cat)
                                    @if($cat->id == $post->category_id)
                                         <a href="{{ route('categoryShow', [$category_url = $cat->slug]) }}">{{ $cat->name }}</a>
                                         
                                    @endif
                                @endforeach
                            </p>
                            <p class="card-text  ">{{ strip_tags($post->excerpt) }}</p>
                            <a class="btn btn-default" href="{{ route('postShow', ['category_url'=>$category_url,
                            'url'=>$post->slug]) }}">Read More</a>
                        </div>
                     </div>
                </div>
            @endforeach
                
            </div>
                
            <div class="row">
                <div class="mx-auto text-center">  
                   {!! $posts -> links('pagination::bootstrap-4'); !!}
                 </div>
            </div>
        </div>
    </div>
@endsection