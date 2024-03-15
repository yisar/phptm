<?php
defined('ACC') || exit('ACC Denied');
$url = $_SERVER['PHP_SELF'];
?>
<ul class="pagination">
	<a href="<?php echo $url . '&page='($curr_page - 1) ?>">
		<li>Previous Page</li>
	</a>
	<li>
		<?php echo $curr_page ?>
	</li>
	<a href="<?php echo $url . '&page='($curr_page + 1) ?>">
		<li>Next Page</li>
	</a>
</ul>