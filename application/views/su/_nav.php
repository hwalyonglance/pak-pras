<nav class="deep-purple darken-4" style="position: fixed; top: 0;z-index: 999;padding: 0px 10%">
    <div class="nav-wrapper">
		<a href="<?=base_url()?>" class="brand-logo">SMK Bakti Nusantara 666</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li><a href="<?=base_url()?>su/">Dashboard</a></li>
			<li><a href="<?=base_url()?>su/post">Posts</a></li>
			<li><a href="<?=base_url()?>su/guru/">Guru</a></li>
			<li><a href="#" class='dropdown-button' data-activates='murid' data-beloworigin='true'>Murid</a></li>
			<li><a href="<?=base_url()?>su/about">About</a></li>
			<li><a href="<?=base_url()?>su/logout">Logout(<?=$this->session->userdata('role_0_u')?>)</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo"></ul>
    </div>
</nav>
<ul id="murid" class="dropdown-content">
	<li><a href="<?=base_url()?>su/murid/calon">Calon</a></li>
</ul>
<script>
	$(document).ready(function() {
		$('#mobile-demo').html($('#nav-mobile').html());
		$(".button-collapse").sideNav({
			edge:'right'
		});
	});
</script>
