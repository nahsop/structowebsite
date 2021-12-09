<!-- <h4 class="vk-heading text-uppercase">Quick link</h4> -->
<?php echo $title; ?>

<ul class="vk-list vk-quick-link text-capitalize">
<?php 
	if(!empty($instance['widget_links'])){
		foreach($instance['widget_links'] as $link){
			printf('<li><a href="%s">%s</a></li>', $link['link_url'], $link['link_text']);
		}
		// });
	}
?>
</ul>