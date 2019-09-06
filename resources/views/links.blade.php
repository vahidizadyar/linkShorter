@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="title m-b-md">
            Links
        </div>
        <table class="table">
            <tr>
                <td>Link</td>
                <td>Slug</td>
            </tr>
            @foreach($links as $link)
                <tr>
                    <td>{{$link->link}}</td>
                    <td><a href="/links/{{$link->slug}}" target="_blank">{{$link->slug}}</a></td>
                </tr>
            @endforeach
        </table>
        {{$links->links()}}
    </div>
@stop
