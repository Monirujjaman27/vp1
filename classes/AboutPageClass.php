<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class AboutPageClass
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function add($req)
    {
        $description = $this->fm->validation($req['description']);
        $description = mysqli_real_escape_string($this->db->link, $description);
        $checkQuery = "SELECT * FROM pages WHERE id = 1";
        $checkData = $this->db->select($checkQuery);
        if ($checkData) {
            $query = "UPDATE pages SET about = '$description' WHERE id = 1";
            $result = $this->db->insert($query);
            session::set('success', 'About Content Save Successfully');
        } else {
            $query = "INSERT INTO pages(about) VALUES ('$description')";
            $result = $this->db->insert($query);
            session::set('success', 'About Content Save Successfully');
        }
    }



    public function showById()
    {
        $query = "SELECT about FROM pages WHERE id = 1";
        $result = $this->db->select($query);
        return $result;
    }

}
?>