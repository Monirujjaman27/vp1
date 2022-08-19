<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class PostClass
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
        $category = $this->fm->validation($req['category']);
        $category = mysqli_real_escape_string($this->db->link, $category);

        $permited  = array('jpg', 'jepg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div          = explode('.', $file_name);
        $file_ext     = strtolower(end($div));
        $unique_image = date('d-m-y') . '-' . time() . '.' . $file_ext;
        $upload_image = "upload/posts/" . $unique_image;
        if ($name == '' || $file == '') {
            $msg = 'Fild Must Not Be empty';
            return $msg;
        } elseif ($file_size > 1048567) {
            $msg = "Image size Should be less then 1MB";
            return $msg;
        } elseif (in_array($file_ext, $permited) === FALSE) {
            $msg = "You can upload only: " . implode(', ', $permited);
            return $msg;
        } else {
            move_uploaded_file($file_temp, $upload_image);
            $query = "INSERT INTO posts(name, price, offerprice, image, category, description) VALUES ('$name','$price','$offerprice','$upload_image','$category','$description')";
            $result = $this->db->insert($query);
            if ($result) {
                $name = '';
                $file = '';
                session::set('success', 'Post Create Successfully');
                // header("Location:service.php");
                echo "<script type='text/javascript'>window.location.href='post.php'</script>";
            } else {;
                session::set('warning', 'There Was Something Wrong to Update');
            }
        }
    }
    public function show()
    {
        $query = "SELECT * FROM posts order by id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function showLimit()
    {
        $query = "SELECT * FROM posts order by id DESC Limit 6";
        $result = $this->db->select($query);
        return $result;
    }
    public function update($req, $file, $id)
    {
        $name = $this->fm->validation($req['name']);
        $oldImage = $this->fm->validation($req['oldImage']);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $oldImage = mysqli_real_escape_string($this->db->link, $oldImage);
        $price = $this->fm->validation($req['price']);
        $price = mysqli_real_escape_string($this->db->link, $price);
        $offerprice = $this->fm->validation($req['offerprice']);
        $offerprice = mysqli_real_escape_string($this->db->link, $offerprice);
        $description = $this->fm->validation($req['description']);
        $description = mysqli_real_escape_string($this->db->link, $description);
        $category = $this->fm->validation($req['category']);
        $category = mysqli_real_escape_string($this->db->link, $category);

        $permited  = array('jpg', 'jepg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];
        $div          = explode('.', $file_name);
        $file_ext     = strtolower(end($div));
        $unique_image = date('d-m-y') . '-' . time() . '.' . $file_ext;
        $upload_image = "upload/posts/" . $unique_image;
        if (empty($file_name)) {
            if ($name == '') {
                $msg = 'Fild Must Not Be empty';
                return $msg;
            } else {
                $query = "UPDATE posts SET name = '$name', price= '$price', price= '$offerprice',offerprice= '$price',category= '$category',description= '$description', WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    session::set('success', 'Post Update Successfully');
                    header("Location:post.php");
                } else {
                    session::set('warning', 'There Was Something Wrong to Update');
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
                $query = "UPDATE posts SET name = '$name', image = '$upload_image' WHERE id = '$id'";
                $result = $this->db->update($query);
                if ($result) {
                    // header("Location:service.php");
                    echo "<script type='text/javascript'>window.location.href='service.php'</script>";

                    session::set('success', 'Food Update Successfully');
                } else {
                    session::set('warning', 'There Was Something Wrong to Update');
                }
            }
        }
    }

    public function showById($gatId)
    {
        $query = "SELECT * FROM posts WHERE id = '$gatId'";
        $result = $this->db->select($query);
        return $result;
    }

    public function del($gatId)

    {
        $database = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $quary = "SELECT * FROM posts where id = '$gatId'";
        $quaryData = mysqli_query($database, $quary);
        if (mysqli_num_rows($quaryData) > 0) {
            foreach ($quaryData as $item) {
                $queryImage = $item['image'];
                $delquery = "DELETE FROM posts WHERE id = '$gatId'";
                $deldata = $this->db->delete($delquery);
                if ($deldata) {
                    if (file_exists($queryImage)) {
                        unlink($queryImage);
                    }
                    session::set('success', 'Food Delete Successfully');
                } else {
                    session::set('warning', 'There Was Something Wrong to Update');
                }
            }
        }
    }
}
?>