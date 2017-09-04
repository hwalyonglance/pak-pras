<?php 
echo form_open(
	'post/'.$data['action'],
	[],
	[
		'id'=> isset($data['post']) ? $data['post']['id'] : '',
		'id_creator' => $data['id_creator'],
		'role'=>$data['role']
	])
?>
<div class="container">
	<div class="row">
		<div class="col s12 xl8 push-xl1">
			<header>
				<h3><?=$data['action'] == 'edit' ? 'Edit' : 'Create new'?> Post</h3>
			</header>			
		</div>
	</div>
	<div class="row">
		<div class="input-field col s9 xl8 push-xl1">
			<input id="judul" type="text" name="title" class="validate" value="<?=isset($data['post']) ? $data['post']['title'] : ''?>">
			<label for="judul">Judul</label>
		</div>
		<div class="input-field col s3 xl1 push-xl1">
			<button class="btn" type="submit">Add</button>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 xl10 push-xl1">
			<textarea name="body" class="materialize-textarea"><?=isset($data['post']) ? $data['post']['body'] : '' ?></textarea>
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
			$('[name="title"]').val( $('[name="title"]').val().replace(' ', '-') )
			let char = '`~!@#$%^&*()_=+[{]}\\|;:\'\",<.>?\/'
			if (in_array(event.key, char.split(''))) {
				let a = $('[name="title"]').val().split('');
				a.pop()
				$('[name="title"]').val( a.join('') )
			}
		}).paste(function(e){
			e.preventDefault()
		});
		// $('form[action="<?=base_url()?>post/add"]').submit(function(event) {
		// 	alert('ggg')
		// });
		function in_array(str,arr){
			for( alias of arr ){
				if (str == alias) {
					return true;
				}
			}
			return false;
		}
	});
</script>
