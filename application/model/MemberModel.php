<?php

namespace application\model;

class MemberModel extends Model
{
    public function joinUser($arrJoinInfo)
    {
        $sql = 
        " INSERT INTO "
        ." user_info "
        ." ( "
        ." u_id "
        ." , u_pw "
        . " ) "
        ." SELECT "
        ." :id "
        ." , :pw "
        ." FROM DUAL "
        ." WHERE NOT EXISTS "
        ." (SELECT "
        ." u_id "
        ." FROM "
        ." user_info "
        ." WHERE "
        ." u_id = :id) "
        ;
        $prepare = [
            ":id" => $arrJoinInfo["id"]
            ,":pw"=> $arrJoinInfo["pw"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->beginTransaction();
            $stmt->execute($prepare);
            $stmt->commit();

        } catch (Exception $e) {
            echo "UserModel->joinUser Error :".$e->getMessage();
            $stmt->rollback();
            exit();
        } finally{
            $this->closeConn();
        }
        return $result;
    }
    public function check_id($arrUserInfo)
    {
        $sql = 
        " INSERT INTO "
        ." user_info "
        ." ( "
        ." u_id "
        ." , u_pw "
        . " ) "
        ." SELECT "
        ." :id "
        ." , :pw "
        ." FROM DUAL "
        ." WHERE NOT EXISTS "
        ." (SELECT "
        ." u_id "
        ." FROM "
        ." user_info "
        ." WHERE "
        ." u_id = :id) "
        ;
        $prepare = [
            ":id" => $arrUserInfo["id"]
            ,":pw"=> $arrUserInfo["pw"]
        ];
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->beginTransaction();
            $stmt->execute($prepare);
            $stmt->commit();

        } catch (Exception $e) {
            echo "UserModel->joinUser Error :".$e->getMessage();
            $stmt->rollback();
            exit();
        } finally{
            $this->closeConn();
        }
        return $result;
    }

}
