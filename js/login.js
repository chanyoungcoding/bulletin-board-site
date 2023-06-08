const btn_login = document.querySelector('#btn_login');
btn_login.addEventListener('click', () => {
  const f_id = document.querySelector('#f_id');
  const f_pw = document.querySelector('#f_pw');

  if (f_id.value == '') {
    alert('아이디를 입력해 주세요.')
    f_id.focus();
    return false;
  }

  if (f_pw.value == '') {
    alert('비밀번호를 입력해 주세요.')
    f_pw.focus();
    return false;
  }

  //ajax

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "./pg/login_process.php", "true")
  
  const f1 = new FormData()
  f1.append("id", f_id.value)
  f1.append("pw", f_pw.value)

  xhr.send(f1)

  xhr.onload = () => {
    alert(xhr.status)
  }
})