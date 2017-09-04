<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/materialize/css/materialize.min.css" media='all'>
	<link rel="stylesheet" href="<?=base_url()?>assets/material-design-icons/material-icons.css">
	<script src="<?=base_url()?>assets/jquery/dist/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/materialize/js/materialize.min.js"></script>
	<script src="<?=base_url()?>assets/materialize/js/masonry.pkgd.min.js"></script>
	<script src="<?=base_url()?>assets/tinymce/tinymce.min.js"></script>
	<style>
		body{
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			padding-top: 64px;
		}
		footer{
			margin-top: 64px;
		}
		@media(max-width: 600px){
			body{
				padding-bottom: 56px;
			}		
		}
		.mce-container.mce-panel.mce-floatpanel.mce-window.mce-in{
			left: 25% !important;
		}
		.mce-container.mce-panel.mce-floatpanel.mce-window.mce-in,
		#mceu_46-head.mce-window-head{
			width:  600px !important;
		}
		.mce-container-body.mce-window-body.mce-abs-layout{
			width: 600px !important;
		}
		input.mce-textbox,
		input#mceu_59.mce-textbox.mce-abs-layout-item.mce-last,
		input#mceu_52.mce-textbox.mce-abs-layout-item.mce-last{
			width: 400px !important;
		}
		input.mce-textboxt.mce-abs-layout-item.mce-first,
		input.mce-textbox.mce-abs-layout-item{
			width: 80px !important;
		}
	</style>
</head>
<body>