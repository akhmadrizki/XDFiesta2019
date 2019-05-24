@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Hadiah</h1>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-body">
        <form method="post" action="{{action('Content\HadiahController@store')}}">
            @csrf
            <input type="hidden" name="id_lomba" value="{{$lomba->id_lomba}}">
            <h6>Hadiah {{$lomba->judul}} </h6><br/>
            <textarea name="deskripsi" class="summernote-simple" style="display: none;" ></textarea>
            <div class="text-right">
            @if($next=='show')
            <input type="hidden" name="next" value="show">
            @endif
            <input type="submit" value="Tambah" class="btn btn-success">
            <a href="{{action('Content\LombaController@show',$lomba->id_lomba)}}" class="btn btn-primary">Selesai</a>
            </div>
        </form>
        </div>
    
    <ul class="list-group list-group-flush">
    @foreach ($inihadiah as $hadiah)
    <li class="list-group-item">
        {!!$hadiah->deskripsi!!}
    </li>
    @endforeach
    </ul>
    </div>
</div>
@endsection