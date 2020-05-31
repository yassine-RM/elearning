@extends('superadmin.master')
@section('content')
<!DOCTYPE html>
<html>
<html dir="ltr" lang="en-US">
<head>
         

         <meta charset="UTF-8" />
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/linearicons/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/chartist/css/chartist-custom.css')}}">
            <link rel="stylesheet" href="{{asset('css/main.css')}}">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
            <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
      
      
      
      </head>
<body>
<div class="container-fluid">
					<h3 class="page-title">Bienvenue</h3>
<img name="slide" width="100%"  />
<script>
var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 3000;	// Time Between Switch
	 
// Image List
images[0] = "./images/ests.png";
images[1] = "./images/est.jpg";


// Change Image
function changeImg(){
	document.slide.src = images[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;



</script>

</div>

</body>
@endsection
