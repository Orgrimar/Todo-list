<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
	<title>Mon site</title>
</head>
<body>
<header>@include('Part.header')</header>
<div class="contenu">
	@section('contenu')
	@show
</div>
</body>
</html>
