<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<!--
    헤더 영역의 회원가입 버튼 또는 링크를 클릭할 시 아이디, 비밀번호, 이름, 사진 필드와 랜덤 5자리(영문 대/소문자, 숫자)\
    Captcha 이미지와 입력 필드, 가입 완료 버튼을 포함한 폼이 모달 팝업으로 나타난다.
-->
<form action="">
    <fieldset>
        <legend>회원가입</legend>
        <ul>
            <li>
                <label>
                    아이디
                    <input type="text" name="id" size="20">
                </label>
            </li>
            <li>
                <label>
                    비밀번호
                    <input type="password" name="pw" size="20">
                </label>
            </li>
            <li>
                <label>
                    이름
                    <input type="text" name="name" size="20">
                </label>
            </li>
            <li>
                <label>
                    사진
                    <input type="file" name="photo" size="20">
                </label>
            </li>
            <li>
                <label>
                    인증 번호 입력
                    <input type="text" name="id" size="20">
                </label>
            </li>
            <li>
                <button type="submit">가입완료</button>
            </li>
        </ul>
    </fieldset>
</form>
</body>
</html>