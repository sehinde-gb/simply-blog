    <div class="form-group">
        
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{$post->title}}">

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div><!-- /.form-group -->



    <div class="form-group">
        <label for="body">Body</label>
        <textarea
                class="form-control"
                type="text"
                name="body" 
                placeholder="Body" 
                >{{ $post->body }}

        </textarea>
        
        
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div><!-- /.form-group -->


    
<!-- button-centre -->
<div class="button-centre">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary', 'data-confirm' => 'Are you sure about that?']) !!}
    </div>