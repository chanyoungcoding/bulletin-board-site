<?php 

class Member {
  //멤버 변수, 프로퍼티
  private $conn;

  // 생성자
  public function __construct($db) {
    $this->conn = $db;
  }

  //아이디 중복체크용 멤버 함수,메소드
  public function id_exists($id) {
    $sql = "SELECT * FROM member WHERE id=:id";  // id= 'chan'; 이렇게 나옴
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->rowCount() ? true : false ;    // 검색했을때 아무것도 없다면 가로열도 0 일 것이다.
  }

  //이메일 중복체크용 멤버 함수,메소드
  public function email_exists($email) {
    $sql = "SELECT * FROM member WHERE email=:email"; 
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    return $stmt->rowCount() ? true : false ; 
  }

  //회원정보 입력
  public function input($marray) {
    var_dump($marray);
  }

}

?>