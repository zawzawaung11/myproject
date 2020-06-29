<html>
<head>
  <title>@yield('title') | My Project </title>
  <meta name="description" content="@yield('description')">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}.container {padding:20px;}/* The Modal (background) */.modal {  display: none; /* Hidden by default */  position: fixed; /* Stay in place */  z-index: 1; /* Sit on top */  padding-top: 100px; /* Location of the box */  left: 0;  top: 0;  width: 100%; /* Full width */  height: 100%; /* Full height */  overflow: auto; /* Enable scroll if needed */  background-color: rgb(0,0,0); /* Fallback color */  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */}/* Modal Content */.modal-content {  position: relative;  background-color: #fefefe;  margin: auto;  padding: 0;  border: 1px solid #888;  width: 80%;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);  -webkit-animation-name: animatetop;  -webkit-animation-duration: 0.4s;  animation-name: animatetop;  animation-duration: 0.4s}/* Add Animation */@-webkit-keyframes animatetop {  from {top:-300px; opacity:1}   to {top:0; opacity:1}}@keyframes animatetop {  from {top:-300px; opacity:1}  to {top:0; opacity:1}}/* The Close Button */.close {  color: #000;  float: right;  font-size: 28px;  font-weight: bold;}.close:hover,.close:focus {  color: #fff;  text-decoration: none;  cursor: pointer;}.modal-header {  padding: 2px 16px;  background-color: blue;  color: white;}.modal-body {padding: 2px 16px;}
  </style>
</head>
<body>

@yield('content')

</body>@yield('extra-script')