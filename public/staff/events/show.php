<?php

require_once('../../../private/initialize.php');
require_login();

$id = isset($_GET['id']) ? $_GET['id'] : '1';
$events = find_events_by_id($id);

?>

<?php $page_title = 'Show Events'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/events/index.php'); ?>">&laquo; Back to List</a>

  <div class="Event show">

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/events/edit.php?id=' . h(u($events['id']))); ?>">Edit</a>
      <a class="action" href="<?php echo url_for('/staff/events/delete.php?id=' . h(u($events['id']))); ?>">Delete</a>
    </div>

    <div class="attributes">
      <dl>
        <dt>Title</dt>
        <dd><?php echo h($events['title']); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($events['description']); ?></dd>
      </dl>
      <dl>
        <dt>Start_date</dt>
        <dd><?php echo h($events['start_date']); ?></dd>
      </dl>
    </div>

  </div>

</div>
