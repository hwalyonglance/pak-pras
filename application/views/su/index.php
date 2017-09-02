<?php
	$this->load->view('_atas');
	$this->load->view('su/_nav');
?>
<style>
	.row:first-child .col{
		border: 1px solid red;
	}
	.row:nth-child(9n+2) div.col{
		background-color: #b388ff;
	}
	div.title{
		font-size: 30px;
	}
	div.content{
		font-size: 25px;
	}
</style>
<div class="container" style="padding-top: 64px">
	<div class="row center">
		<div class="col s6 m6 l3 xl3">
			<div class="title">Calon Murid</div>
			<div class="content">536</div>
		</div>
		<div class="col s6 m6 l3 xl3">
			<div class="title">Murid</div>
			<div class="content">2384</div>
		</div>
		<div class="col s6 m6 l3 xl3">
			<div class="title">Guru</div>
			<div class="content">120</div>
		</div>
		<div class="col s6 m6 l3 xl3">
			<div class="title">Posts</div>
			<div class="content">324</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12 xl12">
			<ul class="tabs">
				<li class="tab col s3"><a href="#sec1">Calon Murid</a></li>
				<li class="tab col s3"><a class="active" href="#sec2">Murid</a></li>
				<li class="tab col s3"><a href="#sec3">Guru</a></li>
				<li class="tab col s3"><a href="#sec4">Posts</a></li>
			</ul>
		</div>
		<div id="sec1" class="col s12">Calon Murid</div>
		<div id="sec2" class="col s12">Murid</div>
		<div id="sec3" class="col s12">Guru</div>
		<div id="sec4" class="col s12">Posts</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('ul.tabs').tabs({
			swipeable: true
		});
	});
</script>
