<ul>
<?php $items = $content->items; foreach($items as $item): ?>
	<li><a href="<?php echo $item->link; ?>">
	<?php if(isset($item->media__thumbnail__url)): ?>
	<img src="<?php echo $item->media__thumbnail__url; ?>" class="media thumbnail">
	<?php endif; ?>
	<?php echo $item->title; ?></a></li>
<?php endforeach; ?>
</ul>
