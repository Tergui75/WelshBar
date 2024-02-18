<?php

require_once('../../../private/initialize.php');
require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/newletter/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  $newletter  = [];
  $newletter ['id'] = $id;
  $newletter ['first_name'] = $_POST['first_name'] ?? '';
  $newletter ['last_name'] = $_POST['last_name'] ?? '';
  $newletter ['email'] = $_POST['email'] ?? '';
  $newletter ['username'] = $_POST['username'] ?? '';
  

  $result = update_newletter($newletter);
  if($result === true) {
    $_SESSION['message'] = 'newletter  updated.';
    redirect_to(url_for('/staff/newletter/show.php?id=' . $id));
  } else {
    $errors = $result;
  }
} else {
  $newletter  = find_newletter_by_id($id);
}

?>

<?php $page_title = 'Edit newletter '; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/newletter/index.php'); ?>">&laquo; Back to List</a>

  <div class="newletter  edit">
    <h1>Edit newletter</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('/staff/newletter/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>First name</dt>
        <dd><input type="text" name="first_name" value="<?php echo h($newletter ['first_name']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Last name</dt>
        <dd><input type="text" name="last_name" value="<?php echo h($newletter ['last_name']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Username</dt>
        <dd><input type="text" name="username" value="<?php echo h($newletter ['username']); ?>" /></dd>
      </dl>

      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="email" value="<?php echo h($newletter ['email']); ?>" /><br /></dd>
      </dl>
      <br />

      <div id="operations">
        <input type="submit" value="Edit newletter " />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
