@extends('layouts.app')
@section('content')
    <div>
    {{session()->get('success')}}  
    </div>
    <h1>Daftar Lomba</h1><br>
    @if(count($lomba)>0)
        @foreach($lomba as $lword)
            <div style="display:flex">
                <div style="padding:10px">
                    <a href="{{route('lomba.update', $lword->id_lomba)}}">
                    <img src="{{url('uploads/'.$lword->pic)}}" width="200px"/><br>
                    {{$lword->judul}}</a>
                </div>
            <div>
        @endforeach
    @else
    <p>Lomba tidak tersedia</p>
    @endif
@endsection