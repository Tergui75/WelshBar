<?php

require_once('../../../private/initialize.php');
require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/newletter/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  $result = delete_newletter($id);
  $_SESSION['message'] = 'Subscriber deleted.';
  redirect_to(url_for('/staff/newletter/index.php'));
} else {
  $newletter = find_newletter_by_id($id);
}

?>

<?php $page_title = 'Delete newletter'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/newletter/index.php'); ?>">&laquo; Back to List</a>

  <div class="newletter delete">
    <h1>Delete Dubscriber</h1>
    <p>Are you sure you want to delete this subscriber?</p>
    <p class="item"><?php echo h($newletter['username']); ?></p>

    <form action="<?php echo url_for('/staff/newletter/delete.php?id=' . h(u($newletter['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Subscriber" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
