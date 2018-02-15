@extends('layouts.site')
    
@section('category_content')
     <div class="blog">
      <div class="container">
           
            <div class="row">
                 <div class=" mx-auto col-lg-6 col-lg-offset-3 text-center">  
                    <h2 class="mar-top">
                        <span class="ion-minus"></span>
                        {{ $category_name }}
                        <span class="ion-minus"></span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis  dis parturient montes, nascetur ridiculus </p><br>
                 </div> 
            </div>  
                
           <div class="row">
           
            @foreach($articles as $art)
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
					 <div class="card text-center">
                        <img class="card-img-top" src="{{asset('imgs/'.$art -> img)}}" alt="" width="100%">
                        <div class="card-block">
                            <h4 class="card-title">{{ $art->title }}</h4>
                            <p class="">Categorie: 
                                <a href="{{ route('categoryShow', [$category_url]) }}">
                                     {{ $category_name }}
                                </a>
                            </p>
                            <p class="card-text  ">{{ mb_substr(strip_tags($art->text), 0, 110, 'utf-8')."..." }}</p>
                            <a class="btn btn-default" href="{{ route('articleShow', ['category_url'=>$category_url,
                            'url'=>$art->url]) }}">Read More</a>
                        </div>
                     </div>
                </div>
            @endforeach
                
            </div>
            
            <div class="row">
                <div class="mx-auto text-center">  
                   {!! $articles -> links('pagination::bootstrap-4'); !!}
                 </div>
            </div>
        </div>
    </div>
@endsection