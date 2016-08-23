  <p>
    以下の内容でよろしければ、送信ボタンを押してください。
  </p>
  <b><br><p>お名前 <br></b>
  <?php $name = $_POST['name'];
  echo $name; ?>
  <b><br><p>フリガナ <br></b>
  <?php $ruby = $_POST['ruby'];
  echo $ruby; ?>
  <b><br><p><br>生年月日 <br></b>
  <?php
    echo $birthday = $_POST['birthday_y'].$_POST['birthday_m'].$_POST['birthday_d'];
 ?>
  <b><br><p>都道府県 <br></b>
  <?php
  $pref = array('1'=>'北海道','2'=>'青森県','3'=>'岩手県','4'=>'宮城県','5'=>'秋田県','6'=>'山形県','7'=>'福島県','8'=>'茨城県','9'=>'栃木県','10'=>'群馬県','11'=>'埼玉県','12'=>'千葉県','13'=>'東京都','14'=>'神奈川県','15'=>'新潟県','16'=>'富山県','17'=>'石川県','18'=>'福井県','19'=>'山梨県','20'=>'長野県','21'=>'岐阜県','22'=>'静岡県','23'=>'愛知県','24'=>'三重県','25'=>'滋賀県','26'=>'京都府','27'=>'大阪府','28'=>'兵庫県','29'=>'奈良県','30'=>'和歌山県','31'=>'鳥取県','32'=>'島根県','33'=>'岡山県','34'=>'広島県','35'=>'山口県','36'=>'徳島県','37'=>'香川県','38'=>'愛媛県','39'=>'高知県','40'=>'福岡県','41'=>'佐賀県','42'=>'長崎県','43'=>'熊本県','44'=>'大分県','45'=>'宮崎県','46'=>'鹿児島県','47'=>'沖縄県');
  echo $pref[$_POST['prefecture']];
  $prefecture = $_POST['prefecture'];
   ?>
  <b><br><p>ご住所 <br></b>
  <?php $address = $_POST['address'];
  echo $address; ?>
  <b><br><p>電話番号 <br></b>
  <!-- 3個つなげる -->
  <?php $telephone_h = $_POST['telephone_h'];
  echo $telephone_h; ?>-
  <?php $telephone_m = $_POST['telephone_m'];
  echo $telephone_m; ?>-
  <?php $telephone_l = $_POST['telephone_l'];
  echo $telephone_l; ?>
  <b><br><p>メールアドレス <br></b>
  <?php $email = $_POST['email']; ?>
  <?php echo $email;?>
  <b><br><p>メールマガジン <br></b>
  <?php if ($_POST['entry_magazine'] == 0) {
    echo "購読する";
  }elseif($_POST['entry_magazine'] == 1){
    echo "購読しない";
  }
  $entry_magazine = $_POST['entry_magazine'];
   ?>
  <b><br><p>メールマガジンのタイプ<br></b>
    <?php if ($_POST['entry_magazine_type'] == 0) {
      echo "PC";
    }elseif($_POST['entry_magazine_type'] == 1){
      echo "モバイル";
    }
    $entry_magazine_type = $_POST['entry_magazine_type']; ?>

  <?php echo Form::open('entry'); ?>
  <?php
  echo Form::hidden('name', $name);
  echo Form::hidden('ruby', $ruby);
  echo Form::hidden('birthday', $birthday);
  echo Form::hidden('prefecture', $prefecture);
  echo Form::hidden('address', $address);
  echo Form::hidden('telephone_h', $telephone_h);
  echo Form::hidden('telephone_m', $telephone_m);
  echo Form::hidden('telephone_l', $telephone_l);
  echo Form::hidden('email', $email);
  echo Form::hidden('entry_magazine', $entry_magazine);
  echo Form::hidden('entry_magazine_type', $entry_magazine_type);

   ?>
  <?php echo Form::submit('entry', '送信する'); ?>
  <input type="button" onClick='history.back();' value="戻る">
  <?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token());?>
  <?php echo Form::close(); ?>
