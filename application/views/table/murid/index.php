<?php
	$this->load->view('_atas');
	if (isset($_SERVER['HTTP_REFERER'])) {
		if ( ($_SERVER['HTTP_REFERER'] === base_url().'su/murid' && $_SERVER['PATH_INFO'] !== '/su/murid') ) {
			$this->load->view('su/back');
			$this->session->set_flashdata([
				'from:su/' => TRUE
			]);
			?>
				<div id="modal_guru_edit" class="modal">
					<div class="modal-content">
						<h3>Edit Calon Murid</h3>
						<?php $this->load->view('form/murid/index');?>
					</div>
					<div class="modal-footer">
						<!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a> -->
					</div>
				</div>
				<div class="fixed-action-btn horizontal click-to-toggle">
					<a class="btn-floating btn-large pulse pink accent-2" onclick="guru_edit()">
						<i class="large material-icons">mode_edit</i>
					</a>
					<!-- <ul>
						<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
					</ul> -->
				</div>
				<script>
					$('.modal').modal();
					function guru_edit() {
						$('#modal_guru_edit').modal('open');
					}
				</script>
			<?php
		}
	}
	if ($data['display'] === 'list') {
?>
	<style>
		a.btn{
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
	<table class="bordered striped highlight responsive-table container">
		<tr>
			<th>#No</th>
			<th>Nama</th>
			<th>Asal Sekolah</th>
			<th>NISN</th>
			<th>Ijazah</th>
			<th>SKHU</th>
			<th>Jenis Kelamin</th>
			<th>$Action</th>
		</tr>
		<?php $i=1; foreach ($data['murid'] as $murid) { ?>
			<tr>
				<td><?=$i?></td>
				<td><?=$murid['nama']?></td>
				<td><?=$murid['asal']?></td>
				<td><?=$murid['nisn']?></td>
				<td><?=$murid['ijazah']?></td>
				<td><?=$murid['skhu']?></td>
				<td><?=$murid['jk']?></td>
				<td>
					<a href="<?=base_url()?>murid/calon/<?=$murid['id']?>" class="btn tooltipped blue" data-tooltip='Detail'><i class="material-icons">info</i></a>
					<a href="<?=base_url()?>su/murid/calon/edit/<?=$murid['id']?>" class="btn tooltipped green" data-tooltip='Edit'><i class="material-icons">mode_edit</i></a>
					<a href="<?=base_url()?>su/murid_delete/<?=$murid['id']?>" class="btn tooltipped red" data-tooltip='Delete'><i class="material-icons">delete_forever</i></a>
				</td>
			</tr>
		<?php $i++;} ?>
	</table>
	<script>
		$('.tooltipped').tooltip()
	</script>
<?php } else { ?>
	<style>
		table td{
			border-bottom: 1px solid blue;
		}
		tr>td:first-child{
			font-weight: bold;
		}
		caption{
			font-size: 35px;
		}
		.img-1-foto{
			max-width: 75%;
			max-height: 550px;
		}
		@media(max-width: 993px){
			.img-1-foto{
				max-height: 750px;
			}
		}
		@media(max-width: 993px){
			.img-1-foto{
				max-height: 500px;
			}
		}
	</style>
	<div class="container">
		<?php
			$this->load->view('table/murid/1');
			$this->load->view('table/murid/2');
			$this->load->view('table/murid/3');
			$this->load->view('table/murid/4');
			$this->load->view('table/murid/5');
		?>
	</div>
<?php }
