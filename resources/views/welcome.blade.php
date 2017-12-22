@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div class='col-md-6'>
                        Your Application's Landing Page.<br>
                        @foreach($links as $link)
                        <a href="{{$link->url}}" target="_blank">{{$link->title}}</a><br>
                    @endforeach
                    </div>
                    <div class='col-md-6'>
                        <a href="/submit" class="btn btn-success">Submit A Link</a>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
