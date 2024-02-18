<?php

require_once('../../../private/initialize.php');

require_login();
$newletter_set = find_all_newsletter();

?>

<?php $page_title = 'Newsletter Subscription'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="newletter listing">
    <h1>Subscribers</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/newletter/new.php'); ?>">Create New Subscriber</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>First</th>
        <th>Last</th>
        <th>Email</th>
        <th>Username</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php while($newletter = mysqli_fetch_assoc($newletter_set)) { ?>
        <tr>
          <td><?php echo h($newletter['id']); ?></td>
          <td><?php echo h($newletter['first_name']); ?></td>
          <td><?php echo h($newletter['last_name']); ?></td>
          <td><?php echo h($newletter['email']); ?></td>
          <td><?php echo h($newletter['username']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/newletter/show.php?id=' . h(u($newletter['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/newletter/edit.php?id=' . h(u($newletter['id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/newletter/delete.php?id=' . h(u($newletter['id']))); ?>">Delete</a></td>
        </tr>

        
      <?php } ?>
    </table>

    <?php
      mysqli_free_result($newletter_set);
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
