<p>
	<a href="edit">エントリー 編集</a>
</p>
<p>
	<a href="delete">エントリー 削除</a>
</p>
<hr>
<table>
	<tr>
		<th>
			foo1
		</th>
		<th>
			foo2
		</th>
	</tr>
	<tr>
		<td>
			bar1
		</td>
		<td>
			bar2
		</td>
	</tr>
</table>
<hr>

<?php
// 取得したオブジェクトをここに出力する
// admin/indexとほぼ同じ
//echo $result[0][_data:protected][entry_id]; ?>
<?php print_r($result[0]); ?>
