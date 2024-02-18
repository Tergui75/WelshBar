<?php

require_once('../../../private/initialize.php');

$id = isset($_GET['id']) ? $_GET['id'] : '1';
$newletter  = find_newletter_by_id($id);

?>

<?php $page_title = 'Show Subscriber'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/newletter /index.php'); ?>">&laquo; Back to List</a>

  <div class="Subscriber show">

    <h1>Subscriber: <?php echo h($newletter ['username']); ?></h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/newletter /edit.php?id=' . h(u($newletter ['id']))); ?>">Edit</a>
      <a class="action" href="<?php echo url_for('/staff/newletter /delete.php?id=' . h(u($newletter ['id']))); ?>">Delete</a>
    </div>

    <div class="attributes">
      <dl>
        <dt>First name</dt>
        <dd><?php echo h($newletter ['first_name']); ?></dd>
      </dl>
      <dl>
        <dt>Last name</dt>
        <dd><?php echo h($newletter ['last_name']); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($newletter ['email']); ?></dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><?php echo h($newletter ['username']); ?></dd>
      </dl>
    </div>

  </div>

</div>
