<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width"/>
<meta charset="utf-8"/>
<title>My First Web Service</title>
<link rel="stylesheet" href="./css/cssReset.css" >
<link rel="stylesheet" href="./css/header.css" >
<link rel="stylesheet" href="./css/footer.css" >
<link rel="stylesheet" href="./css/me.css">
<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./js/me.js"></script>
<style>
#myWallPhoto{background:url('./images/me/happyCat.png');background-size:cover;background-repeat:no-repeat;background-position:50% 50%;
border-bottom:1px solid #ccc}
</style>
</head>
<body>
  <div id="container">
    <div id="center">
      <div id="myWallPhoto"></div>
      <div id="myProfilePhoto">
        <img src="./images/me/happyCat.png"/>
      </div>
      <p id="name">이민우</p>
      <div class="myButtonBox">
        <a href="./log/memberLog_1111.text" download>나의 로그 다운로드</a>
      </div>
      <div class="myButtonBox">
        <form name="photo" method="post" action="/myservice/database/myMember.php"
            enctype="multipart/form-data">
          <div class="photoBox">
            <input type="file" name="myProfilePhoto" class="photoSelectorBtn"/>
          </div>

          <input type="hidden" name="mode" value="photo"/>

          <div class="photoBox">
            <input type="submit" id="myProfilePhotoUploadBtn" value="프로필 사진 변경"/>
          </div>
        </form>
      </div>
      <div class="myButtonBox">
        <form name="photo" method="post" action="/myservice/database/myMember.php"
            enctype="multipart/form-data">
          <div class="photoBox">
            <input type="file" name="myCoverPhoto" class="photoSelectorBtn"/>
          </div>

          <input type="hidden" name="mode" value="photo"/>

          <div class="photoBox">
            <input type="submit" id="myCoverPhotoUploadBtn" value="커버 사진 변경"/>
          </div>
        </form>
      </div>


      <div id="myContent">
        <div id="writing">
          <div class="me">
            <img src="./images/me/happyCat.png"/>
            <p>이민우</p>
          </div>
          <textarea maxlength="500" id="meContent"></textarea>
          <div id="inputBox">
              <input type="button" id="mePostBtn" value="게시"/>
            </div>
        </div>

        <div class="reading">
          <div class="writerArea">
            <img src="./images/me/happyCat.png"/>
            <div class="writingInfo">
            <p>이민우</p>
            <div class="writingDate">2030 1월 1일</div>
          </div>
        </div>

        <span class="content">안녕하세요. 정말 반갑습니다.</span>

        <div class="likeArea">
          <div class="likeNum likes861225" style="background:#fff">공감 수: 250</div>
          <div class="likeBtn" id="likes861225">공감하기</div>
          <div class="contentsID">콘텐츠 번호: 861225</div>
        </div>

        <div class="myCommentArea myCommentArea861225">
          <div class="commentBox">
            <img src="./images/me/happyCat.png"/>
            <p class="commentRegTime">2019년 1월 29일</p>
            <p class="commentPoster">이민우</p>
            <p class="writtenComment">정말 반갑습니다.</p>
          </div>
        </div>
        <div class="inputBox">
          <img src="./images/me/happyCat.png"/>
          <input type="text" class="inputComment comments861225" placeholder="코멘트 입력"/>
          <div class="regCommentBox">
            <input type="button" class="regCommentBtn" id="comment861225" value="게시"/>
          </div>
        </div>
        </div>
        </div>
        <input type="hidden" name="page" id="page" value="1"/>
      </div>
      <div id="noContents">
        더 이상 콘텐츠가 없습니다.
      </div>
    </div>
</body>
</html>
