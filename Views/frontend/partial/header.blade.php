<!doctype html>
<?php 
	$commonMeta = $metaData[0];
	$ogMeta = $metaData[1];
	$ogTitle = $metaData[2];
	$ogKeyword = $metaData[3];
?>
<html lang="en-US">
<head>
<meta charset="utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />	
<?php 
  echo $commonMeta;
  echo $ogKeyword;
  echo $ogMeta;
  echo $ogTitle;
?>
<meta name="robots" content="index, follow" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('mainfront.css')}}" rel="stylesheet" media="screen">

<style>
  body {
      position: relative;
  }
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-sm-9 > div {
      margin-bottom:60px;
      font-size: 28px;
  }
</style>	

</head>
<body  data-spy="scroll" data-target="#myScrollspy" data-offset="20"  id="container-content">
	<div class="container-margin">
		<div class="main-body">