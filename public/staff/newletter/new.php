<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {
  $subject = [];
  $newletter['first_name'] = $_POST['first_name'] ?? '';
  $newletter['last_name'] = $_POST['last_name'] ?? '';
  $newletter['email'] = $_POST['email'] ?? '';
  $newletter['username'] = $_POST['username'] ?? '';


  $result = insert_newletter($newletter);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'Subcriber created.';
    redirect_to(url_for('/staff/newletter/show.php?id=' . $new_id));
  } else {
    $errors = $result;
  }

} else {
  // display the blank form
  $newletter = [];
  $newletter["first_name"] = '';
  $newletter["last_name"] = '';
  $newletter["email"] = '';
  $newletter["username"] = '';
}

?>

<?php $page_title = 'Tanysgrifio/Subscribe'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/newletter/index.php'); ?>">&laquo; Back to List</a>

  <div class="admin new">
    <h1>Tanysgrifio/Subscribe</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('/staff/newletter/new.php'); ?>" method="post">
      <dl>
        <dt>Enw cyntaf/First name</dt>
        <dd><input type="text" name="first_name" value="<?php echo h($newletter['first_name']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Enw olaf/Last name</dt>
        <dd><input type="text" name="last_name" value="<?php echo h($newletter['last_name']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Enw defnyddiwr/Username</dt>
        <dd><input type="text" name="username" value="<?php echo h($newletter['username']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Ebost/Email</dt>
        <dd><input type="text" name="email" value="<?php echo h($newletter['email']); ?>" /><br /></dd>
      </dl>

      <br />

      <div id="operations">
        <input type="submit" value="Tanysgrifio/Subscribe" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
