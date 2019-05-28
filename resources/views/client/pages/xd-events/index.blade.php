@extends('layouts.main')

@section('title')
	<title>Mobile Legends - XD Events & Competitions - XD Fiesta 2019</title>
@endsection

@section('content')

		<section class="xd-event">
	<!-- Gambar lomba dimasukkan disini -->
		<div class="xd-event-imageBanner">
			<img src="{{url('uploads/'.$lomba->pic)}}" alt="" width="500px">
		</div>
	
		<!-- Deskripsi lomba ditulis disini -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="xd-event-description border-box">
						<p>COMPETITION</p>
						<p>{{$lomba->judul}}</p>
						{!!$lomba->deskripsi!!}
					</div>

					<!-- Informasi tentang lomba ditulis disini -->
					<div class="xd-event-information border-box">
						<p>Information :</p>
						<table>
                        @if($waktu!="null")
							<tr>
								<td>Waktu acara</td>
								<td>:</td>
								<td>{{$waktu->waktu}}</td>
							</tr>
							<tr>
								<td>Lokasi acara</td>
								<td>:</td>
								<td>{{$waktu->tempat}}</td>
							</tr>
							<tr>
								<td>Technical Meeting</td>
								<td>:</td>
								<td>{{$waktu->tm}}</td>
							</tr>
                            <tr>
								<td>Tempat Technical Meeting</td>
								<td>:</td>
								<td>{{$waktu->tempat_tm}}</td>
							</tr>
                            @endif
                            @php
                                $count=0;
                            @endphp
                            @foreach($kontak as $kword)
							<tr>
								<td>{{$count<1?"Contact":''}}</td>
								<td>{{$count<1?":":''}}</td>                                
                                <td>{{$kword->kontak}}</td>
							</tr>
                            @php
                                $count++;
                            @endphp
                            @endforeach
                            @php
                                $count=0;
                            @endphp
                            @foreach($hadiah as $hword)
							<tr>
								<td>{{$count<1?"Hadiah":''}}</td>
								<td>{{$count<1?":":''}}</td>
								<td>{!!$hword->deskripsi!!}</td>
							</tr>
                            @php
                                $count++;
                            @endphp
                            @endforeach
						</table>
					</div>
				</div>

				<div class="col-lg-6 col-12">
					<!-- Syarat dan Ketentuan lomba ditulis disini -->
					<div class="xd-event-term border-box">
						<p>Persyaratan Pendaftaran :</p>
						{{-- <ol style="padding-left: 20px !important;">
							<li>
								Peserta merupakan pemain Mobile Legend di 
								kalangan umum yang berkomitmen mengikuti lomba.
							</li>
							<li>
								Peserta harus sudah melakukan prepare 5 menit sebelum lomba, meliputi koneksi, 
								kelengkapan tim, dan lainnya agar lomba berjalan tepat waktu.
							</li>
							<li>
								Peserta wajib melakukan screen shoot pada saat mulai di arena 
								untuk menghindari adanya cheat.
							</li>
							<li>
								Peserta diwajibkan memiliki akun Discord.
							</li> --}}
							<p class="xd-event-term-text"><b>Download Ketentuan & Kriterian Penilaian:</b></p>
							<div style="text-align: center;">
                                @if($lomba->pdf!=null)
                                @php
                                $file=str_replace(' ', '-', $lomba->pdf);
                                @endphp
                                <a href="download/{{$file}}" style="text-decoration:none">
                                <button class="xd-event-term-download-btn" target="_blank">
                                    <span>DOWNLOAD</span>
                                </button>
                                </a>
                                @else
                                <i>File tidak tersedia</i>
                                @endif
							</div>
						{{-- </ol> --}}
					</div>

					<!-- Form pendaftaran lomba ditulis disini -->
					<div class="xd-event-register border-box">
						<p class="xd-event-register-mainTitle">Form Pendaftaran :</p>
						<form action="{{route('daftar.lomba')}}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-12">
									<input type="hidden" name="id_lomba" class="input-text" value="{{$lomba->id_lomba}}">

									<p class="xd-event-register-subTitle">&nbspAlamat Email : </p>
									<input type="email" name="alamat_email" placeholder="example@email.com" class="input-text">

									<p class="xd-event-register-subTitle">&nbspNama Team : </p>
									<input type="text" name="nama_team" placeholder="ex: RRQ" class="input-text">

									<p class="xd-event-register-subTitle">&nbspNama Ketua : </p>
									<input type="text" name="nama_ketua" placeholder="ex: Steven “Marsha” Kurniawan" class="input-text">

									<p class="xd-event-register-subTitle">&nbspNo Whatsapp : </p>
									<input type="tel" name="no_wa" placeholder="08212345678" class="input-text">
								</div>
								<div class="offset-lg-7"></div>
								<div class="col-lg-5 col-12 justify-content-center">
									<button class="reset-button">
										<span>RESET</span>
									</button>
									<button class="submit-button">
										<span>SUBMIT</span>
									</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>	
	</section>

@endsection