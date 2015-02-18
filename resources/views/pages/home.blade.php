@extends('master')

@section('content')

  @if($posts->count())
    @foreach($posts as $post)

      <article>
        <h2><a href="/cms_laravel/public/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ substr($post->content,0,300) }}</p>
        <a href="#">Read more &rarr;</a>
      </article>

    @endforeach
   @endif
@stop
