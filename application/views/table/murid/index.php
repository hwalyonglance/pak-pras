<?php
	if (isset($_SERVER['HTTP_REFERER'])) {
		if ( $this->session->userdata('is_role_0_logged_in') ) {
			$this->load->view('su/_back',['to'=>'murid']);
			$this->session->set_flashdata([
				'from:su/' => TRUE
			]);
			?>
				<div id="edit" class="modal">
					<div class="modal-content">
						<?php if( in_array($_SERVER['PATH_INFO'], ['/su/murid']) ){ ?>
							<h3>Tambah Calon Murid</h3>
						<?php }else{ ?>
							<h3>Edit Calon Murid</h3>
						<?php } ?>
						<?php $this->load->view('form/murid/index');?>
					</div>
					<div class="modal-footer">
						<!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a> -->
					</div>
				</div>
				<div class="fixed-action-btn horizontal click-to-toggle">
					<?php if( $this->session->userdata('is_role_0_logged_in') ){ ?>
						<a class="btn-floating btn-large pulse pink accent-2" onclick="edit()">
							<i class="large material-icons">add</i>
						</a>
					<?php }else{ ?>
						<a class="btn-floating btn-large pulse pink accent-2" onclick="edit()">
							<i class="large material-icons">mode_edit</i>
						</a>
					<?php } ?>
					<!-- <ul>
						<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
					</ul> -->
				</div>
				<script>
					$('.modal').modal();
					function edit() {
						$('#edit').modal('open');
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
			<th>Jenis Kelamin</th>
			<th>Tanggal Daftar</th>
			<?php if ($this->session->userdata('is_role_0_logged_in')) { ?>
				<th>$Action</th>
			<?php } ?>
		</tr>
		<?php $i=1; foreach ($data['murid'] as $murid) { ?>
			<tr>
				<td><?=$i?></td>
				<td><?=$murid['nama']?></td>
				<td><?=$murid['asal']?></td>
				<td><?=$murid['jk']?></td>
				<td><?=$murid['created_at']?></td>
				<?php if ($this->session->userdata('is_role_0_logged_in')) { ?>
					<td>
						<a href="<?=base_url()?>murid/calon/<?=$murid['id']?>" class="btn tooltipped blue" data-tooltip='Detail'><i class="material-icons">info</i></a>
						<a href="<?=base_url()?>su/murid/calon/edit/<?=$murid['id']?>" class="btn tooltipped green" data-tooltip='Edit'><i class="material-icons">mode_edit</i></a>
						<a href="<?=base_url()?>su/murid_delete/<?=$murid['id']?>" class="btn tooltipped red" data-tooltip='Delete'><i class="material-icons">delete_forever</i></a>
						<a href="<?=base_url()?>pdf/murid/<?=$murid['id']?>" class="btn tooltipped blue" data-tooltip='PDF'><i class="material-icons">print</i></a>
					</td>
				<?php } ?>
			</tr>
		<?php $i++;} ?>
	</table>
	<script>
		$(document).ready(function(){
			$('.tooltipped').tooltip()
		});
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
