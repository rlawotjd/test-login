<?php

namespace application\controller;

class UserController extends Controller 
{
    public function listGet()
    {
        return "list"._EXTENSION_PHP;
    }
    public function loginGet()
    {
        // var_dump($_GET);
        return "login"._EXTENSION_PHP;
    }
    public function loginPost()
    {
        $result = $this->model->getUser($_POST);
        $this->model->close();
        // 유저 유무 체크
        if (count($result)===0) {
            $errMsg="입력하신 회원 정보가 없습니다.";
            $this->addDynamicProperty("errMsg",$errMsg);
            //로그인 페이지 리턴
            return "login"._EXTENSION_PHP;

        }
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];


        return _BASE_REDIRECT."/product/list";
    }

    //로그아웃 메소드
    public function logoutGet()
    {
        session_unset();
        session_destroy();

        return "login"._EXTENSION_PHP;
    }

    //회원가입 이동 메소드
    public function regisGet()
    {
        return "regis"._EXTENSION_PHP;
    }
    // 회원가입
    public function regisPost()
    {
        $arrPost=$_POST;
        $arrChkErr = [];
        $pattenSo="/[a-z]/";
        $pattenDE="/[A-Z]/";
        $pattenSU="/[0-9]/";
        $pattenTT="/[!@#$%^&*()_+=-]/";
        $pattenID="/[^a-zA-Z0-9]/";
        $pattenPW="/[^a-zA-Z0-9!@#$%^&*()_+-=]/";

        //유효성 체크
        if (mb_strlen($arrPost["id"])>12||mb_strlen($arrPost["id"])===0) {
            $arrChkErr["id"]="ID는 12글자 이하로 입력해주세요";
        }
        if (preg_match($pattenID,$arrPost["id"])!==0) {
            $arrChkErr["id"]="ID는 영어대소문자,숫자로 입력해주세요";
        }
        if (mb_strlen($arrPost["pw"])>20||mb_strlen($arrPost["pw"])<8) {
            $arrChkErr["pw"]="PW는 8글자 이상 20글자 이하로 입력해주세요";
        }
        if (((preg_match($pattenTT,$arrPost["pw"])+preg_match($pattenSU,$arrPost["pw"])+preg_match( $pattenDE,$arrPost["pw"])+preg_match( $pattenSo,$arrPost["pw"])===4)&&preg_match($pattenPW,$arrPost["pw"])!==0)) {
            $arrChkErr["pw"]="PW영어대소문자숫자특수문자하나씩넣어주세요";
        }
        if ($arrPost["pw"]!==$arrPost["pwChk"]) {
            $arrChkErr["pwChk"]="비밀번호와 일치하지 않습니다.";
        }
        if (mb_strlen($arrPost["name"])>30||mb_strlen($arrPost["name"])===0) {
            $arrChkErr["name"]="담당자한테 문의해주세요";
        }
        //유효성 체크 에러일 경우
        if (!empty($arrChkErr)) {
            //에러메서지 셋팅
            $this->addDynamicProperty('arrError',$arrChkErr);
            return "regis"._EXTENSION_PHP;
        }
        $result=$this->model->getUser($arrPost,false);
         // 유저 유무 체크
        if (count($result)!==0) {
            $errMsg="입력하신 ID가 사용중입니다.";
            $this->addDynamicProperty("errMsg",$errMsg);
            //회원가입 페이지 리턴
            return "regis"._EXTENSION_PHP;

        }
        //transaction start
        $this->model->beginTransaction();
        //user insert
        if (!$this->model->insertUser($arrPost)) {
            echo "User Regis Error";
            $this->model->rollback();//예외처리
            exit();
        }
        $this->model->commit();//정상처리
        //transaction end
        
        //로그인 페이지로 이동
        return "login"._EXTENSION_PHP;
    }

    // 수정페이지 메소드
    public function privacyGet()
    {
        // var_dump($_POST);
        // var_dump($_GET);
        // var_dump(!empty($_POST));
        // var_dump(isset($_GET));
        $sess=$_SESSION[_STR_LOGIN_ID];
        $result = $this->model->getUser(["id"=>$sess],false);
        $this->model->close();
        $this->addDynamicProperty("arrInfo",$result[0]);
        return "privacy"._EXTENSION_PHP;
    }

    public function updatePost()
    {
        $arrPost = $_POST;
        // var_dump($_POST);
        // var_dump($_GET);
        // var_dump(!empty($_POST));
        // var_dump(isset($_GET));
        $this->addDynamicProperty("arrInput",$arrPost);
        // $arrInfo = ["u_id" => $arrPost["id"]];
        $sess=$_SESSION[_STR_LOGIN_ID];
        $arrPost["id"] = $sess;
        $result = $this->model->getUser(["id"=>$sess],false);
        $this->addDynamicProperty("arrInfo",$result[0]);
        $arrChkErr = [];
        $pattenSo="/[a-z]/";
        $pattenDE="/[A-Z]/";
        $pattenSU="/[0-9]/";
        $pattenTT="/[!@#$%^&*()_+=-]/";
        $pattenPW="/[^a-zA-Z0-9!@#$%^&*()_+-=]/";
        //유효성 체크
        if (mb_strlen($arrPost["pw"])>20||mb_strlen($arrPost["pw"])<8) {
            $arrChkErr["pw"]="PW는 8글자 이상 20글자 이하로 입력해주세요";
        }
        if ($arrPost["pw"]===$this->arrInfo['u_pw']) {
            $arrChkErr["pw"]="기존에 사용하신 비밀번호 입니다";
        }
        if (((preg_match($pattenTT,$arrPost["pw"])+preg_match($pattenSU,$arrPost["pw"])+preg_match( $pattenDE,$arrPost["pw"])+preg_match( $pattenSo,$arrPost["pw"])===4)&&preg_match($pattenPW,$arrPost["pw"])!==0)) {
            $arrChkErr["pw"]="PW영어대소문자숫자특수문자하나씩넣어주세요";
        }
        if ($arrPost["pw"]!==$arrPost["pwChk"]) {
            $arrChkErr["pwChk"]="비밀번호와 일치하지 않습니다.";
        }
        if (mb_strlen($arrPost["name"])>30||mb_strlen($arrPost["name"])===0) {
            $arrChkErr["name"]="담당자한테 문의해주세요";
        }
        //유효성 체크 에러일 경우
        if (!empty($arrChkErr)) {
            //에러메서지 셋팅
            // $this->addDynamicProperty("arrInfo",$arrInfo);
            $this->addDynamicProperty('UarrError',$arrChkErr);
            return "privacy"._EXTENSION_PHP; //콘트롤러에있는 메소드 실행 리카이어원스 자연스러운 연결?
            // return "_BASE_REDIRECT."/user/privacy"; //새로우 url페이지로 이동 기존 정보 점프
        }
        //transaction start
        $this->model->beginTransaction();
        //user update
        if (!$this->model->updateUser($arrPost)) {
            echo "User privacy Error";
            $this->model->rollback();//예외처리
            exit();
        }
        $this->model->commit();//정상처리
        //transaction end
        $this->model->close();
        var_dump($arrInfo);
        //로그인 페이지로 이동
        return _BASE_REDIRECT."/user/privacy";
    }
}
