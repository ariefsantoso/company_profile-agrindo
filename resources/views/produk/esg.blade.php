@extends('layout.main')

@section('content')

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="inner-heading">
         
            <h2>ESG</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container">
      <div class="row">
        <div class="container">
          <div class="row">
          @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
              <div class="card">
              <div class="position-absolute bg-dark px-3 py-2" style="background-color: rgba(0,0,0,0.7);"><a href="/posts?category={{ $post->slug }}" class="text-white text-decoration-none">{{ $post->name }} </a></div>
              @if($post->image)
                          <img src="{{ asset('storage/' .$post->image) }}}}" class="img-fluid" alt="{{ $post->name }}">
                        @else
                <img src="https://source.unsplash.com/500x400?{{ $post->name }}" class="card-img-top" alt="{{ $post->name }}">
                         @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <small class="text-muted">
                  <p><a href="" class="text-decoration-none"></a> {{ $posts[0]->created_at->diffForHumans() }}</p>
                  </small>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection