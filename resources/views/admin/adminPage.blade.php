<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	
	<title>KOMSAI OPENHAUS</title>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">

</head>
<body>
	<div id="welcome" class="container">
     <h1 class="page-header">Admin Page</h1>
     <p class="quote"><a class="page-header" href={{url('/adminSeries')}}>Series</a>&nbsp&nbsp
        <a class="page-header" href={{url('/adminGenre')}}>Genre</a>&nbsp&nbsp
        <a class="page-header" href={{url('/adminSortGenre')}}>Series Genre</a>&nbsp&nbsp
        <a class="page-header" href={{url('/adminGame')}}>Game</a>&nbsp&nbsp
        <a class="page-header" href={{url('/adminToken')}}>Token</a>&nbsp&nbsp
        <a class="page-header" href={{url('/adminGameGenre')}}>Games Genre</a>&nbsp&nbsp
        <a class="page-header" href={{url('/listToken')}}>Token List</a>&nbsp&nbsp
		<a class="page-header" href={{url('/viewUsers')}}>View Users</a>
     </p>
	 </div>
</body>
</html>