<?php
  require_once("./db.php");
  $pdo = db_connect();
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="mathclass.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고등수학 스터디</title>
</head>
<?php
<script>
  if($people>=5)
  {
    alert("마감되었습니다.");
  }

  else{
    function isShow(link){
        if(confirm("신청하시겠습니까?")){
            $people++;
            open(link)
        }else{
            alert('취소되었습니다.');
        }
    }
  }
</script>
<script>
    document.addEventListener("touchstart", function() {}, true);
</script>
?>
<body>

    <header>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="math.php">mat</a></li>
            <li><a href="science.php"><u>sci</u></a></li>
            <li><a href="lang.php">lan</a></li>
            <li><a href="human.php">hum</a></li>
        </ul>
    </header>
    <section class="banner"></section>
    <script type="text/javascript">
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky")
        })
    </script>

    <br><br><br>
    <div class="title">
        <hr><br><br><center>
        <h2><b>고등수학 | HighSchool Math</b></h2>
        </center>
        <br><br>
        <hr>
    </div>
    <br><br>
    <div class = "container">
        <div class = "card">
            <div class = "StudyCover">
                <center><h1>명지고등수학</h1><h2>21 전공자유학부 권OO<br>4명 / 비대면</h2></center>
            </div>
            <div class = "content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <p>
                    현역 이과출신 재수 나형 1등급(인증가능)<br>
                    3월 이전까지는 비대면 스터디로 진행하고 그 이후에는 자연캠에서 스터디를 할 계획입니다.<br>
                    개인톡으로 상담 및 문제풀이 안내를 진행합니다.<br>
                    기하를 제외한 고등수학 전과목을 스터디합니다!

                </p><br>
                <div class="wrapper">
                    <div class="btn">
                        <button type = "button" onclick="isShow('http://qr.kakao.com/talk/HQ.nqF1BpFkTL35ro5nAnwzEzlA-')">신청하기</button>
                    </div>
                </div>

            </div>

        </div>
    </div>








    <hr><br>
    <center><i><u><h5>
        dding_study <br>
        Contact : <a href="ddingstudy02@gmail.com">ddingstudy02@gmail.com</a><br>
        <br>

    </h5></u></i></center>


</body>
</html>
