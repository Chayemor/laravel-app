@extends('layouts.app', ['postID' => $postID])

@section('content')
<div>Heya {{$postID}}</div>
@endsection

@section('footer')
    <div>A footer</div>
@endsection
