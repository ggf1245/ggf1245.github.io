<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width"/>
<meta charset="utf-8"/>
<title>My First Web Service</title>
<link rel="stylesheet" href="./css/cssReset.css" >
<link rel="stylesheet" href="./css/header.css" >
<link rel="stylesheet" href="./css/footer.css" >
<link rel="stylesheet" href="./css/all.css">
<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./js/me.js"></script>
</head>
<body>
  <div id="timeLine">
    <div id="container">
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
            <div class="writingDate">2019년 1월 30일</div>
          </div>
        </div>

        <span class="content">반갑습니다.</span>

        <div class="likeArea">
          <div class="likeNum likes861225" style="background:#fff">공감 수:250</div>
          <div class="likeBtn" id="likes861225">공감하기</div>
          <div class="contentID">콘텐츠 번호:861225</div>
        </div>

        <div class="myCommentArea myCommentArea861225">
          <div class="commentBox">
            <img src="./images/me/happyCat.png"/>
            <p class="commentRegTime">2019년 1월 30일</p>
            <p class="commentPoster">이민우</p>
            <p class="writtenComment">반갑습니다.</p>
          </div>
        </div>
        <div class="inputBox">
          <img src="./images/me/happyCat.png"/>
          <input type="text" class="inputComment comments861225" placeholder="코멘트 입력"/>
          <div class="regCommentBox">
            <input type="button" class="regCommentBtn" id="comments861225" value="게시"/>
          </div>
        </div>
      </div>
    </div>
    <div id="noContents">
      더 이상 콘텐츠가 없습니다.
    </div>
    <input type="hidden" name="page" id="page" value="1"/>
  </div>
  <aside id="advertiseBox">
    Advertisement
  </aside>


















</body>
</html>
