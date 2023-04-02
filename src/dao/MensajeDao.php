<?php
class MensajeDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }
    public function getLastId()
    {
        return $this->mysqlAdapter->getLastId();
    }
    public function select()
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM mensajes");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $row;
        }
        return $result;
    }
    public function selectById(int $mensaje_id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM mensajes WHERE mensaje_id = $mensaje_id");
        $row = mysqli_fetch_assoc($resultset);
        return $row;
    }

    // public function insert(
    //     String $mensaje_name,
    //     String $mensaje_ref
    // ) {
    //     return $this->mysqlAdapter->query("
    //         INSERT INTO mensajes SET 
    //             mensaje_name='$mensaje_name',
    //             mensaje_ref='$mensaje_ref'
    //     ");
    // }
    // public function update(
    //     string $mensaje_name,
    //     string $mensaje_ref,
    //     int $mensaje_id
    // ) {
    //     return $this->mysqlAdapter->query("
    //         UPDATE mensajes SET 
    //             mensaje_name='$mensaje_name',
    //             mensaje_ref='$mensaje_ref'
    //         WHERE mensaje_id=$mensaje_id
    //     ");
    // }
    public function delete(int $mensaje_id)
    {
        return $this->mysqlAdapter->query("DELETE FROM mensajes WHERE mensaje_id = $mensaje_id ");
    }
}
