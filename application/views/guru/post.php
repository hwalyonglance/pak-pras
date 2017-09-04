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
									<td>
										<a class="btn red" href="<?=base_url()?>guru/post/delete/<?=$value['id']?>"><i class="material-icons">delete_forever</i></a>
										<a class="btn green" href="<?=base_url()?>guru/post/edit/<?=$value['id']?>"><i class="material-icons">mode_edit</i></a>
									</td>
									<td><?=$value['title']?></td>
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
	function edit(id, title){

	}
	function drop(id){

	}
</script>