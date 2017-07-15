<table class=”table”>
	<thead>
		<tr>
			<th>id</th>
			<th>nome</th>
			<th>preco</th>
			<th>descricao</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($produtos as $produto) {?>
		<tr>
			<td><?=$produto['id']?></td>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<td><?=$produto['descricao']?></td>
		</tr>
	<?php  }?>
	</tbody>
</table>