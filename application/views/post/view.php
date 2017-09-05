<main style="padding-top: 32px">
	<div class="container" id="main">
		<div class="row">
			<div class="col s12 l8 xl8 z-depth-4">
				<div class="row">
					<div class="col s12">
						<header><h3><?=$data['post']['view']['title']?></h3></header>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<span class="small">
							oleh <b><?=$data['post']['view']['nama']?></b>,
							pada <?=$data['post']['view']['created_at']?>
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col s12" id="content">
						<?=str_replace('PP_DOUBLE_QUOTE', '"', str_replace('PP_SINGLE_QUOTE', '\'', $data['post']['view']['body']))?>
					</div>
				</div>
			</div>
			<div class="col s12 l4 xl4 z-depth-4">
				<ul class="collection with-header">
					<li class="collection-header"><h5>10 Terbaru</h5></li>
					<?php
						foreach ($data['post']['newest'] as $key => $value) {
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
			</div>
			<div class="col s12 l4 xl4 z-depth-4">
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
			</div>
		</div>
	</div>
</main>
<script>
	$(document).ready(function() {
		$('#main #content ul').addClass('browser-default')
	});
</script>