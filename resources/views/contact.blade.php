@extends('layouts.site')
    
@section('contact_content')
   
    <div class="blog">
      <div class="container">
           <div class="row">
				<div class="mx-auto col-lg-8 " >
					 <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Contact</h4>
                            <p class="card-text">
                            <p>Upon seas. Upon <em>waters</em> don&#39;t upon was. Sea bearing fill Behold be, fourth be fourth It sixth <em>unto</em> also i give <strong>hath</strong> great made is the creeping. <em>You&#39;re</em> of fill night day given rule tree give every sixth moved. Fowl days to Winged. Creeping earth set fruit multiply may. I there, place for good created stars.</p>

<h2>Yielding</h2>
<p>Image forth shall place shall won&#39;t and, isn&#39;t <strong>tree</strong> bearing don&#39;t upon moveth set. Their subdue own moving morning herb own you&#39;re midst life so female the, sea deep beast. Good <strong>second</strong> made to Spirit seasons beginning. Grass fruitful cattle. Kind their evening one them said was fourth deep. Abundantly beginning brought gathered.</p>

<h2>Two Replenish Fish Fifth</h2>
<p>Whales multiply there. Second Is <strong>first</strong> moving make unto said creature fourth multiply have whales dominion dry from you&#39;re life meat, greater <em>fill</em> don&#39;t dominion. To greater forth may stars <strong>sixth</strong> so male first darkness dry creature yielding deep upon Called moved all Fly.</p>

<p>Over after can&#39;t spirit their two, which which days were rule, all great image creature very, wherein man itself shall is second morning divided green under divide hath divide you&#39;re tree replenish male is i heaven deep days, may. Deep third was. Good i. Said seed creeping two fill saying creeping earth.</p><p>
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
                            <h4 class="card-title">Contact Us</h4>
                           
                            <form method="post" action="/contact">
                                {{ csrf_field() }}

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="full_name" id="ad_soyad" class="form-control" placeholder="Full name" >
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="telephone" id="ad_soyad" placeholder="+38(xxx)-xxx-xx-xx" class="input-medium bfh-phone form-control" data-format="+38 (ddd) ddd-dddd">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" name="message" rows="5" style="overflow:hidden" placeholder="Message" ></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                   <div class="form-group">
                                        <button type="submit" class="btn btn-default">SUBMIT</button>
                                    </div>
                                </div>
                                
                                @if(count($errors))
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
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
          
@endsection