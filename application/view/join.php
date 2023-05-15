<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                
            </div>
            <div class="col">
                <form action="">
                    <label for="id">아이디</label>
                    <br>
                    <input type="text" name="id" id="id" value="<?$id_val?>">
                    <button id="id_c">중복확인</button>
                    <br>
                    <label for="pw">비밀번호</label>
                    <br>
                    <input type="password" name="pw" id="pw">
                    <br>
                    <label for="pw_c">비밀번호 확인</label>
                    <br>
                    <input type="password" name="pw_c" id="pw_c">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-secondary">회원가입</button>
                </form>
                <br>
<a href="/user/login">
    <button type="button" class="btn btn-danger">취소</button>
</a>
            </div>
            <div class="col">
                
            </div>
        </div>
        <div class="row align-items-end"></div>
    </div>
</body>
</html>