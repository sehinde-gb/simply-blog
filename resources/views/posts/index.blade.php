@extends('layouts.master')

@section('content')

<div class="container">
  <!-- Content here -->
  <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <h1>SB: Post Listing</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
      @forelse($posts as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['body']}}</td>
        
          </form>
        </td>
      </tr>
      @empty
        <p>No relevant comments yet</p>
      @endforelse
    </tbody>
  </table>
  </div>


</div>



@endsection