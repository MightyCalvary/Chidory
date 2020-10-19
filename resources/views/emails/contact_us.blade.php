<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
		body{
			font-family:'Work Sans',Helvetica,Arial,Verdana,sans-serif;
		}
		a {
			text-decoration: none;
			color: #0275d8;
		}
		.clearfix::after {
		  display: block;
		  clear: both;
		  content: "";
		}
		.container {
			min-width: 600px;
			border: 0;
			color: #3a3a3b;
			background-color: #f5f5f5;
			padding: 50px;
			margin: 0 auto;
		}
		.content {
			padding: 30px 40px;
			background: #fff;
			margin: 0 auto;
			margin-bottom: 20px;
			font-size: 15px;
			text-align: center;
		}
		.content p {
			line-height: 1.8;
			text-align: left;
		}
		.button {
			background-color: #00A4DE;
			border-radius: 20px;
			color: #212529 !important;
			font-size: 13px;
			text-decoration: none;
			padding: 10px 20px;
		}

		@media only screen and (max-width: 480px) {
		    .container {
		        padding: 20px;
		    }
		    .content {
		    	padding: 10px 20px;
		    }
		}
	</style>
</head>
<body>
	<table class="container">
		<tbody>
			<tr>
				<td>
					@include('emails.header')
					<div class="clearfix">&nbsp;</div>
					<div class="responsive-body">
						<div class="content"> 
							<p>Hello <strong>{!!config()->get('web.name')!!}</strong></p>
							<p style="text-align: left !important">
								There is an inquiry : 
								<ul>
								@foreach($data as $k => $v)
									<li style="text-align: left !important;text-decoration: none;">{{ucwords($k)}} : {{$v}}</li>
								@endforeach
								</ul>
							</p>
							<div class="clearfix">&nbsp;</div>
							<div class="clearfix">&nbsp;</div>
							<p>Have a nice day!</p>
							@include('emails.footer')
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>