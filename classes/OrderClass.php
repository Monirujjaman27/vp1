<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class OrderClass
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
        $pakage_name = $this->fm->validation($req['pakage_name']);
        $pakage_name = mysqli_real_escape_string($this->db->link, $pakage_name);
        $name = $this->fm->validation($req['name']);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $phone = $this->fm->validation($req['phone']);
        $phone = mysqli_real_escape_string($this->db->link, $phone);
        $email = $this->fm->validation($req['email']);
        $email = mysqli_real_escape_string($this->db->link, $email);
        $price = $this->fm->validation($req['price']);
        $price = mysqli_real_escape_string($this->db->link, $price);
        $offerprice = $this->fm->validation($req['offerprice']);
        $offerprice = mysqli_real_escape_string($this->db->link, $offerprice);
        $requirements = $this->fm->validation($req['requirements']);
        $requirements = mysqli_real_escape_string($this->db->link, $requirements);
        $date = $this->fm->validation($req['date']);
        $date = mysqli_real_escape_string($this->db->link, $date);

        $query = "INSERT INTO orders(name, pakage_name, price, offerprice, email, phone, date, requirements) VALUES ('$name','$pakage_name','$price','$offerprice','$email','$phone', '$date','$requirements')";
        $result = $this->db->insert($query);
        if ($result) {
            return '<p class="mb-0 alert alert-success">Booking Successfully</p>';
        } else {
            session::set('warning', 'There Was Something Wrong to Insert the Service');
        }
    }
    public function show()
    {
        $query = "SELECT * FROM orders order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function showById($gatId)
    {
        $query = "SELECT * FROM orders WHERE id = '$gatId'";
        $result = $this->db->select($query);
        return $result;
    }
    public function ChangeStatus($id, $status)
    {
        if ($status == 1) {
            $query = "UPDATE orders SET status = 0 WHERE id = '$id'";
            $result = $this->db->update($query);
            if ($result) {
                session::set('success', 'Status Chagne Successfully');
            } else {
                session::set('warning', 'There Was Something Wrong to Insert the Service');
            }
        } else {
            $query = "UPDATE orders SET status = 1 WHERE id = '$id'";
            $result = $this->db->update($query);
            if ($result) {
                session::set('success', 'Status Chagne Successfully');
            } else {
                session::set('warning', 'There Was Something Wrong to Insert the Service');
            }
        }
    }

    public function del($gatId)

    {
        $database = mysqli_connect('localhost', 'root', '', 'p1');
        $quary = "SELECT * FROM orders where id = '$gatId'";
        $quaryData = mysqli_query($database, $quary);
        if (mysqli_num_rows($quaryData) > 0) {
            foreach ($quaryData as $item) {
                $queryImage = $item['image'];
                $delquery = "DELETE FROM orders WHERE id = '$gatId'";
                $deldata = $this->db->delete($delquery);
                if ($deldata) {
                    if (file_exists($queryImage)) {
                        unlink($queryImage);
                    }
                    header("Location:orders.php");
                    session::set('success', 'Delete Successfully');
                } else {
                    $msg = '<p class="mb-0 text-warning">There Was Something Wrong to Delete</p>';
                    return $msg;
                }
            }
        }
    }
}
?>