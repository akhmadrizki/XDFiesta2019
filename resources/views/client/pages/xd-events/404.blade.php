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