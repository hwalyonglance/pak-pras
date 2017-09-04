<main>
	<div class="container" id="main" style="border: 1px solid blue">
		<div class="row">
			<div class="col s8" style="border: 1px solid green;">
				<div class="row">
					<div class="col s12">
						<header><h3><?=$data['post']['title']?></h3></header>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<span class="small">
							oleh <b><?=$data['post']['nama']?></b>,
							pada <?=$data['post']['created_at']?>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 xl8" id="content" style="border: 1px solid red">
				<?=str_replace('PP_DOUBLE_QUOTE', '"', str_replace('PP_SINGLE_QUOTE', '\'', $data['post']['body']))?>
			</div>
		</div>
	</div>
</main>
<script>
	$(document).ready(function() {
		$('#main #content ul').addClass('browser-default')
	});
</script>