@extends(theme_path('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
  <section class="post">
    <h2 class="title">{{ $post->title }}</h2>
    {{ md($post->content) }}

    @include(theme_path('inc.tags'))
</section>
@stop

