<?
//var_dump($_SESSION[_STR_LOGIN_ID])?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<h1>정보수정</h1>
    <div>
        <span><?echo (isset($this->errMsg)?$this->errMsg:"")?></span>
    </div>
    <label for="id">ID</label>
    <input type="text" name="id" id="id" readonly value="<? echo $this->arrInfo['u_id']?>">
    <br>
    <form action="/user/update" method="post">
        <label for="pw">PW</label>
        <input type="text" name="pw" id="pw">
        <span>
            <?php 
            if (isset($this->UarrError["pw"])) {
                echo $this->UarrError["pw"];
            }
            ?>
        </span>
        <br>
        <label for="pwChk">PW Check</label>
        <input type="text" name="pwChk" id="pwChk">
        <span>
            <?php 
            if (isset($this->UarrError["pwChk"])) {
                echo $this->UarrError["pwChk"];
            }
            ?>
        </span>
        <br>
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="<? 
        if (!empty($_POST)) {
            echo $this->arrInput["name"];
        } 
        elseif (!empty($_GET)) {
            echo $this->arrInfo['u_name'];
        }
        ?>">
        <span>
            <?php 
        if (isset($this->arrError["name"])) {
            echo $this->arrError["name"];
        }
            ?>
        </span>
        <br>
        <button>update</button>
    </form>

<script src="/application/view/js/common.js"></script>
</body>
</html>