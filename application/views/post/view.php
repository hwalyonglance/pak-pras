<div class="container" style="border: 1px solid blue">
	<div class="row">
		<div class="col s8">
			<div class="row">
				<div class="col s12">
					<header><h3><?=$data['post']['title']?></h3></header>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<span class="small"><?=$data['post']['created_at']?></span>
					<span class="small"><?=$data['post']['u']?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 xl8" style="border: 1px solid red">
			<!-- <?=$data['post']['body']?> -->
			<?php
				echo "<pre>";
				print_r ($data);
				echo "</pre>";
			?>
		</div>
	</div>
</div>