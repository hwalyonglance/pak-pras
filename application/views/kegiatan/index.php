<?php
	$this->load->view('_atas');
	$this->load->view('_nav');
?>
<form action="bb.php" method="post">
	<textarea name="tiny"></textarea>
	<input type="submit" value="gggg">
</form>
<script>
	tinymce.init({
		selector:'textarea',
		width: '90%',
		height: 300,
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
</script>