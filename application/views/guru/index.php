<?php
	$this->load->view('_atas');
	$this->load->view('su/_nav');
	$this->load->view('form/guru/index');
?>
<style>
	.gdmw{
		width: 300px !important;
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
						<button class="btn-floating halfway-fab waves-effect waves-light red left" onclick='guru_delete(<?=json_encode($data['teachers'][$i])?>)'>
							<i class="material-icons">delete_forever</i>
						</button>
						<button class="btn-floating halfway-fab waves-effect waves-light green right" onclick='guru_edit(<?=json_encode($data['teachers'][$i])?>)'>
							<i class="material-icons">mode_edit</i>
						</button>
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
						</table>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- FORM DELETE -->
<?=form_open('guru/delete',[],['guru_delete_id'=>'0'])?>
	<div id="guru_delete" class="modal gdmw">
		<div class="modal-content">
			<h4 class="center">Hapus Guru ini?</h4>
			<p>Nama: <span class="nama"></span></p>
		</div>
		<div class="modal-footer">
			<button class="waves-effect waves-green btn-flat" type="submit">Agree</button>
		</div>
	</div>
</form>
<!-- FLOATING BUTTON -->
<div class="fixed-action-btn horizontal click-to-toggle" onclick="add()">
	<a class="btn-floating btn-large pulse pink accent-2">
		<i class="large material-icons">add</i>
	</a>
	<!-- <ul>
		<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
	</ul> -->
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
