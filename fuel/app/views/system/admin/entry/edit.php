<?php echo Session::get_flash('msg'); ?>
<?php if ($id_edit): ?>
	<?php echo Form::open('/system/admin/entry/edit/'); ?>
	<table>
		<tr>
			<td>
				<p>お名前
			</td>
			<td>
				<?php echo Form::input('entry_name', $entry->entry_name); ?>
			</td>
		</tr>
		<tr>
			<td>
				<p>フリガナ
			</td>
			<td>
				<?php echo Form::input('entry_ruby', $entry->entry_ruby); ?>
			</td>
		</tr>
		<tr>
			<td>
				<p>生年月日</p>
			</td>
			<td>
				<select class="" name="entry_birthday_y">
					<?php
					$year = date('Y');
					for ($i=$year-50; $i < $year; $i++) {
						echo '<option value="'.$i.'">'.$i.'年</option>';
					}
					?>
				</select>
				<select class="" name="entry_birthday_m">
					<?php
					for ($i=0; $i < 12; $i++) {
						$m = $i+1;
						if ($m <10) {
							// 1桁の月は先頭に０をstringにキャストして付ける
							$m = (string)$m;
							$m = '0'.$m;
						}
						echo '<option value="'.$m.'">'.$m.'月</option>';
					} ?>
				</select>
				<select class="" name="entry_birthday_d">
					<?php
					for ($i=0; $i < 31; $i++) {
						$d = $i+1;
						if ($d < 10) {
							// 1桁の日は先頭に０をstringにキャストして付ける
							$d = (string) $d;
							$d = '0'.$d;
						}
						echo '<option value="'.$d.'">'.$d.'日</option>';
					}
					 ?>
				</select>


			</td>
		</tr>
		<tr>
			<td>
				<p>都道府県
			</td>
			<td>
				<!-- 都道府県 -->
				<!-- http://www.ahref.org/hinagata/todouhuken.html より -->
				<select name="entry_prefecture" >
					<!-- 2016-09-29 -->
					<option value="" ></option>
					<option value="1"<?php if ($entry->entry_prefecture == 1) { echo 'selected'; } ?>>北海道</option>
					<option value="2"<?php if ($entry->entry_prefecture == 2) { echo 'selected'; } ?>>青森県</option>
					<option value="3"<?php if ($entry->entry_prefecture == 3) { echo 'selected'; } ?>>岩手県</option>
					<option value="4"<?php if ($entry->entry_prefecture == 4) { echo 'selected'; } ?>>宮城県</option>
					<option value="5"<?php if ($entry->entry_prefecture == 5) { echo 'selected'; } ?>>秋田県</option>
					<option value="6"<?php if ($entry->entry_prefecture == 6) { echo 'selected'; } ?>>山形県</option>
					<option value="7"<?php if ($entry->entry_prefecture == 7) { echo 'selected'; } ?>>福島県</option>
					<option value="8"<?php if ($entry->entry_prefecture == 8) { echo 'selected'; } ?>>茨城県</option>
					<option value="9"<?php if ($entry->entry_prefecture == 9) { echo 'selected'; } ?>>栃木県</option>
					<option value="10"<?php if ($entry->entry_prefecture == 10) { echo 'selected'; } ?>>群馬県</option>
					<option value="11"<?php if ($entry->entry_prefecture == 11) { echo 'selected'; } ?>>埼玉県</option>
					<option value="12"<?php if ($entry->entry_prefecture == 12) { echo 'selected'; } ?>>千葉県</option>
					<option value="13"<?php if ($entry->entry_prefecture == 13) { echo 'selected'; } ?>>東京都</option>
					<option value="14"<?php if ($entry->entry_prefecture == 14) { echo 'selected'; } ?>>神奈川県</option>
					<option value="15"<?php if ($entry->entry_prefecture == 15) { echo 'selected'; } ?>>新潟県</option>
					<option value="16"<?php if ($entry->entry_prefecture == 16) { echo 'selected'; } ?>>富山県</option>
					<option value="17"<?php if ($entry->entry_prefecture == 17) { echo 'selected'; } ?>>石川県</option>
					<option value="18"<?php if ($entry->entry_prefecture == 18) { echo 'selected'; } ?>>福井県</option>
					<option value="19"<?php if ($entry->entry_prefecture == 19) { echo 'selected'; } ?>>山梨県</option>
					<option value="20"<?php if ($entry->entry_prefecture == 20) { echo 'selected'; } ?>>長野県</option>
					<option value="21"<?php if ($entry->entry_prefecture == 21) { echo 'selected'; } ?>>岐阜県</option>
					<option value="22"<?php if ($entry->entry_prefecture == 22) { echo 'selected'; } ?>>静岡県</option>
					<option value="23"<?php if ($entry->entry_prefecture == 23) { echo 'selected'; } ?>>愛知県</option>
					<option value="24"<?php if ($entry->entry_prefecture == 24) { echo 'selected'; } ?>>三重県</option>
					<option value="25"<?php if ($entry->entry_prefecture == 25) { echo 'selected'; } ?>>滋賀県</option>
					<option value="26"<?php if ($entry->entry_prefecture == 26) { echo 'selected'; } ?>>京都府</option>
					<option value="27"<?php if ($entry->entry_prefecture == 27) { echo 'selected'; } ?>>大阪府</option>
					<option value="28"<?php if ($entry->entry_prefecture == 28) { echo 'selected'; } ?>>兵庫県</option>
					<option value="29"<?php if ($entry->entry_prefecture == 29) { echo 'selected'; } ?>>奈良県</option>
					<option value="30"<?php if ($entry->entry_prefecture == 30) { echo 'selected'; } ?>>和歌山県</option>
					<option value="31"<?php if ($entry->entry_prefecture == 31) { echo 'selected'; } ?>>鳥取県</option>
					<option value="32"<?php if ($entry->entry_prefecture == 32) { echo 'selected'; } ?>>島根県</option>
					<option value="33"<?php if ($entry->entry_prefecture == 33) { echo 'selected'; } ?>>岡山県</option>
					<option value="34"<?php if ($entry->entry_prefecture == 34) { echo 'selected'; } ?>>広島県</option>
					<option value="35"<?php if ($entry->entry_prefecture == 35) { echo 'selected'; } ?>>山口県</option>
					<option value="36"<?php if ($entry->entry_prefecture == 36) { echo 'selected'; } ?>>徳島県</option>
					<option value="37"<?php if ($entry->entry_prefecture == 37) { echo 'selected'; } ?>>香川県</option>
					<option value="38"<?php if ($entry->entry_prefecture == 38) { echo 'selected'; } ?>>愛媛県</option>
					<option value="39"<?php if ($entry->entry_prefecture == 39) { echo 'selected'; } ?>>高知県</option>
					<option value="40"<?php if ($entry->entry_prefecture == 40) { echo 'selected'; } ?>>福岡県</option>
					<option value="41"<?php if ($entry->entry_prefecture == 41) { echo 'selected'; } ?>>佐賀県</option>
					<option value="42"<?php if ($entry->entry_prefecture == 42) { echo 'selected'; } ?>>長崎県</option>
					<option value="43"<?php if ($entry->entry_prefecture == 43) { echo 'selected'; } ?>>熊本県</option>
					<option value="44"<?php if ($entry->entry_prefecture == 44) { echo 'selected'; } ?>>大分県</option>
					<option value="45"<?php if ($entry->entry_prefecture == 45) { echo 'selected'; } ?>>宮崎県</option>
					<option value="46"<?php if ($entry->entry_prefecture == 46) { echo 'selected'; } ?>>鹿児島県</option>
					<option value="47"<?php if ($entry->entry_prefecture == 47) { echo 'selected'; } ?>>沖縄県</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<p>ご住所
			</td>
			<td>
				<?php echo Form::input('entry_address', $entry->entry_address); ?>
			</td>
		</tr>
		<tr>
			<td>
				<p>電話番号
			</td>
			<td>
				<?php echo Form::input('entry_telephone_h', $entry->entry_telephone_h); ?> -
				<?php echo Form::input('entry_telephone_m', $entry->entry_telephone_m); ?> -
				<?php echo Form::input('entry_telephone_l', $entry->entry_telephone_l); ?>
			</td>
		</tr>
		<tr>
			<td>
				<p>メールアドレス
			</td>
			<td>
				<?php echo Form::input('entry_email', $entry->entry_email); ?>
			</td>
		</tr>
		<tr>
			<td>
				<p>メールマガジン
			</td>
			<td>
				<select class="" name="entry_magazine">
					<option value="0" <?php if ($entry->entry_magazine == 0) { echo 'selected'; } ?>>受信する</option>
					<option value="1" <?php if ($entry->entry_magazine == 0) { echo ''; } else { echo 'selected'; } ?>>受信しない</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<p>メールマガジンのタイプ
			</td>
			<td>
				<select class="" name="entry_magazine_type">
					<option value="0" <?php if ($entry->entry_magazine_type == 0) { echo 'selected'; } ?>>PC版</option>
					<option value="1" <?php if ($entry->entry_magazine_type == 0) { echo ''; } else { echo 'selected'; } ?>>モバイル版</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<p>転送済み</p>
			</td>
			<td>
				<?php echo Form::checkbox('', '', 0); ?>
			</td>
		</tr>
	</table>
	<?php echo Form::submit('submit', 'OK'); ?>
	<input type="button" onClick='history.back();' value="キャンセル">
	<a href="/system/admin/entry/">一覧ページへ</a>
	<?php echo Form::close(); ?>
<?php endif; ?>
