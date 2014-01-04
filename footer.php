<?php
  $d = explode("/", trim($path, "/"));
  $srcUrl = 'source.php?dir=' . end($d) . '&amp;file=' . basename($_SERVER["PHP_SELF"]) . '#file';
?>
 
<footer id='footer'>
<p><a href='<?=$srcUrl?>'>Source</a></p>
</footer>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>
