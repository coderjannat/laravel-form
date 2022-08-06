@extends('layout')
@section('title','Guitars')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @if( count($guitars) > 0 )
    @foreach($guitars as $guitar)
    <div>
        <!-- <h3> {{$guitar['name']}}  </h3> -->
        <a href="{{ route('guitars.show', ['guitar' => $guitar['id']]) }}">{{$guitar['name']}}</a>
        <li>
            Brand name : {{$guitar['brand']}}
        </li>
        <li>
            Year name : {{$guitar['year_made']}}
        </li>
        </ul>
    </div>
    @endforeach
    @else
    <h2>there is no guiter</h2>
    @endif
</div>
@endsection