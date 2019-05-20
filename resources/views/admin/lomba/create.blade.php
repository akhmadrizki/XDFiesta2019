@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Lomba</h1>
</div>

<div class="section-body">
    <div class="card">
        <form method="post" action="{{ action('Content\LombaController@store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Judul Lomba</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="summernote-simple" style="display: none;" name="deskripsi"></textarea>
                </div> 
                <div class="form-group">
                    <label>Date Picker</label>
                    <input type="text" class="form-control datepicker" name="tanggal">
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" class="form-control" name="lokasi">
                </div>
                <div class="form-group">
                    <label>Penyelenggara</label>
                    <input type="text" class="form-control" name="penyelenggara">
                </div>
                <div class="form-group">
                      <label>Hadiah</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            Rp
                          </div>
                        </div>
                        <input type="number" class="form-control currency" name="hadiah">
                      </div>
                </div>
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="text" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                    <label>Header Picture</label><br>
                    <input type="file" name="pic">
                </div>
                <div class="card-footer text-right">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>     
        </form>
    </div>
@endsection