<?php
require_once('../../../private/initialize.php');
$page_title = 'Show Pages';

$id = $_GET['id'] ?? '1';

?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<a class="back-link" href="<?php echo url_for('/staff/pages/index.php')?>">&laquo; Back to list</a>
<div class="page show">
Page ID: <?php echo h($id) ?>
</div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>