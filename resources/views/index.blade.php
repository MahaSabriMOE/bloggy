@extends('layouts.app')

@section('content')
<style>
    .hero-bg-image{
        background: url('https://img.freepik.com/free-vector/network-mesh-wire-digital-technology-background_1017-27428.jpg?q=10&h=200' ) no-repeat center center/cover;
        background-attachment: fixed;
        height: 600px;
        
        }
</style>
<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1>Welcome to my Blog...</h1>
    <a href="/">Start Reading</a>
</div>

@endsection