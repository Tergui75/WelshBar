<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/events/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  $events = [];
  $events['id'] = $id;
  $events['title'] = $_POST['title'] ?? '';
  $events['description'] = $_POST['description'] ?? '';
  $events['start_date'] = $_POST['start_date'] ?? '';
  $events['end_date'] = $_POST['end_date'] ?? '';
  $events['created'] = $_POST['created'] ?? '';
  $events['status'] = $_POST['status'] ?? '';

  
  $result = update_events($events); 
  if($result === true) {
    $_SESSION['message'] = 'events  updated.';
    redirect_to(url_for('/staff/events/show.php?id=' . $id));
  } else {
    $errors = $result;
  }
} else {
  $events  = find_events_by_id($id);
}

?>

<?php $page_title = 'Edit events '; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/events/index.php'); ?>">&laquo; Back to List</a>

  <div class="events  edit">
    <h1>Edit events</h1>

    <?php echo display_errors($errors); ?>

    <form action="<?php echo url_for('/staff/events/edit.php?id=' . h(u($id))); ?>" method="post">
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



      <div id="operations">
        <input type="submit" value="Edit events " />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
