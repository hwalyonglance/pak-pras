<?php
	$this->load->view('_atas');
	if ($this->session->userdata('is_role_0_logged_in')) {
		$this->load->view('form/guru/index');
	}
?>
<style>
	.gdmw{
		width: 300px !important;
	}
	table tr td:first-of-type{
		font-weight: bold;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col s12">
			
		</div>
	</div>
	<div class="row" id="masonry-grid">
		<?php
			for ($i=0;$i<count($data['teachers']);$i++){
				$teacher = '{id:'.$data['teachers'][$i]['id'].', nama:"'.$data['teachers'][$i]['nama'].'", pel:"'.$data['teachers'][$i]['pel'].'"}';
		?>
			<div class="col s6 m6 l4 xl3">
				<div class="card">
					<div class="card-image">
						<img src="<?=base_url()?>uploads/guru/<?=$data['teachers'][$i]['foto']?>" style='max-height: 200px'>
						<?php if($this->session->userdata('is_role_0_logged_in')) {?>
							<button class="btn-floating halfway-fab waves-effect waves-light red left" onclick='drop(<?=json_encode($data['teachers'][$i])?>)'>
								<i class="material-icons">delete_forever</i>
							</button>
							<button class="btn-floating halfway-fab waves-effect waves-light green right" onclick='edit(<?=json_encode($data['teachers'][$i])?>)'>
								<i class="material-icons">mode_edit</i>
							</button>
						<?php } ?>
					</div>
					<div class="card-content">
						<table>
							<colgroup style="width: 33%"></colgroup>
							<colgroup style="width: 67%"></colgroup>
							<tr>
								<td>Nama</td>
								<td>: <?=$data['teachers'][$i]['nama']?></td>
							</tr>
							<tr>
								<td>Pelajaran</td>
								<td>: <?=$data['teachers'][$i]['pel']?></td>
							</tr>
							<tr>
								<td>Bio</td>
								<td>: <?=$data['teachers'][$i]['bio']?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('.modal').modal();
		var $container = $('#masonry-grid');
		$container.masonry({
			columnWidth: '.col',
			itemSelector: '.col',
		});
	});
</script>