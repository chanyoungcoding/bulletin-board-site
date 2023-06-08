//회원가입 부분

//아이디
const btn_id_check = document.querySelector("#btn_id_check");
btn_id_check.addEventListener('click', () => {
  const f_id = document.querySelector("#f_id");
  if (f_id.value == '') {
    alert('아이디를 입력해 주세요.')
    return false;
  }

  //ajax 통신
  const f1 = new FormData();
  f1.append('id', f_id.value);
  f1.append('mode', 'id_chk');

  const xhr = new XMLHttpRequest();
  xhr.open('POST', "./pg/member_process.php", "true");
  xhr.send(f1)

  xhr.onload = () => {
    if (xhr.status == 200) {
      const data = JSON.parse(xhr.responseText)

      if (data.result == 'success') {
        alert('사용이 가능한 아이디입니다.')
        document.input_form.id_chk.value = '1'
      } else if (data.result == 'fail') {
        alert('이미 사용중인 아이디입니다.')
        document.input_form.id_chk.value = '0'
        f_id.value = ''
        f_id.focus()
      } else if (data.result == 'empty_id') {
        alert('아이디가 비어 있습니다.');
        f_id.focus();
      }
    }
  }
})

//이메일
//아이디
const btn_email_check = document.querySelector("#btn_email_check");
btn_email_check.addEventListener('click', () => {
  const f_email = document.querySelector("#f_email");
  if (f_email.value == '') {
    alert('이메일을 입력해 주세요.')
    return false;
  }

  //ajax 통신
  const f1 = new FormData();
  f1.append('email', f_email.value);
  f1.append('mode', 'email_chk');

  const xhr = new XMLHttpRequest();
  xhr.open('POST', "./pg/member_process.php", "true");
  xhr.send(f1)

  xhr.onload = () => {
    if (xhr.status == 200) {
      const data = JSON.parse(xhr.responseText)

      if (data.result == 'success') {
        alert('사용이 가능한 이메일입니다.')
        document.input_form.email_chk.value = '1'
      } else if (data.result == 'fail') {
        alert('이미 사용중인 이메일입니다.')
        document.input_form.email_chk.value = '0'
        f_email.value = ''
        f_email.focus()
      } else if (data.result == 'empty_email') {
        alert('이메일가 비어 있습니다.');
        f_email.focus();
      }
    }
  }
})

//가입 버튼
const btn_submit = document.querySelector('#btn_submit');
btn_submit.addEventListener('click', () => {
  const f = document.input_form;
  if (f.id.value == '') {
    alert('아이디를 입력해 주세요.')
    return false
  }

  //아이디 중복 체크 여부
  if (f.id_chk.value == '0') {
    alert('아이디를 중복 체크 해주세요.')
    return false
  }

  //비밀번호 확인
  if (f.password.value == '') {
    alert('비밀번호를 입력해 주세요.')
    f.password.focus();
    return false
  }
  if (f.password2.value == '') {
    alert('확인용 비밀번호를 입력해 주세요.')
    f.password2.focus();
    return false
  }

  // 비밀번호와 확인비밀번호 일치 여부
  if (f.password.value != f.password2.value) {
    alert('비밀번호가 서로 일치하지 않습니다.')
    f.password.value = ''
    f.password2.value = ''
    f.password.focus();
    return false
  }
})

//우편번호 찾기

const btn_zipcode = document.querySelector('#btn_zipcode');
btn_zipcode.addEventListener('click', () => {
  new daum.Postcode({
    oncomplete: function (data) {
      let addr = ''
      let extra_addr = ''

      if (data.userSelectedType == 'J') {
        addr = data.jibunAddress
      } else if (data.userSelectedType == 'R') {
        addr = data.roadAddress
      }

      if (data.bname != '') {
        extra_addr = data.bname
      }

      if (data.buildingName != '') {
        if (extra_addr == '') {
          extra_addr = data.buildingName
        } else {
          extra_addr += ', ' + data.buildingName
        }
      }

      if (extra_addr != '') {
        extra_addr = '( ' + extra_addr + ' )'
      }

      const f_addr1 = document.querySelector('#f_addr1');
      f_addr1.value = addr + extra_addr

      const f_zipcode = document.querySelector('#f_zipcode');
      f_zipcode.value = data.zonecode

      const f_addr2 = document.querySelector('#f_addr2');
      f_addr2.focus();
    }
  }).open();
})

// 프로필 이미지

const f_photo = document.querySelector('#f_photo');
f_photo.addEventListener('change', (e) => {
  console.log(e)
  const reader = new FileReader()
  reader.readAsDataURL(e.target.files[0])

  reader.onload = (e) => {
    console.log(e)

    const f_preview = document.querySelector('#f_preview')
    f_preview.setAttribute('src', e.target.result);
  }
})
  