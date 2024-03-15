<?php
defined('ACC') || exit('ACC Denied');
$url = $_SERVER['SCRIPT_NAME'];
$query = explode('&', $_SERVER['QUERY_STRING']);
foreach ($query as $key => $val) {
	if (substr($val, 0, 4) === 'page' || $val === '') {
		unset($query[$key]);
	}
}
$query[] = '';
$query = implode('&', $query);
$url = $url . '?' . $query;
?>
<ul class="pagination">
	<a href="<?php echo $url . 'page=' . ($curr_page - 1) ?>">
		<li>Previous Page</li>
	</a>
	<a href="">
		<li>
			<?php echo $curr_page ?>
		</li>
	</a>
	<a href="<?php echo $url . 'page=' . ($curr_page + 1) ?>">
		<li>Next Page</li>
	</a>
</ul>