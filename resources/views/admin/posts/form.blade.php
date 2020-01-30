    <div class="form-group">
        
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{$post->title}}">

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div><!-- /.form-group -->



    <div class="form-group">
        <label for="body">Body</label>
        <input type="text" class="form-control" name="body" placeholder="Body" value="{{$post->body}}">

        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div><!-- /.form-group -->


    <div class="form-group">
        <label for="activity">Comments</label>

            <select
                class="form-control"
                name="students[]"
                multiple>
            @foreach ($comments as $comment)
                <option value="{{ $comment->id }}">{{ $comment->text}}</option>
            @endforeach    
            
            </select>

            @error('comments')
                <p class="alert is-danger">{{ $message }}</p>    
            @enderror    
        
    </div><!-- /.form-group -->  

<!-- button-centre -->
<div class="button-centre">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary', 'data-confirm' => 'Are you sure about that?']) !!}
    </div>