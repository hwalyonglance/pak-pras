<!-- FORM ADD || UPDATE -->
<?=form_open_multipart('guru/add',['id'=>'fg'],['id'=>null])?>
	<div id="add" class="modal">
		<div class="modal-content">
			<h4 id="h"></h4>
			<div class="row">
				<div class="col s6">
					<div class="row">
						<div class="file-field input-field col s12">
							<div class="btn foto">
								<span id="lbl-foto">Foto</span>
								<input type="file" name="foto" id="itf" onchange="loadImageFileAsUrl(this)">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
							<div class="red-text" id="foto-err">
								Tolong unggah foto!
							</div>
						</div>
						<div class="input-field col s12">
							<input id="nama" type="text" name="nama" class="validate">
							<label for="nama" class="active">Nama</label>
						</div>
						<div class="input-field col s12">
							<input id="pel" type="text" name="pel" class="validate">
							<label for="pel" class="active">Pelajaran</label>
						</div>
						<div class="col obj"></div>
					</div>
				</div>
				<div class="col s6">
					<img src="<?=base_url()?>assets/img/samples/hitam.png" id='preview' style='max-width: 100%;'>
				</div>
			</div>
			<div class="row">
				<div class="col s12" style="display: flex">
					<span style="flex: 1 1 auto"></span>
					<button type="submit" id="submit" class="btn" disabled="disabled">Submit</button>
					<button type="button" class="btn red accent-3 white-text" onclick="$('#add').modal('close');">Close</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- FORM DELETE -->
<?=form_open('guru/delete',[],['guru_id'=>'0'])?>
	<div id="drop" class="modal gdmw">
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
	function loadImageFileAsUrl($this) {
		let fileSelected = $this.files
		if (fileSelected.length > 0) {
			let fileToLoad = fileSelected[0]
			let fileReader = new FileReader()
			fileReader.onload = function(fileLoadedEvent){
				document.getElementById('preview').src = fileLoadedEvent.target.result
			}
			fileReader.readAsDataURL(fileToLoad)
		}
		$('#submit').attr('disabled',null)
		$('#foto-err').hide()
	}
	function add(){
		$('#nama').val('')
		$('#pel').val('')
		Materialize.updateTextFields()
		$('#fg').attr('action', '<?=base_url()?>guru/add')
		$('#add').modal('open')
		$('#h').text('Tambah Guru')
		$('#preview').attr('src','<?=base_url()?>assets/img/samples/hitam.png')
		$('#foto-err').show()
		$('#submit').attr('disabled','disabled')
	}
	function edit(guru){
		$('[name="id"]').val(guru.id)
		$('#nama').val(guru.nama)
		$('#pel').val(guru.pel)
		Materialize.updateTextFields()
		$('#fg').attr('action', '<?=base_url()?>guru/update')
		$('#add').modal('open')
		$('#h').text('Edit Guru')
		$('#preview').attr('src','<?=base_url()?>uploads/guru/'+guru.foto)
		$('#foto-err').hide()
		$('#submit').attr('disabled',null)
	}
	function drop(guru){
		$('#drop').modal('open')
		$('[name="guru_id"]').val(guru.id)
		$('span.nama').text(guru.nama)
	}
</script>
