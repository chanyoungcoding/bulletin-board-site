document.addEventListener("DOMContentLoaded", () => {
  const btn_member = document.querySelector("#btn_member");

  btn_member.addEventListener("click", () => {
    const chk_member1 = document.querySelector("#chk_member1");
    const chk_member2 = document.querySelector("#chk_member2");
    const chk_form = document.querySelector("#chk_form");
    if (!chk_member1.checked) {
      alert("회원 약관에 동의해 주셔야 가입이 가능합니다.")
      return false
    }

    if (!chk_member2.checked) {
      alert("개인정보 취급방침에 동의해 주셔야 가입이 가능합니다.")
      return false
    }
    
    chk_form.chk.value = 1
    chk_form.submit();
  })
})