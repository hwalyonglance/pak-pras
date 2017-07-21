<?php
	$this->load->view('_atas');
	$this->load->view('_nav');
?>
<div class="container">
	<div class="row">
		<div class="col s10 m8 l6 xl6 push-s1 push-m2 push-l3 push-xl3">
			<div class="slider">
				<ul class="slides">
					<li style="display: flex">
						<img src="<?=base_url()?>uploads/guru/rgby.png" style=''> <!-- random image -->
						<div class="caption left-align">
							<h3>Andy</h3>
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						</div>
					</li>
					<li>
						<img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
						<div class="caption center-align">
							<h3>Angghi</h3>
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						</div>
					</li>
					<li>
						<img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
						<div class="caption right-align">
							<h3>Fahrul</h3>
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						</div>
					</li>
					<li>
						<img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
						<div class="caption center-align">
							<h3>Rananta</h3>
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						</div>
					</li>
					<li>
						<img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
						<div class="caption left-align">
							<h3>Rusman</h3>
							<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						</div>
					</li>
				</ul>
			</div>		
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
      $('.slider').slider({
      	interval:4000
      });
    });
</script>
<?php
	$this->load->view('_footer');