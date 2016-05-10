<!DOCTYPE html>
<html lang="en" ng-app="app">
	<head>
		<meta charset="utf-8">
		<meta name="_token" content="{!! csrf_token() !!}" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description"
		content="BBC Assignment">
		<meta name="author" content="Prateek Singh">
		<title>@yield('meta-title', 'BBC Assignment')</title>
		<link rel="icon" type="image/png" sizes="96x96" href="/images/logo.png">
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		@section('header')
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/app.css">
		@show
	</head>
	<body>
		
		<div ng-controller="ListController as list" ng-init="list.getProgram('a',1)">
			@yield('content')
		</div>
		
		<script src="/js/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/app.js"></script>
		<script src="/js/paginate.js"></script>
		<script> var path = "{{ base_path() }}" </script>
	</body>
</html>