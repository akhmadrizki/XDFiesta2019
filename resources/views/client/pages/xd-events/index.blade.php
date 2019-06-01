@extends('layouts.main')

@section('title')
	<title>{{$lomba->judul_nav}} - XD Events & Competitions - XD Fiesta 2019</title>
@endsection

@section('aditional-style')
	<style>
		.wrna{
			color: #70A6DC;
		}
		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 100px; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  background-color: #fefefe;
		  margin: 3% auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 75%;
		}

		/* The Close Button */
		.close {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		.form-modal{
			width: 100%;
		    box-sizing: border-box;
		    padding: 8px 20px;
		    border-radius: 6px;
		    border: 1px solid #ddd;
		    outline: none;
		    transition: all 0.3s ease-in-out;
		    margin-bottom: 15px;
		}
	</style>
@endsection

@section('content')

		<section class="xd-event">
			@if(session('allert'))
				<div class="alert success">
				  <span class="closebtn">&times;</span>  
				  <strong>SELAMAT</strong> Anda telah berhasil mendaftar 👌
				</div>
			@endif
		</section>
		<section class="xd-event" id="xd-event">
	<!-- Gambar lomba dimasukkan disini -->
		<div class="xd-event-imageBanner">
			<img src="{{url('uploads/'.$lomba->pic)}}" alt="">
		</div>
		
		@if($lomba->pdf == null)
			<div class="comming-soon" style="padding: 25px;text-align: center;">
				<h1>Comming Soon...</h1>
			</div>
		@else
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
						<form>
							<div class="row">
								<div class="col-12">
{{-- 									<input type="hidden" name="id_lomba" class="input-text" value="{{$lomba->id_lomba}}">
									<input type="hidden" name="judul_lomba" class="input-text" value="{{$lomba->judul}}"> --}}
									
									<p class="xd-event-register-subTitle">&nbspAlamat Email : </p>
									<input type="email" id="myText1" placeholder="example@email.com" class="input-text">

									<p class="xd-event-register-subTitle">&nbspNama Team : </p>
									<input type="text" id="myText2" placeholder="ex: RRQ" class="input-text">

									<p class="xd-event-register-subTitle">&nbspNama Ketua : </p>
									<input type="text" id="myText3" placeholder="ex: Steven “Marsha” Kurniawan" class="input-text">

									<p class="xd-event-register-subTitle">&nbspNo Whatsapp : </p>
									<input type="tel" id="myText4" placeholder="08212345678" class="input-text">
								</div>
								<div class="offset-lg-7"></div>
							</div>
						</form>
						<div class="col-lg-12 col-12" style="text-align: right;">
							<button class="reset-button">
								<span>RESET</span>
							</button>
							<button id="myBtn" class="submit-button">
								<span>SUBMIT</span>
							</button>
						</div>
					</div>

					<div id="myModal" class="modal">
					  <!-- Modal content -->
					  <div class="modal-content">
					  	<div class="row">
							<div class="container">
								<div class="col-12">
						    		<span class="close">&times;</span>
						    	</div><br>
						    	<div class="col-12">
						    		<p class="xd-event-register-mainTitle wrna">Apakah Data Anda di Bawah ini Sudah Benar ?</p>
						    		<form action="{{route('daftar.lomba')}}" method="POST" enctype="multipart/form-data">
						    			{{ csrf_field() }}
						    			<div class="row">
						    				<input type="hidden" name="id_lomba" class="input-text" value="{{$lomba->id_lomba}}">
											<input type="hidden" name="judul_lomba" class="input-text" value="{{$lomba->judul}}">

						    				<div class="col-12">
							    				<label>Alamat Email :</label>
							    				<input type="email" id="slug" name="alamat_email" placeholder="example@email.com" class="form-modal" required>
							    			</div>
							    			<div class="col-12">
							    				<label>Nama Team :</label>
							    				<input type="text" id="slug2" name="nama_team" placeholder="ex: RRQ" class="form-modal" required>
							    			</div>
							    			<div class="col-12">
							    				<label>Nama Ketua :</label>
							    				<input type="text" id="slug3" name="nama_ketua" placeholder="ex: Steven “Marsha” Kurniawan" class="form-modal" required>
							    			</div>
							    			<div class="col-12">
							    				<label>No Whatsapp :</label>
							    				<input type="tel" id="slug4" name="no_wa" placeholder="08212345678" class="form-modal" required>
							    			</div>
						    			</div>
										<div class="col-12">
											<button class="submit-button">
												<span>SUBMIT</span>
											</button>
										</div>
						    		</form>
						    	</div>
						    </div>
					  	</div>
					  </div>
					</div>

				</div>
			</div>
			@endif
		</div>	
	</section>

@endsection

@section('additional-scripts')

	<script>
		var close = document.getElementsByClassName("closebtn");
		var i;

		for (i = 0; i < close.length; i++) {
		  close[i].onclick = function(){
		    var div = this.parentElement;
		    div.style.opacity = "0";
		    setTimeout(function(){ div.style.display = "none"; }, 600);
		  }
		}
	</script>

	<script>
		var myText1 = document.getElementById("myText1");
		var myText2 = document.getElementById("myText2");
		var myText3 = document.getElementById("myText3");
		var myText4 = document.getElementById("myText4");
		var slug = document.getElementById("slug");
		var slug2 = document.getElementById("slug2");
		var slug3 = document.getElementById("slug3");
		var slug4 = document.getElementById("slug4");
		function slugify(text) {
			return text.toString()
				.replace(/\-\-+/g, '-')         // Replace multiple - with single -
				.replace(/^-+/, '')             // Trim - from start of text
				.replace(/-+$/, '');            // Trim - from end of text
		}
		myText1.addEventListener('keyup', function () {
			slug.value = slugify(myText1.value);
		});
		myText2.addEventListener('keyup', function () {
			slug2.value = slugify(myText2.value);
		});
		myText3.addEventListener('keyup', function () {
			slug3.value = slugify(myText3.value);
		});
		myText4.addEventListener('keyup', function () {
			slug4.value = slugify(myText4.value);
		});
	</script>

	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		  modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
		</script>


@endsection