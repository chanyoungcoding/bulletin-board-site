<?php

if(!isset($_POST['chk']) or $_POST['chk'] != 1) {
  // die("<script>
  //   alert('약관 등을 동의하시고 접근하시기 바랍니다.');
  //   self.location.href = './stipulation.php';
  // </script>");
}

include './inc_header.php'
?>

<main>
  <h1 class="text-center">회원가입</h1>
    <div class="form-container">
      <h2>회원가입</h2>
      <form method="post" action="member_input.php">

        <div class="form-group">
          <label for="username">아이디</label>
          <div>
            <input type="text" id="username" name="username" placeholder="아이디를 입력해 주세요." required>
            <button class="input__btn">아이디 중복확인</button>
          </div>
        </div>

        <div class="form-group form-password">
          <div>
            <label for="password">비밀번호</label>
            <input type="password" id="password" name="password" placeholder="비밀번호를 입력해 주세요." required>
          </div>
          <div>
            <label for="password">비밀번호 확인</label>
            <input type="password" id="password" name="password" placeholder="비밀번호를 입력해 주세요." required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">이메일</label>
          <div>
            <input type="email" id="email" name="email" placeholder="이메일을 입력해 주세요." required>
            <button class="input__btn">이메일 중복확인</button>
          </div>
        </div>

        <div class="form-group">
          <label for="zipcode">우편번호</label>
          <div>
            <input type="text" id="zipcode" name="zipcode" required>
            <button class="input__btn">우편번호찾기</button>
          </div>
        </div>

        <div class="form-group form-address">
          <div>
            <label for="address">주소</label>
            <input type="text" id="address" name="address" required>
          </div>
          <div>
            <label for="detail-address">상세주소</label>
            <input type="text" id="detail-address" name="detail-address" placeholder="상세주소를 입력해 주세요." required>
          </div>
        </div>

        <div class="form-group form-file">
          <div>
            <input type="file" id="profile-image" name="profile">
            <img class="preview-image" src="./img/logo.png" alt="프로필 이미지 미리 보기" style="width:300px">
          </div>
        </div>

        <button class="join__btn" type="submit">가입하기</button>
        <button class="input__btn btn-secondary" type="reset">취소하기</button>
      </form>
    </div>
</main>

<?php include './inc_footer.php' ?>
