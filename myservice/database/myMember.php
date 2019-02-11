<?php
  class myMember
  {
    protected $dbConnection=null;
    protected $mode;
    protected function dbConnection()
    {
      include_once $_SERVER['DOCUMENT_ROOT'].'/myservice/connect/connect.php';
    }

    function __construct()
    {
      if(isset($_POST['mode']))
      {
        $this->mode=$_POST['mode'];
        if($this->mode=='emailCheak')
        {
          $this->emailCheak($_POST['userEmail']);
        }else if($this->mode=='save')
        {
          $this->signUp();
        }else if($this->mode=='photo')
        {
          $this->photoSave();
        }
      }
    }

    function signUp()
    {
      $userName=trim($_POST['userName']);
      if(!preg_match('/^[a-zA-Z가-힣]+$/',$userName))
      {
        echo '올바른 이름이 아닙니다.';
        exit;
      }
      $userEmail=trim($_POST['userEmail']);
      if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL))
      {
        echo '올바른 이메일이 아닙니다.';
        exit;
      }
      $userPw=$_POST['userPw'];
      if($userPw=='')
      {
        echo '비밀번호 값이 공백입니다.';
        exit;
      }
      $userPw=sha1('mySalt'.$userPw);
      $birthYear=(int)$_POST['birthYear'];
      if($birthYear=='')
      {
        echo '생년 값이 빈값입니다.';
        exit;
      }
      $birthYearCheak=false;
      $thisYear=date('Y',time());
      for($i=1900;$i<=$thisYear;$i++)
      {
        if($i==$birthYear)
        {
          $birthYearCheak=true;
          break;
        }
      }
      if($birthYearCheak==false)
      {
        echo '올바른 생년 값이 아닙니다.';
        exit;
      }
      $birthMonth=(int)$_POST['birthMonth'];
      if($birthMonth=='')
      {
        echo '생월 값이 빈값입니다.';
        exit;
      }
      $birthMonthCheak=false;
      for($i=1;$i<=12;$i++)
      {
        if($i==$birthMonth)
        {
          $birthMonthCheak=true;
          break;
        }
      }
      if($birthMonthCheak==false)
      {
        echo '올바른 생월 값이 아닙니다.';
        exit;
      }
      $birthDay=(int)$_POST['birthDay'];
      if($birthDay=='')
      {
        echo '생일 값이 빈값입니다.';
        exit;
      }
      $birthDayCheak=false;
      for($i=1;$i<=31;$i++)
      {
        if($i==$birthDay)
        {
          $birthDayCheak=true;
          break;
        }
      }
      if($birthDayCheak==false)
      {
        echo '올바른 값이 아닙니다.';
        exit;
      }
      $birth=$birthYear.'-'$birthMonth.'-'.$birthDay;
      $gender=$_POST['gender'];
      $genderCheak=false;
      switch($gender)
      {
        case 'm':
        case 'w':
          $genderCheak=true;
          break;
      }
      if($genderCheak==false)
      {
        echo '올바른 성별 정보가 아닙니다.';
        exit;
      }
    }
    $this->dbConnection();
    $userName=$this->dbConnection->real_escape_string($userName);
    $profilePhoto='';
    if($gender=='m')
    {
      $profilePhoto='/myservice/images/me/boy.png';
    }else if($gender=='w')
    {
      $profilePhoto='/myservice/images/me/girl.png';
    }
    $coverPhoto='/myservice/images/me/happyCat.png';
    $regTime=time();
    $sql="INSERT INTO mymember(userName,email,pw,birthDay,gender,profilePhoto,coverPhoto,regTime)";
    $sql=.="VALUES('{$userName}','{$userEmail}','{$userPw}','{$birth}','{$gender}','{$profilePhoto}','{$coverPhoto}','{$regTime}')";
    $res=$this->dbConnection->query($sql);
    if($res)
    {
      $_SESSION['myMemberSes']['email']=$userEmail;
      $_SESSION['myMemberSes']['userName']=$userName;
      $_SESSION['myMemberSes']['myMemberID']=$this->dbConnection->insert_id;
      $_SESSION['myMemberSes']['profilePhoto']=$profilePhoto;
      $_SESSION['myMemberSes']['coverPhoto']=$coverPhoto;
      header('Location:../me.php');
    }else
    {
      echo "<script>alert('실패'); location.href='../index.php';</script>";
      exit;
    }
    function emailCheak($email)
    {

    }

    function photoSave()
    {

    }
  }
  $myMember=new myMember;
 ?>
