<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Content-Language" content="en"/>
		<title>shrtn</title>
		<link rel="canonical" href="http://projects.simsab.net/shrtn/"/>
		<meta name="dc.title" content="shrtn"/>
		<meta name="description" content="shrtn by Simon Sablowski"/>
		<meta name="keywords" content="simon sablowski, berlin, web development, shrtn, php"/>
		<meta name="revisit-after" content="1 day"/>
		<link href="/shrtn/css/style.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="/shrtn/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/shrtn/js/shrtn.js"></script>
	</head>
	<body>
		<div id="popup"></div>
		<div id="document">
			<div id="header">
				<h1 id="title">
					<a href="/shrtn/" title="shrtn">shrtn</a>
					<a id="help" href="#" title="Help">?</a>
				</h1>
			</div>
			<div id="content">
				<p id="explanation">
					Post the URL you want shortened and optionally the code that identifies it.
				</p>
				<form method="post" action="/shrtn/">
					<dl>
						<dt>
							Code
						</dt>
						<dd>
							<input type="text" name="code" value=""/>
						</dd>
						<dt>
							URL
						</dt>
						<dd>
							<input type="text" name="url" value=""/>
						</dd>
					</dl>
					<p>
						<input type="submit" name="submit" value="Submit"/>
					</p>
				</form>
			</div>
		</div>
		<div id="footer">
			<p id="copyright">
				&copy; 2013 <a href="http://www.simsab.net" title="simsab">simsab</a>
			</p>
        </div>
	</body>
</html>