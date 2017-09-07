<nav class="deep-purple darken-4" style="position: fixed;top:0;z-index: 1000">
    <div class="nav-wrapper" style="padding: 0 10%;">
		<a href="<?=base_url()?>" class="brand-logo">SMK Bakti Nusantara 666</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li><a href="#" class='dropdown-button' data-activates='pendaftaran' data-beloworigin='true'>Pendaftaran</a></li>
			<li><a href="<?=base_url()?>daftar/calon_murid">Murid</a></li>
			<li><a href="<?=base_url()?>daftar/guru">Guru</a></li>
			<li><a href="<?=base_url()?>post">Posts</a></li>
			<li><a href="<?=base_url()?>about">About</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo"></ul>
    </div>
</nav>
<ul id="pendaftaran" class="dropdown-content">
	<li><a href="pendaftaran/murid">Murid</a></li>
</ul>
<script>
	$(document).ready(function() {
		$('#mobile-demo').html($('#nav-mobile').html());
		$(".button-collapse").sideNav({
			edge:'right'
		});
	});
</script>
