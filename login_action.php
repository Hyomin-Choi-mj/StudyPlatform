<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include_once('./lib.php');

    extract($_POST);


    $sql = "select * from usertable where email = '{$email}' and password = md5('{$password}{$email}')";
    access($member = fetch($sql), "아이디 또는 비밀번호가 일치하지 않습니다.");
    $_SESSION['member'] = $member;
    alert('로그인 되었습니다.');
    move('/index.php');?>
  </body>
</html>
