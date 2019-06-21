@extends('layouts.main')

@section('title')
	<title>XD Events & Competitions - XD Fiesta 2019</title>
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
	<section class="xd-event" id="xd-event">
		<div class="container" style="height:350px">
			<a class="juduls"><h1 style="margin-top:150px;text-align:center;font-size:2.5rem">
			Halaman Tidak Ditemukan
			</h1></a>	
			<a style="display:block;text-align:center;font-size:1rem">
			Silahkan cari halaman lain...
			</a>
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
		function myFunction() {
		  var checkBox = document.getElementById("myCheck");
		  var text = document.getElementById("text");
		  var text2 = document.getElementById("text2");
		  var text3 = document.getElementById("text3");
		  var text4 = document.getElementById("text4");
		  var text5 = document.getElementById("text5");
		  var text6 = document.getElementById("text6");
		  var jumlah_anggota = document.getElementById("hidden5");
		  var jumlah_anggota2 = document.getElementById("hidden6");

		  var anggota_null = document.getElementById("anggota_null");
		  if (checkBox.checked == true){
		    text.style.display = "block";
		    text2.style.display = "block";
		    text3.style.display = "block";
		    text4.style.display = "block";
		    text5.style.display = "block";
		    text6.style.display = "none";
		    anggota_null.style.display = "none";
		    jumlah_anggota.style.display ="block";
		    jumlah_anggota2.style.display = "none";
		    jumlah_anggota.disabled = false;
		    jumlah_anggota2.disabled = true;
		  } else {
		     text.style.display = "none";
		     text2.style.display = "none";
		     text3.style.display = "none";
		     text4.style.display = "none";
		     text5.style.display = "none";
		     // lima.style.display = "block";
		     text6.style.display = "block";
		     anggota_null.style.display = "block";
		     jumlah_anggota.style.display ="none";
		     jumlah_anggota2.style.display = "block";
		     jumlah_anggota.disabled = true;
		     jumlah_anggota2.disabled = false;
		     // enam.style.display = "none";
		     // textt.style.display = "block";
		     // textt2.style.display = "block";
		     // textt3.style.display = "block";
		     // textt4.style.display = "block";
		     // textt5.style.display = "block";
		     // textt6.style.display = "block";
		  }
		}
	</script>

	<script>
		function myFunction2() {
		  var checkBox = document.getElementById("myCheck2");
		  var text = document.getElementById("text");
		  var text2 = document.getElementById("text2");
		  var text3 = document.getElementById("text3");
		  var text4 = document.getElementById("text4");
		  var text5 = document.getElementById("text5");
		  var text6 = document.getElementById("text6");
		  var jumlah_anggota = document.getElementById("hidden5");
		  var jumlah_anggota2 = document.getElementById("hidden6");
		  
		  var anggota_null = document.getElementById("anggota_null");
		  if (checkBox.checked == true){
		    text.style.display = "block";
		    text2.style.display = "block";
		    text3.style.display = "block";
		    text4.style.display = "block";
		    text5.style.display = "block";
		    text6.style.display = "block";
		    jumlah_anggota.style.display ="none";
		    jumlah_anggota2.style.display = "block";
		    anggota_null.style.display = "none";
		    jumlah_anggota.disabled = true;
		    jumlah_anggota2.disabled = false;
		    // lima.style.display = "block";

		    // enam.style.display = "block";
		    // textt.style.display = "block";
		    // textt2.style.display = "block";
		    // textt3.style.display = "block";
		    // textt4.style.display = "block";
		    // textt5.style.display = "block";
		    // textt6.style.display = "block";
		  } else {
		     text.style.display = "none";
		     text2.style.display = "none";
		     text3.style.display = "none";
		     text4.style.display = "none";
		     text5.style.display = "none";
		     // lima.style.display = "block";
		     text6.style.display = "none";
		     jumlah_anggota.style.display ="block";
		     jumlah_anggota2.style.display = "none";
		     anggota_null.style.display = "block";
		     jumlah_anggota.disabled = false;
		     jumlah_anggota2.disabled = true;
		     // enam.style.display = "none";
		     // textt.style.display = "none";
		     // textt2.style.display = "none";
		     // textt3.style.display = "none";
		     // textt4.style.display = "none";
		     // textt5.style.display = "none";
		     // textt6.style.display = "none";
		  }
		}
	</script>

	{{-- <script>
		function myFunction() {
		  var checkBox = document.getElementById("myCheck2");
		  var textt = document.getElementById("text");
		  var textt2 = document.getElementById("text2");
		  var textt3 = document.getElementById("text3");
		  var textt4 = document.getElementById("text4");
		  var textt5 = document.getElementById("text5");
		  var textt6 = document.getElementById("text6");
		  if (checkBox.checked == true){
		    text.style.display = "block";
		    text2.style.display = "block";
		    text3.style.display = "block";
		    text4.style.display = "block";
		    text5.style.display = "block";
		    text6.style.display = "block";
		  } else {
		     text.style.display = "none";
		     text2.style.display = "none";
		     text3.style.display = "none";
		     text4.style.display = "none";
		     text5.style.display = "none";
		     text6.style.display = "none";
		  }
		}
	</script> --}}

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