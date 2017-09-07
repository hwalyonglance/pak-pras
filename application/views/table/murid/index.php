<?php
	if ( $this->session->userdata('is_role_0_logged_in') ) {
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
			<?php if ( substr($_SERVER['PATH_INFO'], 0, 19) !== '/daftar/calon_murid' && $data['show'] ) { ?>
				<?php if( substr($_SERVER['PATH_INFO'], 0, 10) == '/su/murid/' ){ ?>
					<a class="btn-floating btn-large pulse pink accent-2" onclick="edit()">
						<i class="large material-icons">mode_edit</i>
					</a>
				<?php }else{ ?>
					<a class="btn-floating btn-large pulse pink accent-2" onclick="edit()">
						<i class="large material-icons">add</i>
					</a>
				<?php } ?>
			<?php } ?>
			</div>
			<script>
				$('.modal').modal();
				function edit() {
					$('#edit').modal('open');
				}
			</script>
		<?php
	}
	if ($data['display'] === 'list') {
?>
	<style>
		a.btn{
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
	<?php if ( substr($_SERVER['PATH_INFO'], 0, 19) !== '/daftar/calon_murid' ) { ?>
		<div class="container" style="margin-top: 32px">
			<div class="row">
				<div class="input-field col s2">
					<select id="periode">
						<?php foreach ($data['period'] as $key => $value) { ?>
							<option><?=$value.'/'.((int)$value + 1)?></option>
						<?php } ?>
					</select>
					<label>Periode</label>
				</div>
				<div class="col s2">
					<button class="btn" id="cetak" style="margin-top: 25px">
						Cetak <i class="material-icons">print</i>
					</button>
				</div>
			</div>
		</div>
	<?php } ?>
	<table class="bordered striped highlight responsive-table container" style="margin: 32px auto">
		<tr>
			<th>#No</th>
			<th>Nama</th>
			<th>Asal Sekolah</th>
			<th>SKHU</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Daftar</th>
			<?php if ( substr($_SERVER['PATH_INFO'], 0, 19) !== '/daftar/calon_murid' ) { ?>
				<th>$Action</th>
			<?php } ?>
		</tr>
		<?php $i=1; foreach ($data['murid'] as $murid) { ?>
			<tr>
				<td><?=$i?></td>
				<td><?=$murid['nama']?></td>
				<td><?=$murid['asal']?></td>
				<td><?=$murid['skhu']?></td>
				<!-- <td><?=$murid['jk']?></td> -->
				<td></td>
				<td><?=$murid['created_at']?></td>
				<?php if ( $this->session->userdata('is_role_0_logged_in') && substr($_SERVER['PATH_INFO'], 0, 19) !== '/daftar/calon_murid' ) { ?>
					<td>
						<a href="<?=base_url()?>su/murid/calon/<?=$murid['id']?>" class="btn tooltipped blue" data-tooltip='Detail'><i class="material-icons">info</i></a>
						<a href="<?=base_url()?>su/murid/calon/edit/<?=$murid['id']?>" class="btn tooltipped green" data-tooltip='Edit'><i class="material-icons">mode_edit</i></a>
						<a href="<?=base_url()?>su/murid_delete/<?=$murid['id']?>" class="btn tooltipped red" data-tooltip='Delete'><i class="material-icons">delete_forever</i></a>
						<a href="<?=base_url()?>pdf/murid/<?=$_SERVER['PATH_INFO'] == '/su/murid/calon/' ? 'calon/' : '' ?><?=$murid['id']?>" class="btn tooltipped blue" data-tooltip='PDF'><i class="material-icons">print</i></a>
					</td>
				<?php } ?>
			</tr>
		<?php $i++;} ?>
	</table>
	<script>
		$(document).ready(function(){
			$('.tooltipped').tooltip()
			$('select').material_select()
			$('#cetak').click(function(event) {
				location = '<?=base_url()?>pdf/murid/' + $('#periode').val()
			});
		});
	</script>
<?php } else { ?>
	<style>
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
		#detail .row{
			border-bottom: 1px solid blue !important;
			padding-bottom: 15px;
		}
	</style>
	<div class="container" id="detail">
		<?php
			$this->load->view('table/murid/1');
			$this->load->view('table/murid/2');
			$this->load->view('table/murid/3');
			$this->load->view('table/murid/4');
			$this->load->view('table/murid/5');
		?>
	</div>
<?php }
