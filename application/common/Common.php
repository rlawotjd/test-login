<?php
//트렌지션 커밋 롤백 API...
class Common{

    //DB conn 종료
    protected function close()
    {
        $this->conn = null;
    }
    //transaction start
    protected function beginTransaction()
    {
        $this->conn->beginTransaction();
    }
    //commit
    protected function commit()
    {
        $this->conn->commit();
    }
    //rollback
    protected function rollback()
    {
        $this->conn->rollback();
    }
    }
