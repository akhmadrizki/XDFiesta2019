@extends('layouts.main-2')

@section('title')
	<title>Coloring - XD Events & Competitions - XD Fiesta 2019</title>
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
						<p>Lomba Mewarnai</p>
						<p>
							Tunjukkan kreatifitas adik-adik dalam mewarnai.
						</p>
					</div>

					<!-- Informasi tentang lomba ditulis disini -->
					<div class="xd-event-information border-box">
						<p>Information :</p>
						<table>
							<tr>
								<td>Waktu acara</td>
								<td>:</td>
								<td>Pukul 10.00 Pagi, Sabtu, 14 September 2019</td>
							</tr>
							<tr>
								<td>Lokasi acara</td>
								<td>:</td>
								<td>Aula Stmik Primakara</td>
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
								<td>Juara I (Sertifikat + Rp250.000)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Juara II (Sertifikat + Rp150.000)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Juara III (Sertifikat + Rp100.000)</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-lg-6 col-12">
					<!-- Syarat dan Ketentuan lomba ditulis disini -->
					<div class="xd-event-term border-box">
						<p>Ketentuan & Persyaratan Pendaftaran :</p>
						<ol style="padding-left: 20px !important;">
							<li>
								Peserta merupakan siswa aktif  Paud-TK 
								(4-6 Tahun = Kategori A) & SD (7-10 (Kategori B).
							</li>
							<li>
								Peserta harus datang 30 menit sebelum lomba dimulai.
							</li>
							<li>
								Peserta membawa meja sendiri.
							</li>
							<li>
								Peserta membawa peralatan mewarnai sendiri.
							</li>
							<li>
								Pendaftaraan : Rp 50.000/anak include snack
							</li>
							<li>
								Melakukan pendaftaraan ke No.Hp Panitia melalui whatsapp . 
							</li>
							<li>
								Jika sudah confirm bisa melakukan pemabayaran pendaftaraan melalui 
								salah satu cara dibawah ini :
								<ul>
									<li>
										Transfer : Bisa melakukan pembayaran ke No.Rek yang tertera. Serta mengirimkan bukti 
										transfer kepanitia yang bersangkutan.
									</li>
									<li>
										Cash  : Bisa melakukan pembayaran ke Ruang Panitia di  STMIK PRIMAKARA, Jln. Tukad Badung No 135, 
										Denpasar, Bali. Dan bukti kwitansi bisa di simpan dan dibawa pada saat registrasi sebelum lomba.
									</li>
								</ul>
							</li>
							<li>
								Sebelum lomba dimulai, registrasi ulang wajib dilakukan untuk mendapatkan nomer peserta
							</li>
							<li>
								Pendaftaraan : Rp 50.000/anak include snack
							</li>
							<p class="xd-event-term-text"><b>Download Ketentuan & Kriterian Penilaian:</b></p>
							<div style="text-align: center;">
								<button class="xd-event-term-download-btn">
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
									<p class="xd-event-register-subTitle">&nbspNama Peserta : </p>
									<input type="text" name="" placeholder="ex: Dipadana" class="input-text">
									<p class="xd-event-register-subTitle">&nbspUmur : </p>
									<input type="text" name="" placeholder="ex: 7 Tahun" class="input-text">
									<p class="xd-event-register-subTitle">&nbspNama Orang Tua : </p>
									<input type="text" name="" placeholder="ex: Steven Kurniawan" class="input-text">
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