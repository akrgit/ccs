<p>
	<a href="edit">管理者 編集</a>
</p>
<p>
	<a href="delete">管理者 削除</a>
</p>
<hr>
<table>
	<tr>
		<th>
			ID
		</th>
		<th>
			UserName
		</th>
	</tr>
	<!-- foreachで出力する -->
		<tr>
			<td>
				1
			</td>
			<td>
				あいうえお
			</td>
			<td>
				<a href="edit?admin_ids=1">編集</a>
				<a href="delete?admin_ids=1">削除</a>
			</td>

		</tr>
		<!-- 出力ここまで -->
</table>
<hr>

 取得したオブジェクトを以下に出力する
<?php print_r($result); ?>
