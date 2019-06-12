@extends('layouts.dashboard')
@section('content')

<div class="row">
  @foreach($lomba as $lmb)
<div class="col-12 col-md-6 col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="col-6">
          <h4>{{$lmb->judul}}</h4>
        </div>
        <div class="col-6">
          {{-- <a href="{{route('export.excel')}}" class="btn btn-icon icon-left btn-success float-right"><i class="far fa-file-excel"></i> Eksport Excel</a> --}}
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Team</th>
                <th>Nama Ketua</th>
                <th>No. Whatsapp</th>
                <th>E-mail</th>
                <th>Jumlah Anggota</th>
                <th>Nama Anggota</th>
              </tr>
            </thead>

            <tbody>
              @php
                $ulang = 1;
              @endphp
              @foreach($daftar as $lm)
              
              @if($lmb->id_lomba == $lm->id_lomba)
              <tr>
                <td>{{$ulang}}</td>
                <td>{{$lm->nama_team}}</td>
                <td>{{$lm->nama_ketua}}</td>
                <td>{{$lm->no_wa}}</td>
                <td>{{$lm->alamat_email}}</td>
                <td>{{$lm->jumlah_anggota}}</td>
                <td>
                  <ul>
                    @php
                      $jml_anggota = (int) $lm->jumlah_anggota;
                    @endphp

                    @for($i = 1; $i<=$jml_anggota; $i++)
                      <li>{{ ${'lm'}->{'nama_anggota'.$i} }}</li>
                    @endfor

                  </ul>
                  {{-- {{$lm->nama_anggota1}} --}}
                </td>
              </tr>
              @php
                $ulang++;
              @endphp
              @endif
              @endforeach
          </tbody>
          </table>
        </div>
      </div>

      <div class="card-footer text-right">
      </div>

    </div>
</div>
  @endforeach
</div>

@endsection