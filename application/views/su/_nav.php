<nav class="deep-purple darken-4" style="position: fixed; bottom: 0;z-index: 1000;padding: 0px 10%">
    <div class="nav-wrapper">
		<a href="<?=base_url()?>" class="brand-logo">Logo</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li><a href="<?=base_url()?>su/">Dashboard</a></li>
			<li><a href="<?=base_url()?>su/posts">Posts</a></li>
			<li><a href="<?=base_url()?>guru/">Guru</a></li>
			<li><a href="<?=base_url()?>su/murid">Murid</a></li>
			<li><a href="<?=base_url()?>su/about">About</a></li>
			<li><a href="<?=base_url()?>su/logout">Logout</a></li>
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
