<!DOCTYPE html>
<html lang = "th">
  <head>
    <meta charset="utf-8">
    <title>
      5710121064 นายมนตรี มะสมัน
    </title>
    <style>
	
	*,body {
		font-family: Tahoma,Helvetica,Arial,sans-serif;
		font-size:1em;
	}
	.wrapper { 
		background-color: #FFF;
		width: 960px;
		margin: 0 auto;
		padding: 20px;
	}
	
	.header {
		background:#ADB96E;
		padding:20px;
	}
	.menu1, .menu2, .content {
		min-height:600px;
	}
	.menu1, .menu2 {
		width:200px;
		float:left;
		background:#EADCAE;
		padding:5px;
	}
	
	.content {
		width:500px;
		float:left;
		background:#FFF;
		padding:5px 20px;
	}
	
	h1 {
		font-size:1.8em;
		font-weight:bold;
		margin:0 0 5px 0;
	}
	
	.footer {
		clear:both;
		background:#CCC49F;
		padding:20px;

	}
    </style>
  </head>
  <body>
    <div class="wrapper">
		<div class="header"><h1>Header</h1></div>
		<div class="menu1">
        	<h1>Menu 1</h1>
            <ul>
            	<li><a href="?page=lab-1-1.html">lab-1-1.html</a></li>
            	<li><a href="?page=lab-1-2.html">lab-1-2.html</a></li>
            	<li><a href="?page=lab-1-3.html">lab-1-3.html</a></li>
            </ul>
        
        
        </div>
		<div class="content">
        	<?php include $_GET[page]; ?>
		</div>
		<div class="menu2">Menu 2</div>
		<div class="footer">Footer</div>
    </div>
  </body>
</html>
