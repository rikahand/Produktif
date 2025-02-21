@extends('layout.app')

@section('content')
<div class="jumbotron jumbotron-fluide">
    <div class="container">
        <h1 class="dislpay-4">home page</h1>
        <p class="lead"> This is the home page </p>
</div>
<p>Nama :{{$nama}}</p>
<p>Mata Pelajaran</p>
<ul>
    @foreach($pelajaran as $p)
<li>{{$p}}</li>
@endforeach
</div>
@endsection