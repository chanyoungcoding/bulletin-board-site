<?php
session_start();

$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';

if($ses_id == '') {
  echo "
    <scirpt>
      alert('로그인후 이용 가능합니다.');
      self.location.href='./index.php';
    </scirpt>
  ";
  exit;
}

include './inc/dbconfig.php';
include './inc/member.php';

$mem = new Member($db);

$memArr = $mem->getInfo($ses_id);

$js_array = ['js/mypage.js'];

$g_title = '회원수정';

include './inc_header.php'
?>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

<main>
  <h1 class="text-center">회원정보수정</h1>
    <div class="form-container">
      <h2>회원가입</h2>
      <form name="input_form" method="post" enctype="multipart/form-data" action="pg/member_process.php">
        <input type="hidden" name="id_chk" value="0" >
        <input type="hidden" name="email_chk" value="0" >
        <input type="hidden" name="mode" value="edit" >
        <div class="form-group">
          <label for="f_id">아이디</label>
          <div>
            <input type="text" id="f_id" name="id" readonly placeholder="아이디를 입력해 주세요." value="<?= $memArr['id'] ?>">
            <button type="button"  class="input__btn" id="btn_id_check">아이디 중복확인</button>
          </div>
        </div>

        <div class="form-group">
          <label for="f_name">이름</label>
          <div>
            <input type="text" id="f_name" name="name"  value="<?= $memArr['name']; ?>" placeholder="이름를 입력해 주세요.">
          </div>
        </div>

        <div class="form-group form-password">
          <div>
            <label for="password-inner">비밀번호</label>
            <input type="password" id="password-inner" name="password" placeholder="비밀번호를 입력해 주세요." >
          </div>
          <div>
            <label for="password-inner1">비밀번호 확인</label>
            <input type="password" id="password-inner1" name="password2" placeholder="비밀번호를 입력해 주세요." >
          </div>
        </div>

        <div class="form-group">
          <label for="f_email">이메일</label>
          <div>
            <input type="text" id="f_email" name="email" value="<?= $memArr['email'] ?>"  placeholder="이메일을 입력해 주세요.">
            <button type="button" id="btn_email_check" class="input__btn">이메일 중복확인</button>
          </div>
        </div>

        <div class="form-group">
          <label for="zipcode">우편번호</label>
          <div>
            <input type="text" id="f_zipcode" name="zipcode" value="<?= $memArr['zipcode'] ?>" readonly>
            <button type="button" class="input__btn" id="btn_zipcode">우편번호찾기</button>
          </div>
        </div>

        <div class="form-group form-address">
          <div>
            <label for="f_addr1">주소</label>
            <input type="text" id="f_addr1" name="addr1" value="<?= $memArr['addr1'] ?>">
          </div>
          <div>
            <label for="f_addr2">상세주소</label>
            <input type="text" id="f_addr2" name="addr2" value="<?= $memArr['addr2'] ?>" placeholder="상세주소를 입력해 주세요.">
          </div>
        </div>

        <div class="form-group form-file">
          <div>
            <div class="profile-image-text">
              <label for="f_photo">프로필 이미지</label>
              <input type="file" id="f_photo" name="photo">
            </div>
            <?php
              if($memArr['photo']) {
                echo '<img src="data/profile/'.$memArr['photo'].'" id="f_preview" alt="프로필 이미지 미리 보기" style="width:200px; height:200px;">';
              } else {
                echo '<img id="f_preview" src="./img/logo.png" alt="프로필 이미지 미리 보기" style="width:200px; height:200px;">';
              }
            ?>
          </div>
        </div>

        <button class="join__btn" type="button" id="btn_submit">회원수정</button>
        <button class="input__btn btn-secondary" type="button">취소하기</button>
      </form>
    </div>
</main>

<?php include './inc_footer.php' ?>