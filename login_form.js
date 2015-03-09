jQuery(document).ready(function($) {
  var input_username = '<label for="user_login"><input type="text" name="log" placeholder="请输入帐号" id="user_login" class="input" value="" size="20" /></label>';
  var input_password = '<label for="user_pass"><input type="password" name="pwd" placeholder="请输入密码" id="user_pass" class="input" value="" size="20" /></label>';

  //重新构造登录界面
  $('label[for="user_login"').parent('p').html(input_username);
  $('label[for="user_pass"').parent('p').html(input_password);
  $('#loginform').arrt('target','_blank');
});
