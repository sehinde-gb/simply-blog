@extends('layouts.master')

@section('content')

<hr/>
<div class="container-fluid h-100 bg-light text-dark">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Latest Post</h3>
                </div>
                    <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                        
                            <p class="card-text">
                            {{ $post->body }}
                            </p>
                    
                </div>    
            </div>        
  
                    
            @auth
                <br />
                <div class="container-fluid h-100 bg-light text-dark">
                    <div class="row justify-content-center align-items-center">
                        <h5>Leave A Comment</h5>    
                    </div>
                        <hr/>
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            {{ Form::open(['route' => ['admin.comments.store'], 'method' => 'POST']) }}
                            

                        <p>{{ Form::textarea('text', old('text')) }}</p>
                        {{ Form::hidden('post_id', $post->id) }}
                        <p>{{ Form::submit('Send',['class' => 'btn btn-primary']) }}</p>
                        {{ Form::close() }}
            @endauth
                        <hr/>
                        
                        <div class="row justify-content-left align-items-left">
                            <h5>Previous Comments</h5>
                            @forelse ($post->comments as $comment)

                            <div class="list-group">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1">{{ $comment->user->name }} replied:</h6>
                                <p></p>
                                <small>{{\Carbon\Carbon::parse(dd($comment->created_at))->diffForHumans()}}</small>
                            </div>
                            <p class="mb-1">{{ $comment->text }}</p>    
                                
                                
                           
                            
                            @empty
                                <p>This post has no comments</p>
                            </div>    
                            @endforelse    
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>


@endsection