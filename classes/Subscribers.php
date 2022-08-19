<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class Subscribers
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
        $email = $this->fm->validation($req['email']);
        $email = mysqli_real_escape_string($this->db->link, $email);
        if ($email == '') session::set('subscribermessage-error', 'Enter Your Mail');
        $checkQuery = "SELECT * FROM subscribers WHERE email = '$email'";
        $checkEmail = $this->db->select($checkQuery);
        if ($checkEmail) {
            if (mysqli_num_rows($checkEmail)) return "<span class='text-warning'>This email is already being used</span>";
        }
        $query = "INSERT INTO subscribers(email) VALUES ('$email')";
        $result = $this->db->insert($query);
        if ($result) {
            return "<span class='text-success'>Subscribe Successfully</span>";
        } else {
            session::set('warning', 'There Was Something Wrong to Insert the Service');
        }
    }
    public function show()
    {
        $query = "SELECT * FROM subscribers order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function update($req, $file, $id)
    {
    }

    public function showById($gatId)
    {
        $query = "SELECT * FROM sliders WHERE id = '$gatId'";
        $result = $this->db->select($query);
        return $result;
    }
    public function del($gatId)
    {
        $database = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $quary = "SELECT * FROM subscribers where id = '$gatId'";
        $quaryData = mysqli_query($database, $quary);
        if (mysqli_num_rows($quaryData) > 0) {
            foreach ($quaryData as $item) {
                $queryImage = $item['image'];
                $delquery = "DELETE FROM subscribers WHERE id = '$gatId'";
                $deldata = $this->db->delete($delquery);
                if ($deldata) {
                    if (file_exists($queryImage)) {
                        unlink($queryImage);
                    }
                    // header("Location:subscribers.php");
                echo "<script type='text/javascript'>window.location.href='subscribers.php'</script>";
                    session::set('success', 'subscribers Delete Successfully');
                } else {
                    $msg = '<p class="mb-0 text-warning">There Was Something Wrong to Delete</p>';
                    return $msg;
                }
            }
        }
    }
}
?>