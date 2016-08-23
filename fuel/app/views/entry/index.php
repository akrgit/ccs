<?php echo Form::open('entry'); ?>
  <!-- 名前 -->
  <br>お名前 <br>
  <?php echo Form::input('name', Session::get_flash('name'), array('size'=>20 , 'required' => '', 'autofocus'=> "" )); ?>
  <?php if($val->error('name')):?>
    <p class="alert alert-warning"><?php echo $val->error('name');?></p>
  <?php endif;?>
  <!-- フリガナ -->
  <br>フリガナ <br>
  <?php echo Form::input('ruby',  Session::get_flash('ruby'), array('size' =>20, 'required' => '' )); ?>
  <?php if($val->error('ruby')):?>
    <p class="alert alert-warning"><?php echo $val->error('ruby');?></p>
  <?php endif;?>
  <!-- 誕生日 -->
  <br>生年月日<br>
  <?php //echo Form::input('birthday',  Session::get_flash('birthday'), array('size' => 8, 'type' => 'date', 'required' => '' )); ?>
  <select class="" name="birthday_y">
    <?php
    $year = date('Y');
    for ($i=$year-50; $i < $year; $i++) {
      echo '<option value="'.$i.'">'.$i.'年</option>';
    }
    ?>
  </select>
  <select class="" name="birthday_m">
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
  <select class="" name="birthday_d">
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

  <!-- 都道府県 -->
  <br>都道府県 <br>
  <!-- http://www.ahref.org/hinagata/todouhuken.html より -->
  <select name="prefecture">
    <option value="" >
    <option value="1">北海道
    <option value="2">青森県
    <option value="3">岩手県
    <option value="4">宮城県
    <option value="5">秋田県
    <option value="6">山形県
    <option value="7">福島県
    <option value="8">茨城県
    <option value="9">栃木県
    <option value="10">群馬県
    <option value="11">埼玉県
    <option value="12">千葉県
    <option value="13">東京都
    <option value="14">神奈川県
    <option value="15">新潟県
    <option value="16">富山県
    <option value="17">石川県
    <option value="18">福井県
    <option value="19">山梨県
    <option value="20">長野県
    <option value="21">岐阜県
    <option value="22">静岡県
    <option value="23">愛知県
    <option value="24">三重県
    <option value="25">滋賀県
    <option value="26">京都府
    <option value="27">大阪府
    <option value="28">兵庫県
    <option value="29">奈良県
    <option value="30">和歌山県
    <option value="31">鳥取県
    <option value="32">島根県
    <option value="33">岡山県
    <option value="34">広島県
    <option value="35">山口県
    <option value="36">徳島県
    <option value="37">香川県
    <option value="38">愛媛県
    <option value="39">高知県
    <option value="40">福岡県
    <option value="41">佐賀県
    <option value="42">長崎県
    <option value="43">熊本県
    <option value="44">大分県
    <option value="45">宮崎県
    <option value="46">鹿児島県
    <option value="47">沖縄県
  </select>
  <?php if($val->error('prefecture')):?>
    <p class="alert alert-warning"><?php echo $val->error('prefecture');?></p>
  <?php endif;?>
  <!-- 住所 -->
  <br>ご住所 <br>
  <?php echo Form::input('address',  Session::get_flash('address'), array('size'=>40, 'required' => '' )); ?>
  <?php if($val->error('address')):?>
    <p class="alert alert-warning"><?php echo $val->error('address');?></p>
  <?php endif;?>
  <!-- 電話番号 -->
  <br>電話番号 <br>
  <?php echo Form::input('telephone_h', Session::get_flash('telephone_h'), array('size' => 3 ,'maxlength' => 5, 'required' => '' )); ?> -
  <?php echo Form::input('telephone_m', Session::get_flash('telephone_m'), array('size' => 3 ,'maxlength' => 5, 'required' => '' )); ?> -
  <?php echo Form::input('telephone_l', Session::get_flash('telephone_l'), array('size' => 3 ,'maxlength' => 5, 'required' => '' )); ?>
  <?php if($val->error('telephone_h')):?>
    <p class="alert alert-warning"><?php echo $val->error('telephone_h');?></p>
  <?php endif;?>
  <?php if($val->error('telephone_m')):?>
    <p class="alert alert-warning"><?php echo $val->error('telephone_m');?></p>
  <?php endif;?>
  <?php if($val->error('telephone_l')):?>
    <p class="alert alert-warning"><?php echo $val->error('telephone_l');?></p>
  <?php endif;?>
  <!-- メアド -->
  <br>メールアドレス <br>
  <?php echo Form::input('email', Session::get_flash('email'), array('size' => 25, 'type' => 'email', 'required' => '' )); ?>
  <?php if($val->error('email')):?>
    <p class="alert alert-warning"><?php echo $val->error('email');?></p>
  <?php endif;?>
  <!-- メルマガ -->
  <br>メールマガジン <br>
  <?php echo Form::radio('entry_magazine', 0,  array('id' => 'yes' , 'checked' => '' )); ?>購読する
  <?php echo Form::radio('entry_magazine', 1, array('id' => 'no', 'required' => '' )); ?>購読しない
  <!-- メルマガのタイプ -->
  <br>メールマガジンのタイプ <br>
  <?php echo Form::radio('entry_magazine_type',0, array('id' => 'pc' ,'checked' => '' )); ?>PC
  <?php echo Form::radio('entry_magazine_type',1, array('id' => 'mo', 'required' => '' )); ?>モバイル
  <!-- 送信ボタン -->
  <br>
  <?php echo Form::submit('submit','エントリー', array('class' => 'btn btn-success' )); ?>
<?php echo Form::close(); ?>
