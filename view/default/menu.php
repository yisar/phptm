<?php defined('ACC') || exit('ACC Denied'); ?>
<div class="indent">
	<ul>
		<?php foreach ($allCats as $_cat) { ?>
			<a href="./?cat=<?php echo $_cat['id']; ?>">
				<li <?php echo $_cat['id'] == $curr_cat_id ? 'class="active"' : ''; ?>>
					<?php echo str_repeat('&nbsp;', $_cat['lev'] * 2), $_cat['cat_name']; ?>
				</li>
			</a>
		<?php } ?>
	</ul>
</div>