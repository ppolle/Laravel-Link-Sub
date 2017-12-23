@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/submit" method="post">
               @if(count($errors) > 0)
                    <div class='alert alert-danger'>
                        <ul>
                            @foreach($errors->all() as $errors)
                                <li>{{ $errors }}</li>
                            
                            @endforeach
                        </ul>
                    </div>
                @endif 

                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                  
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('url') }}">
                   
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                   
                </div>
                <div class="form-group">
                    <script>
                        var tags = [
                            @foreach ($tags as $tag)
                            {tag: "{{$tag}}" },
                            @endforeach
                        ];
                    </script>
                    <input type="text" name="tags" id="tags" class="form-control">
                    
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection