@extends('layouts.master')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <h1 class="display-2">{!! $post->title !!}</h3>
            <h1 class="display-2">{!! $post->body !!}</h3>
            
        </div><!-- #content -->  
    </div><!-- #page .container -->  
</div><!-- #wrapper -->  



<p>
    
</p>

@endsection