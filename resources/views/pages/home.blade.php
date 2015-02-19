@extends('master')

@section('content')

  @if($posts->count())
    @foreach($posts as $post)

      <article>
        <h2><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ substr($post->content,0,300) }}</p>
        <a href="posts/{{ $post->slug }}">Read more &rarr;</a>
      </article>

    @endforeach
   @endif
@stop
