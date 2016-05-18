<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<title>Sorry internal server error</title>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 72px;
				margin-bottom: 40px;
			}
			.title-additional{
				font-size: 32px;
			}
			.block{
				display:block
			}
			.link{
				font-size: 22px;
				cursor:pointer;
				color:#9CADB6
			}
			.block{
				display:block
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title block">500</div>
				<div class="title-additional block">internal server error.</div>
				<div class="link block" onclick="location.href='{{url()}}'">Go To Homepage</a></div>
			</div>
		</div>
	</body>
</html>
