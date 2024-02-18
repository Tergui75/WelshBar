<?php

require_once('../../../private/initialize.php');
require_login();

if(is_post_request()) {
  $events = [];
  $events['title'] = $_POST['title'] ?? '';
  $events['description'] = $_POST['description'] ?? '';
  $events['start_date'] = $_POST['start_date'] ?? '';
  $events['end_date'] = $_POST['end_date'] ?? '';
  $events['created'] = $_POST['created'] ?? '';
  $events['status'] = $_POST['status'] ?? '';

  



  $result = insert_events($events);

  
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'Events created.';
    redirect_to(url_for('/staff/events/show.php?id=' . $new_id));
  } else {
    $errors = $result;
  }

} else {
  // display the blank form
  $events = [];

  $events['title'] =  '';
  $events['description'] = '';
  $events['start_date'] = '';
  $events['end_date'] = '';
  $events['created'] = '';
  $events['status'] = '';
}

?>

<?php $page_title = 'Create Events'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/events/index.php'); ?>">&laquo; Back to List</a>

  <div class="admin new">
    <h1>Create Event</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('/staff/events/new.php'); ?>" method="post">
      <dl>
        <dt>Title</Title></dt>
        <dd><input type="text" name="title" value="<?php echo h($events['title']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><input type="text" name="description" value="<?php echo h($events['description']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Start date</dt>
        <dd><input type="text" name="start_date" value="<?php echo h($events['start_date']); ?>" /></dd>
      </dl>
      <dl>
        <dt>End date</dt>
        <dd><input type="text" name="end_date" value="<?php echo h($events['end_date']); ?>" /><br /></dd>
      </dl>
      <dl>
        <dt>Created</dt>
        <dd><input type="date" name="created" value="<?php echo h($events['created']); ?>" /><br /></dd>
      </dl>
      <dl>
        <dt>Status</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if($events['status'] == 1) { echo " checked"; } ?> />
        </dd>
      </dl>

      <br />

      <div id="operations">
        <input type="submit" value="Create Event" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
