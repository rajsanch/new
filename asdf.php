<!DOCTYPE html>
<html>
	<head>
	<style>
	{
		box sizing: border-box;
	}
	body 
	{
		font-family: Arial;
		padding: 10px;
		bacground: #f2f2f2;
	}
	.header
	{
		padding: 100px;
		object-fit: cover;
		background-color: white;
	}
	.topnav
	{
		overflow: hidden;
		background-color: #333;
	}
	.topnav a
	{
		float: left;
		display: block;
		text-align: center;
		color: #f1f1f1;
		text-decoration: none;
		padding: 14px 16px;
	}
	.topnav a :hover
	{
		background-color: #ddd;
		color: black;
	}
	.left-column
	{
		float: left;
		width: 25%;
	}
	.right-column
	{
		float: right;
		width: 75%;
	}
	.fakeimg
	{
		background-color: #aaa;
		width: 100%;
		padding: 20px;
	}
	.card
	{
		backround-color: white;
		padding: 20px;
		margin-top: 20px;
	}
	.row:after
	{
		content: "";
		display: table;
		clear: both;
	}
	.footer
	{
		padding: 20px;
		text-align: center;
		background: #ddd;
		margin-top: 20px;
	}
	</style>
	</head>
	<body>
	<div class="header" >
	</div>
	<div class="topnav">
		<a href="#">Home</a>
		<a href="#">Contact</a>
		<a href="#">Portfolio</a>
		<a href="#" style="float:right">Logout</a>
	</div>
	<div class="row" >
		<div class="rightcolumn">
			<div class="card">
				<h2>TITLE asdf</h2>
				<h5> Title description, 12345</h5>
				<div class"fakeimg" style="height:200px;">Image</div>
				<p> adsfasdfasf</p>
				<p>qweqeqr1231231231413</p>
	</div>
	</div>
	<div class="leftcolumn">
		<div class="card">
			<h2>about me</h2>
			<div class"fakeimg" style="height:100px;">Image</div>
			<p> adsjashdklajsdhakljdh</p>
		</div>
	<div class="card">
		<h3>Popular post</h3>
		<div class="fakeimg"><p>Image</p></div>
		<div class="fakeimg"><p>Image</p></div>
		<div class="fakeimg"><p>Image</p></div>
	</div>
	<div>
		<div class="card">
			<h3>Follow Me</h3>
			<p>djgfwiuert3284yhraey5</p>
		</div>
	</div>
	<div class="footer">
		<h2>Footer</h2>
	</div>
	</body>
</html>
