@extends('layout.main')

@section('content')

	
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8">
     			<h1 class="mb-3">{{ $post->title }}</h1>				
     			
					  @if($post->image)
					  <div style="max-heigt: 350px; overflow:hidden;">
						<img src="{{ asset('storage/' .$post->image) }}}}" class="img-fluid" alt="{{ $post->title }}">
					  </div>
					  @else
					  <img src="https://source.unsplash.com/1200x400?{{ $post->title }}" class="card-img-top" alt="{{ $post->title }}">
					   @endif

					  
				     

					<article class="my-3 fs-5">
					{!! $post->body !!}	
					</article>

					<a href="/blog" class="d-block mt-3">Back</a>
			</div>
		</div>	
	</div>


@endsection