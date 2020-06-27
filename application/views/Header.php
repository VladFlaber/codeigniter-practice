<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Codeigniter 3</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li><a href="<?php echo site_url('home/itemslist'); ?>">Index</a></li>
<li><a href="<?php echo site_url('home/itemslist'); ?>">Get All Items</a></li>
<li><a href="<?php echo site_url('home/getItemInfo'); ?>">Get Item</a></li>
<li><a href="<?php echo site_url('home/getItemInfo2'); ?>">Select Item</a></li>
<li>
<a href="<?php echo site_url('home/selectImages');?> ">Upload Image</a>
</li>
<li>
<a href="<?php echo site_url('home/selectMultipleImages'); ?>">Multiple Upload</a>
</li>
<li>
<a href="<?php echo site_url('home/Map'); ?>">Google Map</a>
</li>
</ul>
</div>
</div>
</nav>
