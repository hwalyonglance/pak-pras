<style>
	td.v .btn{
		width: 40px;
		padding: 0 5px;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col s12">views/guru/post</div>
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
										<a class="btn tooltipped red" onclick="drop('<?=$value['id']?>', '<?=$value['title']?>')" data-tooltip="Delete"><i class="material-icons">delete_forever</i></a>
									</td>
									<td>
										<a href="<?=base_url()?>post/view/<?=$value['id'].'/'.$value['title']?>" class="tooltipped" 
											data-tooltip="View Count : <?=$value['view_count']?><br/> Title : <?=$value['title']?>">
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
<!-- FORM DELETE -->
<?=form_open('post/delete',[],['id'=>''])?>
	<div id="drop" class="modal" style="width: 300px !important">
		<div class="modal-content">
			<h4 class="center">Hapus Post ini?</h4>
			<p>Title: <span class="title"></span></p>
		</div>
		<div class="modal-footer">
			<button class="waves-effect waves-green btn-flat" type="submit">Agree</button>
		</div>
	</div>
</form>
<script>
	$(document).ready(function() {
		$('.modal').modal();
		$('.tooltipped').tooltip({
			html: true
		})
	});
	function edit(id, title){

	}
	function drop(id, title){
		$('#drop').modal('open')
		$('[name="id"]').val(id)
		$('span.title').text(title)
	}
</script>