@extends('layouts.master')

@section('content')

<div class="container-fluid h-100 bg-light text-dark">
  <div class="row justify-content-center align-items-center">
    <h1>Edit Post</h1>    
  </div>
  <hr/>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            {!! Form::model($post, array('route' => array('admin.posts.update', $post->id), 'method' => 'PUT')) !!}
                {{csrf_field()}}       
                @include('admin.posts.form', ['submitButtonText' => 'Update Post'])
               
            {!! Form::close() !!}   
        </div>
 </div>

 @endsection   