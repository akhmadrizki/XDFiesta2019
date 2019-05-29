@extends('layouts.dashboard')
@section('content')

<div class="row">
  @foreach($lomba as $lmb)
<div class="col-12 col-md-6 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>{{$lmb->judul}}</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Status</th>
                <th>Action</th>
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
                <td>{{$lm->alamat_email}}</td>
                <td><div class="badge badge-success">Lunas</div></td>
                <td><a href="#" class="btn btn-secondary">Detail</a></td>
                <td>ll</td>
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