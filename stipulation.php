<?php 

$js_array = ['js/member.js'];
$menu_code = 'member';

$g_title = '약관';

include './inc_header.php' 
?>
    <!-- main -->
    <main>
      <h1 class="text-center mt-5">회원 약관 및 개인정보 취급방침 동의</h1>
      <h4>회원 약관</h4>
      <textarea name="" id="" cols="30" rows="10" class="form-control">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem minus perspiciatis id quod, animi laudantium! 
        Veniam, dignissimos ut non provident beatae, tenetur totam inventore, unde ipsa ad atque laudantium. 
        Numquam atque harum molestiae minus voluptatem id possimus ab in, amet recusandae inventore, eveniet temporibus! Repellendus 
        magni vel ullam! Consectetur commodi sapiente iure? Nostrum vitae aut et suscipit delectus animi quia asperiores 
        sint id sit dolores nemo reiciendis iste excepturi, molestias dicta? Repudiandae ullam perferendis repellat 
        temporibus vitae harum cupiditate, mollitia, sunt omnis expedita voluptatibus perspiciatis minus debitis 
        deleniti enim nostrum blanditiis? Nisi obcaecati porro tempora a illum nesciunt dignissimos odio minus 
        blanditiis nulla veniam error fugit voluptatibus beatae distinctio, odit aliquam consequuntur, repellat 
        recusandae dolore voluptas? Facere sed sapiente numquam quam laborum ut repellendus veritatis nulla delectus
        maxime repudiandae iusto laboriosam recusandae consectetur pariatur, porro similique, alias placeat veniam 
        laudantium atque quae ullam. Omnis illo labore inventore obcaecati ducimus ut modi provident excepturi atque! 
        Molestias quasi natus aliquam quam magni? Beatae aperiam est ab aut voluptatum mollitia magni exercitationem, 
        quisquam, dolorem tempora omnis odio iusto, quia officiis? Fuga repudiandae illo quidem, quam earum, reiciendis
        ad consequuntur temporibus qui officia odit? Dignissimos asperiores neque quam, atque ad earum explicabo quaerat 
        fugit magnam expedita dolores saepe harum consequuntur velit quis aut fugiat? Exercitationem id ut esse ad ea velit ducimus dolorem.
        Nesciunt, ex soluta eveniet eum itaque esse quaerat neque?
      </textarea>
  
      <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="1" id="chk_member1">
        <label class="form-check-label" for="chk_member1">
          위 약관에 동의하시겠습니까?
        </label>
      </div>
  
      <h4 class="mt-3">개인정보 취급방침</h4>
      <textarea name="" id="" cols="30" rows="10" class="form-control">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem minus perspiciatis id quod, animi laudantium! 
        Veniam, dignissimos ut non provident beatae, tenetur totam inventore, unde ipsa ad atque laudantium. 
        Numquam atque harum molestiae minus voluptatem id possimus ab in, amet recusandae inventore, eveniet temporibus! Repellendus 
        magni vel ullam! Consectetur commodi sapiente iure? Nostrum vitae aut et suscipit delectus animi quia asperiores 
        sint id sit dolores nemo reiciendis iste excepturi, molestias dicta? Repudiandae ullam perferendis repellat 
        temporibus vitae harum cupiditate, mollitia, sunt omnis expedita voluptatibus perspiciatis minus debitis 
        deleniti enim nostrum blanditiis? Nisi obcaecati porro tempora a illum nesciunt dignissimos odio minus 
        blanditiis nulla veniam error fugit voluptatibus beatae distinctio, odit aliquam consequuntur, repellat 
        recusandae dolore voluptas? Facere sed sapiente numquam quam laborum ut repellendus veritatis nulla delectus
        maxime repudiandae iusto laboriosam recusandae consectetur pariatur, porro similique, alias placeat veniam 
        laudantium atque quae ullam. Omnis illo labore inventore obcaecati ducimus ut modi provident excepturi atque! 
        Molestias quasi natus aliquam quam magni? Beatae aperiam est ab aut voluptatum mollitia magni exercitationem, 
        quisquam, dolorem tempora omnis odio iusto, quia officiis? Fuga repudiandae illo quidem, quam earum, reiciendis
        ad consequuntur temporibus qui officia odit? Dignissimos asperiores neque quam, atque ad earum explicabo quaerat 
        fugit magnam expedita dolores saepe harum consequuntur velit quis aut fugiat? Exercitationem id ut esse ad ea velit ducimus dolorem.
        Nesciunt, ex soluta eveniet eum itaque esse quaerat neque?
      </textarea>

      <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="2" id="chk_member2">
        <label class="form-check-label" for="chk_member2">
          위 개인정보 취급방침에 동의하시겠습니까?
        </label>
      </div>

      <div class="mt-4 d-flex justify-content-center gap-2">
        <button class="btn btn-primary w-50" id="btn_member">회원가입</button>
        <button class="btn btn-secondary w-50">가입취소</button>
      </div>

      <form method="post" name="stipulation_form" action="member_input.php" style="display:none" id="chk_form">
        <input type="hidden" name="chk" value="0">
      </form>

    </main>
  </div>

  <?php include './inc_footer.php' ?>
