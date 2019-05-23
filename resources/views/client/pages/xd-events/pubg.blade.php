@extends('layouts.main-2')

@section('title')
	<title>PUBG Mobile - XD Events & Competitions - XD Fiesta 2019</title>
@endsection

@section('content')

	<section class="xd-event">
	<!-- Gambar lomba dimasukkan disini -->
		<div class="xd-event-imageBanner">
			<img src="" alt="">
		</div>
	
		<!-- Deskripsi lomba ditulis disini -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="xd-event-description border-box">
						<p>COMPETITION</p>
						<p>PUBG Mobile Tournament Online</p>
						<p>
							Tunjukan strategi teammu dalam bermain game mobile, dan 
							menangkan hadiahnya!
						</p>
					</div>

					<!-- Informasi tentang lomba ditulis disini -->
					<div class="xd-event-information border-box">
						<p>Information :</p>
						<table>
							<tr>
								<td>Waktu acara</td>
								<td>:</td>
								<td>Selasa, 9 Juli s/d Minggu, 14 Juli 2019</td>
							</tr>
							<tr>
								<td>Lokasi acara</td>
								<td>:</td>
								<td>Dilaksanakan Online</td>
							</tr>
							<tr>
								<td>Tecnical Meeting</td>
								<td>:</td>
								<td>Minggu, 30 Juni 2019</td>
							</tr>
							<tr>
								<td>Contact</td>
								<td>:</td>
								<td>Devi (085 960 500 944)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Yurina (0831 1969 4259)</td>
							</tr>
							<tr>
								<td>Hadiah</td>
								<td>:</td>
								<td>Juara I (Sertifikat + Rp7000k)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Juara II (Sertifikat + Rp5000k)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Juara III (Sertifikat + Rp3000k)</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-lg-6 col-12">
					<!-- Syarat dan Ketentuan lomba ditulis disini -->
					<div class="xd-event-term border-box">
						<p>Persyaratan Pendaftaran :</p>
						<ol style="padding-left: 20px !important;">
							<li>
								Peserta merupakan pemain PUBG di 
								kalangan umum yang berkomitmen mengikuti lomba.
							</li>
							<li>
								Pendaftar wajib mendaftarkan tidak lebih dan kurang dari 4 Orang 
								untuk bertanding dan 1 orang sebagai cadangan  dalam 1 Squad/Team.
							</li>
							<li>
								Setiap leader wajib memiliki akun discord dengan profil 
								((namapanggilan)_(nama tim)).
							</li>
							<li>
								Leader wajib memberikan data diri tim
								(Nickname PUBG) untuk menghindari akun palsu.
							</li>
							<li>
								Peserta yang sudah terdaftar akan diundang ke dalam grup WA.
							</li>
							<p class="xd-event-information-text"><b>Download Ketentuan & Kriterian Penilaian:</b></p>
							<div style="text-align: center;">
								<button class="xd-event-information-download-btn">
									<span>DOWNLOAD</span>
								</button>
							</div>
						</ol>
					</div>

					<!-- Form pendaftaran lomba ditulis disini -->
					<div class="xd-event-register border-box">
						<p class="xd-event-register-mainTitle">Form Pendaftaran :</p>
						<form action="">
							<div class="row">
								<div class="col-12">
									<p class="xd-event-register-subTitle">&nbspAlamat Email : </p>
									<input type="text" name="" placeholder="example@email.com" class="input-text">
									<p class="xd-event-register-subTitle">&nbspNama Team : </p>
									<input type="text" name="" placeholder="ex: RRQ" class="input-text">
									<p class="xd-event-register-subTitle">&nbspNama Ketua : </p>
									<input type="text" name="" placeholder="ex: Steven “Marsha” Kurniawan" class="input-text">
									<p class="xd-event-register-subTitle">&nbspNo Whatsapp : </p>
									<input type="text" name="" placeholder="08212345678" class="input-text">
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