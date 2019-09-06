@extends('master')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Link Shorter
            </div>
            <form action="/links" method="post">
                @csrf
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Enter Your Link" name="link" required>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </form>
            @if(session('url'))
                <div class="alert alert-success mt-2">
                    <a href="{{session('url')}}">{{session('url')}}</a>
                    <button class="btn btn-success ml-2" onclick="copy()">Copy</button>
                    <input type="hidden" id="shortUrl" value="{{session('url')}}">
                </div>
            @endif
            @error('link')
            <div class="alert alert-danger mt-2">
                {{$message}}
            </div>
            @enderror
        </div>
    </div>
    <script>
        function copy() {
            document.getElementById("shortUrl").type = 'text';
            const text = document.getElementById("shortUrl");
            text.select();
            document.execCommand("copy");
            document.getElementById("shortUrl").type = 'hidden';
        }
    </script>
@stop
