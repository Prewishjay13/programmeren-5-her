@extends('Layout')

@section('content')
<div class='opsts-layout'>

@unless(count($posts) == 0)

@foreach($posts as $post)
<h2>
    <a href="/posts/{{$post['id]}}">{{$post['title']}}</a>
</h2>

<p>
    {{$post['description']}}
</p>
@endforeach

@else
<p>no posts</p>
@endunless

</div>



@endsection