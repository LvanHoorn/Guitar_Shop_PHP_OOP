<?php

$objCatalogue = new Catalogue();
$cats = $objCatalogue->getCategories();

$objBusiness = new Business();
$business = $objBusiness->getBusiness();

 ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Guitar Chop Shop</title>
<meta name="description" content="Guitar Chop Shop website" />
<meta name="keywords" content="Guitar Chop Shop website" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="/css/core.css" media="screen" title="no title" charset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>

  <div id="wrapperHeader">
 <div id="header2">
  <img src="images/wallpaper2.jpg" alt="headerfull" />
<div id="header">
	<div id="header_in">
		<br>
  </div>
</div>
	</div>
  </div>
</div>

<div id="outer">
	<div id="wrapper">
		<div id="left">

      <?php require_once('basket_left.php'); ?>
       <?php if(!empty($cats)){ ?>
         
			<h2>Gitaar Brands</h2>
			<ul id="navigation">

        <?php foreach ($cats as $cat) {
              echo "<li><a href=\"/?page=catalogue&amp;category=".$cat['id']."\"";
              echo Helper::getActive(array('category' => $cat['id']));
              echo ">";
              echo Helper::encodeHtml($cat['name']);
              echo "</a></li>";
            }
          ?>
        </ul>
      <?php  } ?>

		</div>
		<div id="right">
