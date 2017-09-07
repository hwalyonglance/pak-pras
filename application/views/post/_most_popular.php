<ul class="collection with-header">
	<li class="collection-header"><h5>10 Paling Sering dikunjungi</h5></li>
	<?php
		foreach ($data['post']['popular'] as $key => $value) {
			?>
			<li class="collection-item truncate">
				<a href="<?=base_url().'post/view/'.$value['id'].'/'.$value['title']?>">
					(<?=$value['view_count']?>x) <?=$value['title']?>
				</a>
			</li>
			<?php
		}
	?>
</ul>