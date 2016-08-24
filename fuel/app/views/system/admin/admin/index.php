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
// 取得したオブジェクトをこのページで出力する
//echo $result[0][_data:protected][entry_id]; ?>
<?php print_r($result[0]); ?>
