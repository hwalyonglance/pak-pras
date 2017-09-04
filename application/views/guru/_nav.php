<nav class="deep-purple darken-4" style="position: fixed;top:0;z-index: 1000">
    <div class="nav-wrapper" style="padding: 0 10%;">
		<a href="<?=base_url()?>" class="brand-logo">Logo</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li><a href="<?=base_url()?>guru/post">Posts</a></li>
			<li><a href="<?=base_url()?>guru/logout">Logout(<?=$this->session->userdata('role_1_u')?>)</a></li>
		</ul>
		<ul class="side-nav" id="mobile-demo"></ul>
    </div>
</nav>
<script>
	$(document).ready(function() {
		$('#mobile-demo').html($('#nav-mobile').html());
		$(".button-collapse").sideNav({
			edge:'right'
		});
	});
</script>
