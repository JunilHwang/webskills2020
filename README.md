# 2020 지방대회 일부 솔루션

## A-Module

- [X] 메인페이지 – 비주얼 이미지 슬라이드 영역
  - 비주얼 이미지 슬라이드 영역은 제공된 사진을 활용하여 사이트의 특성이 잘 나타나도록 디자인한다.
  - 3개 이상의 이미지가 2초마다 자동 슬라이드 된다.
  - 이전, 다음 이미지를 볼 수 있는 아이콘이 제공되고, 정상 동작하여야 한다.
  - 이미지의 전환은 1 → 2 → 3 → 2 → 1 → 2 → 3 → 2.... 과같이 순서를 유지하여 반복된다.

## B-Module

- [X] JSON 파일 추출 및 배열 저장.
- [X] 모든 상품 리스트에서 특정 상품 사진을 마우스 드래그하여 드롭 영역 위치에 넣으면 해당 상품이 장바구니에 담긴다.
- [ ] 검색어는 초성으로 검색이 가능하다. (예를 들어 ‘ᄋᄃ’ 검색 시 ‘우디크’ 검색 가능).

## C-Module

- [ ] 헤더 영역의 회원가입 버튼 또는 링크를 클릭할 시 아이디, 비밀번호, 이름, 사진 필드와 랜덤 5자리(영문 대/소문자, 숫자)\
  Captcha 이미지와 입력 필드, 가입 완료 버튼을 포함한 폼이 모달 팝업으로 나타난다.
- [ ] 모든 필드를 입력하고 가입 완료 버튼을 눌렀을 때, Chatcha 문구가 이미지와 일치하면 가입이 완료되며,\
  일치하지 않을 경우 ‘자동입력방지 문자를 잘못 입력하였습니다.’라는 메시지를 보여준다.
- [ ] 페이지에는 온라인 집들이 게시 글 목록이 보인다.\
  [Before 사진, After 사진, 작성자 이름과 아이디, 작성일(ex. 2020-01-31), 평점, 노하우, 평점 주기 버튼]