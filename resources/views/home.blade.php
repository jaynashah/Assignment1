@extends('layout')
@section('content')

		<!-- Features -->
   
			<div id="features-wrapper">
				<div class="container">
					<div class="row">
                    @foreach   ($posts as $post)
            			<div class="4u">
						
							<!-- Box -->
								<section class="box feature">
									<a href="#" class="image featured"><img src={{$post->photo}} alt="" /></a>
									<div class="inner">
										<header>
											<h2>{{$post->title}}</h2>
											<p>{{$post->Created_date}}</p> 
										</header>
										<p>{{$post->body}}</p>
									</div>
								</section>

						</div>
		            @endforeach			
                    </div>
                </div>
            </div>  

@endsection('content')