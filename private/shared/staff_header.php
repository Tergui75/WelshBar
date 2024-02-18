<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Saith Seren - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Saith Seren Staff Area</h1>
    </header>

    <navigation>
      <ul>
        <li>User: <?php echo $_SESSION['username'] ?? ''; ?></li>
        <li><a href="<?php echo url_for('/Site/home.php'); ?>">Gwefan/Website</a></li>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Bwydlen/Menu</a></li>
        <li><a href="<?php echo url_for('/staff/logout.php'); ?>">Allgofnodi/Logout</a></li>
      </ul>
    </navigation>

    <?php echo display_session_message(); ?>
