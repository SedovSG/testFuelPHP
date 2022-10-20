<table class="table table-bordered table-hover table-fixed">
	<thead>
		<tr>
			<th class="col-xs-4 text-center">Заголовок новости</th>
			<th class="col-xs-8 text-center">Текст новости</th>
	<tbody>
		<?php foreach ($models as $item) : ?>
		<tr>
			<td class="col-xs-4">
				<?= $item['title']; ?>
			</td>
			<td class="col-xs-8">
				<?= $item['content']; ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</tr>
	</thead>
</table>