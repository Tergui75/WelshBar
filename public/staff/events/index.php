<?php

require_once('../../../private/initialize.php');

require_login();
$events_set = find_all_events();

?>

<?php $page_title = 'Events'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="events listing">
    <h1>Events</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/events/new.php'); ?>">Create New Event</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Start</th>
        <th>End</th>
        <th>Status</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php while($events = mysqli_fetch_assoc($events_set)) { ?>
        <tr>
          <td><?php echo h($events['id']); ?></td>
          <td><?php echo h($events['title']); ?></td>
          <td><?php echo h($events['start_date']); ?></td>
          <td><?php echo h($events['end_date']); ?></td>
          <td><?php echo h($events['status']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/events/show.php?id=' . h(u($events['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/events/edit.php?id=' . h(u($events['id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/events/delete.php?id=' . h(u($events['id']))); ?>">Delete</a></td>
        </tr>

        
      <?php } ?>
    </table>

    <?php
      mysqli_free_result($events_set);
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
