<hr>
<table>
	<tr>
		<th>
			ID
		</th>
		<th>
			EntryName
		</th>
	</tr>
<?php foreach ($result as $entry) { ?>
	<tr>
		<td>
			<?php echo $entry->entry_id; ?>
		</td>
		<td>
			<?php echo $entry->entry_name; ?>
		</td>
		<td>
			<a href="/system/admin/entry/edit?entry_ids=<?php echo $entry->entry_id; ?>">編集</a>
			<a href="/system/admin/entry/delete?entry_ids=<?php echo $entry->entry_id; ?>">削除</a>
		</td>

	</tr>
<?php } ?>
</table>
<hr>
