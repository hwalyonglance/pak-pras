<?=form_open('post/add',[],['id' => $data['id'], 'from'=>$data['from']])?>
<div class="container">
	<div class="row">
		<div class="col s12 xl8 push-xl1">
			<header>
				<h3>Create new post</h3>
			</header>			
		</div>
	</div>
	<div class="row">
		<div class="input-field col s18 xl8 push-xl1">
			<input id="judul" type="text" name="title" class="validate">
			<label for="judul" data-error="wrong" data-success="right">Judul</label>
		</div>
		<div class="input-field col s4 xl1 push-xl1">
			<button class="btn" type="submit">Add</button>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 xl10 push-xl1">
			<textarea name="body" class="materialize-textarea"></textarea>
		</div>
	</div>
</div>
<script>
	tinymce.init({
		selector:'textarea[name="body"]',
		width: '100%',
		height: 500,
		theme: 'modern',
		plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
		],
		toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
		toolbar2: 'print preview media | forecolor backcolor emoticons | codesample link image',
		image_advtab: true,
		statusbar: false,
		schema: 'html5'
	});
	$(document).ready(function() {
		$('[name="title"]').keyup(function(event) {
			$(this).val($(this).val().replace(' ', '-'))
		});
		$('form[action="<?=base_url()?>post/add"]').submit(function(event) {
			alert('ggg')
		});
	});
</script>
