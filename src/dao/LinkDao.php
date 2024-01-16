<?php
class LinkDao
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
        $resultset = $this->mysqlAdapter->query("SELECT * FROM link");
        $result = [];
        while ($row = mysqli_fetch_assoc($resultset)) {
            $result[] = $this->schematize($row);
        }
        return $result;
    }
    public function selectById(string $link_id)
    {
        $resultset = $this->mysqlAdapter->query("SELECT * FROM link WHERE link_id = $link_id");
        $row = mysqli_fetch_assoc($resultset);
        return $this->schematize($row);
    }

    public function insert(
        String $link_name,
        String $link_ref
    ) {
        return $this->mysqlAdapter->query("
            INSERT INTO link SET 
                link_name='$link_name',
                link_ref='$link_ref'
        ");
    }
    public function update(
        int $link_id,
        string $link_name,
        string $link_ref
    ) {
        return $this->mysqlAdapter->query("
            UPDATE link SET 
                link_name='$link_name',
                link_ref='$link_ref'
            WHERE link_id=$link_id
        ");
    }
    public function delete(int $link_id)
    {
        return $this->mysqlAdapter->query("DELETE FROM link WHERE link_id = $link_id ");
    }

    public function schematize($row)
    {
        // if link_ref include localhost, replace with http_domain
        if (strpos($row['link_ref'], 'localhost') !== false) {
            $row['link_ref'] = str_replace('localhost/', $_ENV['HTTP_DOMAIN'] . "public/uploads.general/", $row['link_ref']);
        }

        return $row;
    }
}
