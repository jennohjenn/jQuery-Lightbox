<?php $title='jQuery - Lightbox'; include(__DIR__ . '/header.php'); ?>

<div id='flash'>

<h1>jQuery - Lightbox</h1>
<h2>Nice display for your photos with this simple lightbox.</h2>
<hr />
  <div id="box"><img src='img/cat.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: Waiting together<br />
	  <b>Place</b>: The bus stop<br />
	  <b>Comment</b>: This fella waited for the bus with me.<br />
  </div>
  <div id="box"><img src='img/city.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: Summerday in the city<br />
	  <b>Place</b>: Malmö<br />
	  <b>Comment</b>: Taking a stroll in the sun.<br />
  </div>
    <div id="box"><img src='img/club.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: A classic evening<br />
	  <b>Place</b>: Klubb Krinolin<br />
	  <b>Comment</b>: A nice evening at Klubb Krinolin in Malmö.<br />
  </div>
    <div id="box"><img src='img/ducks.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: Quack<br />
	  <b>Place</b>: A street<br />
	  <b>Comment</b>: These gentlemen escorted me home.<br />
  </div>
<hr />
  <div id="box"><img src='img/flowering.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: Mangolia tree<br />
	  <b>Place</b>: Lund<br />
	  <b>Comment</b>: Isn't it lovely with Magnolias abloom?<br />
  </div>
  <div id="box"><img src='img/plants.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: Plants<br />
	  <b>Place</b>: I don't remember<br />
	  <b>Comment</b>: It might be grass and not plants tbh.<br />
  </div>
    <div id="box"><img src='img/snow.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: Winter 2012<br />
	  <b>Place</b>: My Balcony<br />
	  <b>Comment</b>: First snow or something like that.<br />
  </div>
    <div id="box"><img src='img/window.jpg' alt='' class='lightbox' height="200" width="200" /><br />
	  <b>Title</b>: Sunny evening<br />
	  <b>Place</b>: The library in Malmö<br />
	  <b>Comment</b>: Was there to hear a Finnish author talk.<br />
  </div>
<hr />
<b>Instructions</b>:<br />

<p>This Light-box can be downloaded [ <a href="#">here</a> ] and contains the following:</p>
<b>Files</b>
<ul>
	<li>index.php - where you modify the images and the text you want to display.</li>
	<li>header.php - taking care of pagebuilding and scriptholding.</li>
	<li>footer.php - taking care of pagebuilding and scriptholding.</li>
	<li>source.php - only include this file if you have a need of showing your code. Not neccassary for the function of the plugin.</li>
</ul>
<b>Folders</b>
<ul>
	<li>img - containing example images, free for use.</li>
	<li>js - where all the needed javascript is put.</li>
	<li>style - this lightbox plugin use LESS and file needed for that is placed in the js-folder.</li>
</ul>
</div>

<?php $path=__DIR__; include(__DIR__ . '/footer.php'); ?>
