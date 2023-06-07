//회원가입 부분
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
    //
  }

  
})
  