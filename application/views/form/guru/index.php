<style>
	.small{
		font-size:  10px;
	}
</style>
<!-- FORM ADD || UPDATE -->
<?=form_open_multipart('api/guru/add',['id'=>'fg'],['id'=>null,'id_account'=>''])?>
	<div id="add" class="modal">
		<div class="modal-content">
			<h4 id="h"></h4>
			<div class="row">
				<div class="col s6">
					<div class="row">
						<div class="input-field col s12">
							<input id="nama" type="text" name="nama" class="validate">
							<label for="nama" class="active">Nama</label>
						</div>
						<div class="input-field col s12">
							<input id="pel" type="text" name="pel" class="validate">
							<label for="pel" class="active">Pelajaran</label>
						</div>
						<div class="input-field col s12">
							<input id="u" type="text" name="u" class="validate" onkeyup="usernameOnKeyUp(this)" data-length='16' maxlength='16'>
							<label for="u" class="active">Username</label>
						</div>
						<div class="input-field col s12">
							<input id="p" type="password" name="p" class="validate">
							<label for="p" class="active">Password</label>
						</div>
						<div class="input-field col s12">
							<input id="p2" type="password">
							<label for="p2" class="active">Password</label>
						</div>
						<div class="input-field col s12">
							<textarea id="bio" name="bio" class="materialize-textarea" data-length="256" maxlength="256"></textarea>
							<label for="bio">Bio</label>
						</div>
					</div>
				</div>
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
						<div class="col s12">
							<img src="<?=base_url()?>assets/img/samples/hitam.png" id='preview' style='max-width: 300px; max-height: 300px'>
						</div>
					</div>
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
<?=form_open('api/guru/delete',[],['guru_id'=>'0'])?>
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
	$('#nama').keyup(function(event) {
		$('#u').val($(this).val())
		$('#p').val($(this).val())
		$('#p2').val($(this).val())
		$('#bio').val($(this).val())
		Materialize.updateTextFields()
	});
	setInterval(function(){
		if ( $('#u').hasClass('invalid') || $('#p2').hasClass('invalid') || !$('#foto-err').hasClass('hide')) {
			$('#submit').attr('disabled','disabled')
		}else{
			$('#submit').attr('disabled',null)
		}
	}, 1000)
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
		$('#foto-err').addClass('hide')
	}
	function usernameOnKeyUp($this){
		if ($this.value !== '') {
			$.ajax({
				url: '<?=base_url()?>api/guru/cek_username',
				type: 'POST',
				dataType: 'json',
				data: {u: $this.value},
				success:function(c){
					if (c === 1) {
						$('[for="u"]').text('Username Sudah Dipakai')
						$('#u').addClass('invalid')
					}else{
						$('[for="u"]').text('Username Tersedia')
						$('#u').removeClass('invalid')
					}
				}
			})
		}else{
			$('[for="u"]').text('Username')
		}
	}
	$('#p, #p2').keyup(function(event) {
		if ( $('#p').val() === $('#p2').val() ) {
			$('[for="p2"]').text('Password cocok')
			$('#p2').removeClass('invalid').addClass('valid')
		}else{
			$('[for="p2"]').text('Password tidak cocok')
			$('#p2').removeClass('valid').addClass('invalid')
		}
	})
	function add(){
		$('[name="id"]').val('')
		$('[name="id_account"]').val('')
		$('#nama').val('')
		$('#pel').val('')
		$('#u').val('')
		$('#bio').val('')
		$('#bio').trigger('autoresize')
		Materialize.updateTextFields()
		$('#fg').attr('action', '<?=base_url()?>api/guru/add')
		$('#add').modal('open')
		$('#h').text('Tambah Guru')
		$('#preview').attr('src','<?=base_url()?>assets/img/samples/hitam.png')
		$('#foto-err').removeClass('hide')
		$('#submit').attr('disabled','disabled')
	}
	function edit(guru){
		$('[name="id"]').val(guru.id)
		$('[name="id_account"]').val(guru.id_account)
		$('#nama').val(guru.nama)
		$('#pel').val(guru.pel)
		$('#u').val(guru.u)
		$('#bio').val(guru.bio)
		$('#bio').trigger('autoresize')
		Materialize.updateTextFields()
		$('#fg').attr('action', '<?=base_url()?>api/guru/update')
		$('#add').modal('open')
		$('#h').text('Edit Guru')
		$('#preview').attr('src','<?=base_url()?>uploads/guru/'+guru.foto)
		$('#foto-err').addClass('hide')
		$('#submit').attr('disabled',null)
	}
	function drop(guru){
		$('#drop').modal('open')
		$('[name="guru_id"]').val(guru.id)
		$('span.nama').text(guru.nama)
	}
</script>
