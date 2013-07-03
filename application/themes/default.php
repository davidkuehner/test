<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $titre; ?></title>
          <meta http-equiv="Content-Type" content="text/html" charset="<?php echo $charset; ?>" />
  <?php foreach($css as $url): ?>
          <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />
  <?php endforeach; ?>
  </head>
  <body>
    <div id="container">
      <?php echo $output; ?>
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </div><!-- #container -->

  </body>
</html>