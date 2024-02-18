<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/events/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  $result = delete_events($id);
  $_SESSION['message'] = 'Event deleted.';
  redirect_to(url_for('/staff/events/index.php'));
} else {
  $events = find_events_by_id($id);
}

?>

<?php $page_title = 'Delete Event'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/events/index.php'); ?>">&laquo; Back to List</a>

  <div class="Event delete">
    <h1>Delete Events</h1>
    <p>Are you sure you want to delete this event?</p>
    <p class="item"><?php echo h($events['title']); ?></p>

    <form action="<?php echo url_for('/staff/events/delete.php?id=' . h(u($events['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Event" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
