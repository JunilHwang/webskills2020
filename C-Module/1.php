<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    ul, li {
      list-style: none;
    }

    img {
      vertical-align: middle;
    }

    input, button {
      vertical-align: middle;
    }

    .form {
      width: 500px;
      margin: 0 auto;
    }

    .form fieldset {
      padding: 20px;
    }

    .form li {
      margin-bottom: 20px;
    }

    .form input {
      height: 30px;
      width: 100%;
      border-radius: 3px;
      border: 1px solid #666;
    }

    .form label strong {
      display: block;
      margin-bottom: 5px;
    }

    .form .captcha {
      display: block;
      margin-bottom: 10px;
    }

    .form button {
      border: 1px solid #666;
      background: #FFF;
      padding: 5px 10px;
    }
  </style>
</head>
<body>
<!--
    헤더 영역의 회원가입 버튼 또는 링크를 클릭할 시 아이디, 비밀번호, 이름, 사진 필드와 랜덤 5자리(영문 대/소문자, 숫자)\
    Captcha 이미지와 입력 필드, 가입 완료 버튼을 포함한 폼이 모달 팝업으로 나타난다.
-->
<div class="form">
  <form action="" method="post">
    <fieldset>
      <legend>회원가입</legend>
      <ul>
        <li>
          <label>
            <strong>아이디</strong>
            <input type="text" name="id" size="20">
          </label>
        </li>
        <li>
          <label>
            <strong>비밀번호</strong>
            <input type="password" name="pw" size="20">
          </label>
        </li>
        <li>
          <label>
            <strong>이름</strong>
            <input type="text" name="name" size="20">
          </label>
        </li>
        <li>
          <label>
            <strong>사진</strong>
            <input type="file" name="photo" size="20">
          </label>
        </li>
        <li>
          <label for="captchaInput">
            <strong>자동입력 방지문자</strong>
          </label>
          <span class="captcha">
            <img src="./captcha.php" alt="captcha" id="captcha"/>
          </span>
          <input type="text" name="captcha" id="captchaInput" size="10">
        </li>
        <li>
          <button type="submit">가입완료</button>
        </li>
      </ul>
    </fieldset>
  </form>
</div>
</body>
</html>