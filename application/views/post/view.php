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
					<span class="small"><?=$data['post']['nama']?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 xl8" style="border: 1px solid red">
			<!-- <?=str_replace('PP_DOUBLE_QUOTE', '"', str_replace('PP_SINGLE_QUOTE', '\'', $data['post']['body']))?> -->
			<?php
				$data['post']['body'] = '';
				echo "<pre>";
				print_r ($data);
				echo "</pre>";
			?>
		</div>
	</div>
</div>