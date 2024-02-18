<?php require_once('../../../private/initialize.php');
require_login();
?>

<?php

  $page_set = find_all_pages();
  $subject_set = find_all_subjects();


?>




<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="pages listing">
    <h1>Feedbacks</h1>

    <div class="actions">
    <a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create New Feedback</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Subject</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($page = mysqli_fetch_assoc($page_set)) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['subject_id'])?></td>
    	    <td><?php echo h($page['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <?php mysqli_free_result($page_set); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
