<style>
	/* label color */
	.input-field label {
		color: #000 !important;
	}
	/* label focus color */
	.input-field input:focus + label {
		color: #880E4F !important;
	}
	/* label underline focus color */
	.input-field input:focus {
		border-bottom: 1px solid #880E4F !important;
		box-shadow: 0 1px 0 0 #880E4F !important;
	}
	/* valid color */
	.input-field input.valid {
		border-bottom: 1px solid #2196F3 !important;
		box-shadow: 0 1px 0 0 #2196F3 !important;
	}
	/* invalid color */
	.input-field input.invalid {
		border-bottom: 1px solid #F00 !important;
		box-shadow: 0 1px 0 0 #F00 !important;
	}
	/* icon prefix focus color */
	.input-field .prefix.active {
		color: #880E4F !important;
	}
	.tabs .tab a.active,
	.tabs .tab a:hover{
		border-bottom: 2px solid #000 !important;
		z-index: 20000 !important;
	}
	.imgprev{
		max-width: 300px;
		max-height: 200px;
		margin: 0 auto;
	}
	@media(max-width: 900px){
		.imgprev{
			max-width: 250px;
			max-height: 170px;
		}
	}
	@media(max-width: 750px){
		.imgprev{
			max-width: 200px;
			max-height: 140px;
		}
	}
</style>
<div class="purple lighten-4 <?=in_array(substr($_SERVER['PATH_INFO'], 0, 11), ['/murid/edit','/su/murid/c', '/murid/daft']) ? 'container' : ''?>">
	<?=form_open_multipart( ($data['murid'] === NULL ? 'murid/add' : 'murid/update') , [], ['1[id]'=>$data['murid'][1]['id']])?>
		<ul class="collapsible popout" data-collapsible="accordion">
			<li>
				<div class="collapsible-header a1 active">Data Pribadi Siswa/i</div>
				<div class="collapsible-body"><?php $this->load->view('form/murid/1');?></div>
			</li>
			<li>
				<div class="collapsible-header a2 <?= in_array($_SERVER['PATH_INFO'], ['/su/murid','/murid/daftar']) ? 'hide' : '' ?>">Keterangan Siswa/i</div>
				<div class="collapsible-body"><?php $this->load->view('form/murid/2');?></div>
			</li>
			<li>
				<div class="collapsible-header a3 <?= in_array($_SERVER['PATH_INFO'], ['/su/murid','/murid/daftar']) ? 'hide' : '' ?>">Data Ayah</div>
				<div class="collapsible-body"><?php $this->load->view('form/murid/3');?></div>
			</li>
			<li>
				<div class="collapsible-header a4 <?= in_array($_SERVER['PATH_INFO'], ['/su/murid','/murid/daftar']) ? 'hide' : '' ?>">Data Ibu</div>
				<div class="collapsible-body"><?php $this->load->view('form/murid/4');?></div>
			</li>
			<li>
				<div class="collapsible-header a5 <?= in_array($_SERVER['PATH_INFO'], ['/su/murid','/murid/daftar']) ? 'hide' : '' ?>">Data Wali</div>
				<div class="collapsible-body"><?php $this->load->view('form/murid/5');?></div>
			</li>
		</ul>
	</form>
</div>
<script>
	function loadImageFileAsUrl($this) {
		let fileSelected = $this.files;
		if (fileSelected.length > 0) {
			let fileToLoad = fileSelected[0]
			let fileReader = new FileReader();
			fileReader.onload = function(fileLoadedEvent){
				document.getElementById('preview').src = fileLoadedEvent.target.result;
				$('#foto-err').hide()
				$('.btn.to2').attr('disabled', null)
			}
			fileReader.readAsDataURL(fileToLoad);
		}
		$('#submit').attr('disabled',null);
		$('#foto-err').hide()
	}
	$(document).ready(function(){
		$('.collapsible').collapsible()
		$('select').material_select()
		$('.datepicker').pickadate({
			selectMonths: true,
			selectYears: 120,
			today: 'Today',
			clear: 'Clear',
			close: 'Ok',
			closeOnSelect: true,
			container: undefined
		})
		$('textarea').trigger('autoresize')
		$('.to1').click(function(event) {
			$('.a1').removeClass('hide').click()
		})
		$('.to2').click(function(event) {
			$('.a2').removeClass('hide').click()
		})
		$('.to3').click(function(event) {
			$('.a3').removeClass('hide').click()
		})
		$('.to4').click(function(event) {
			$('.a4').removeClass('hide').click()
		})
		$('.to5').click(function(event) {
			$('.a5').removeClass('hide').click()
		});
		function loadImageFileAsUrl() {
			let fileSelected = document.getElementById('field').files
			if (fileSelected.length > 0) {
				let fileToLoad = fileSelected[0]
				let fileReader = new FileReader()
				fileReader.onload = function(fileLoadedEvent){
					document.getElementById('lihat').src = fileLoadedEvent.target.result
				}
				fileReader.readAsDataURL(fileToLoad);
			}
		}
	});
</script>