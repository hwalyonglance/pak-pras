<style>
	td.v .btn{
		width: 40px;
		padding: 0 5px;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col s12">guru/post</div>
	</div>
	<div class="row">
		<div class="col 12">
			<table>
				<thead>
					<tr>
						<th>$Action</th>
						<th>Title</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($data['posts'] as $key => $value) {
							?>
								<tr>
									<td class="v">
										<a class="btn tooltipped blue" data-tooltip="View" href="<?=base_url()?>guru/post/view/<?=$value['id']?>"><i class="material-icons">info</i></a>
										<a class="btn tooltipped green" data-tooltip="Edit" href="<?=base_url()?>guru/post/edit/<?=$value['id']?>"><i class="material-icons">mode_edit</i></a>
										<a class="btn tooltipped red" data-tooltip="Delete" href="<?=base_url()?>guru/post/delete/<?=$value['id']?>"><i class="material-icons">delete_forever</i></a>
									</td>
									<td>
										<a href="<?=base_url()?>post/view/<?=$value['id'].'/'.$value['title']?>">
											<?= '('.$value['view_count'].'x) '.$value['title']?>
										</a>
									</td>
								</tr>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('.tooltipped').tooltip()
	});
	function edit(id, title){

	}
	function drop(id){

	}
</script>