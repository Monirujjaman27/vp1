<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class Pakages
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function add($req, $file)
    {
        $name = $this->fm->validation($req['name']);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $price = $this->fm->validation($req['price']);
        $price = mysqli_real_escape_string($this->db->link, $price);
        $offerprice = $this->fm->validation($req['offerprice']);
        $offerprice = mysqli_real_escape_string($this->db->link, $offerprice);
        $description = $this->fm->validation($req['description']);
        $description = mysqli_real_escape_string($this->db->link, $description);
        $rating = $this->fm->validation($req['rating']);
        $rating = mysqli_real_escape_string($this->db->link, $rating);

        $permited  = array('jpg', 'jepg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div          = explode('.', $file_name);
        $file_ext     = strtolower(end($div));
        $unique_image = date('d-m-y') . '-' . time() . '.' . $file_ext;
        $upload_image = "upload/pakages/" . $unique_image;
        if ($name == '' || $file == '') {
            $msg = 'Fild Must Not Be empty';
            return $msg;
        } elseif ($file_size > 1048567) {
            $msg = "Image size Should be less then 1MB";
            return $msg;
        } elseif ($file !== '' && in_array($file_ext, $permited) === FALSE) {
            $msg = "You can upload only: " . implode(', ', $permited);
            return $msg;
        } else {
            move_uploaded_file($file_temp, $upload_image);
            $query = "INSERT INTO pakages(name, price, offerprice, description, image, rating) VALUES ('$name','$price','$offerprice','$description','$upload_image', '$rating')";
            $result = $this->db->insert($query);
            if ($result) {
                session::set('success', 'pakages Create Successfully');
                $name = '';
                $file = '';
                echo "<script type='text/javascript'>window.location.href='pakages.php'</script>";
                // header("Location:pakages.php");
            } else {
                session::set('warning', 'There Was Something Wrong to Insert the Service');
            }
        }
    }
    public function showLimit()
    {
        $query = "SELECT * FROM pakages order by id DESC Limit 6";
        $result = $this->db->select($query);
        return $result;
    }
    public function show()
    {
        $query = "SELECT * FROM pakages order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function update($req, $file, $id)
    {
        $name = $this->fm->validation($req['name']);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $price = $this->fm->validation($req['price']);
        $price = mysqli_real_escape_string($this->db->link, $price);
        $offerprice = $this->fm->validation($req['offerprice']);
        $offerprice = mysqli_real_escape_string($this->db->link, $offerprice);
        $description = $this->fm->validation($req['description']);
        $description = mysqli_real_escape_string($this->db->link, $description);
        $rating = $this->fm->validation($req['rating']);
        $rating = mysqli_real_escape_string($this->db->link, $rating);

        $oldImage = $this->fm->validation($req['oldImage']);
        $oldImage = mysqli_real_escape_string($this->db->link, $oldImage);

        $permited  = array('jpg', 'jepg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];
        $div          = explode('.', $file_name);
        $file_ext     = strtolower(end($div));
        $unique_image = date('d-m-y') . '-' . time() . '.' . $file_ext;
        $upload_image = "upload/pakages/" . $unique_image;
        if (empty($file_name)) {
            if ($name == '') {
                $msg = 'Fild Must Not Be empty';
                return $msg;
            } else {
                $query = "UPDATE pakages SET name = '$name', price = '$price', offerprice = '$offerprice', description = '$description', rating = '$rating' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    // header("Location:pakages.php");
                    echo "<script type='text/javascript'>window.location.href='pakages.php'</script>";
                    session::set('success', 'Update Successfully');
                } else {
                    session::set('warning', 'There Was Something Wrong to update');
                }
            }
        } else {
            if ($file_size > 1048567) {
                $msg = "Image size Should be less then 1MB";
                return $msg;
            } elseif (in_array($file_ext, $permited) === FALSE) {
                $msg = "You can upload only: " . implode(', ', $permited);
                return $msg;
            } else {
                move_uploaded_file($file_temp, $upload_image);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
                $query = "UPDATE pakages SET name = '$name', price = '$price', offerprice = '$offerprice', description = '$description', image = '$upload_image', rating = '$rating' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    echo "<script type='text/javascript'>window.location.href='pakages.php'</script>";
                    // header("Location:pakages.php");
                    session::set('success', 'pakages Update Successfully');
                } else {
                    session::set('warning', 'There Was Something Wrong to Update');
                }
            }
        }
    }

    public function showById($gatId)
    {
        $query = "SELECT * FROM pakages WHERE id = '$gatId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function del($gatId)

    {
        $database = mysqli_connect('localhost', 'root', '', 'p1');
        $quary = "SELECT * FROM pakages where id = '$gatId'";
        $quaryData = mysqli_query($database, $quary);
        if (mysqli_num_rows($quaryData) > 0) {
            foreach ($quaryData as $item) {
                $queryImage = $item['image'];
                $delquery = "DELETE FROM pakages WHERE id = '$gatId'";
                $deldata = $this->db->delete($delquery);
                if ($deldata) {
                    if (file_exists($queryImage)) {
                        unlink($queryImage);
                    }
                    // header("Location:pakages.php");
                    echo "<script type='text/javascript'>window.location.href='pakages.php'</script>";
                    session::set('success', 'pakages Delete Successfully');
                } else {
                    $msg = '<p class="mb-0 text-warning">There Was Something Wrong to Delete</p>';
                    return $msg;
                }
            }
        }
    }
}
?>