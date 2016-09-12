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
	<?php foreach ($result as $admin) { ?>
		<tr>
			<td>
				<?php echo $admin->id; ?>
			</td>
			<td>
				<?php echo $admin->username; ?>
			</td>
			<td>
				<a href="/system/admin/admin/edit?admin_ids=<?php echo $admin->id; ?>">編集</a>
				<a href="/system/admin/admin/delete?admin_ids=<?php echo $admin->id; ?>">削除</a>
			</td>

		</tr>
		<!-- 出力ここまで -->

	<?php } ?>
</table>
<hr>
