<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../halpers/formet.php');
?>
<?php
class defaultSettings
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function updateDefaults($data, $file)
    {
        // var_dump();

        $title   = $this->fm->validation($data['title']);
        $address   = $this->fm->validation($data['address']);
        $about    = $this->fm->validation($data['about']);
        $phone = $this->fm->validation($data['phone']);
        $email    = $this->fm->validation($data['email']);
        $google   = $this->fm->validation($data['google']);
        $fb    = $this->fm->validation($data['fb']);
        $twitter    = $this->fm->validation($data['twitter']);
        $youtube    = $this->fm->validation($data['youtube']);
        $instagram    = $this->fm->validation($data['instagram']);
        $copyright    = $this->fm->validation($data['copyright']);
        $linkedin    = $this->fm->validation($data['linkedin']);
        $fb_page    = $this->fm->validation($data['fb_page']);
        $old_logo    = $this->fm->validation($data['old_logo']);

        $title   = mysqli_real_escape_string($this->db->link, $title);
        $address   = mysqli_real_escape_string($this->db->link, $address);
        $phone = mysqli_real_escape_string($this->db->link, $phone);
        $email    = mysqli_real_escape_string($this->db->link, $email);
        $google   = mysqli_real_escape_string($this->db->link, $google);
        $fb    = mysqli_real_escape_string($this->db->link, $fb);
        $twitter    = mysqli_real_escape_string($this->db->link, $twitter);
        $about    = mysqli_real_escape_string($this->db->link, $about);
        $youtube    = mysqli_real_escape_string($this->db->link, $youtube);
        $instagram    = mysqli_real_escape_string($this->db->link, $instagram);
        $copyright    = mysqli_real_escape_string($this->db->link, $copyright);
        $copyright    = mysqli_real_escape_string($this->db->link, $copyright);
        $linkedin    = mysqli_real_escape_string($this->db->link, $linkedin);
        $fb_page    = mysqli_real_escape_string($this->db->link, $fb_page);
        $old_logo    = mysqli_real_escape_string($this->db->link, $old_logo);

        if ($title == '' || $address == '' || $phone == '' || $email == '' || $google == '' || $fb == '' || $twitter == '' || $about == '' || $instagram == '' || $copyright == '') {
            $msg = 'All Filed is Required';
            return $msg;
        } else {
            $upload_logo = $old_logo;
            if (isset($file['logo']) && $file['logo']['name'] !== '') {
                // var_dump($file['logo']);
                $permited  = array('jpg', 'jepg', 'png', 'gif');
                $file_name = $file['logo']['name'];
                $file_size = $file['logo']['size'];
                $file_temp = $file['logo']['tmp_name'];
                $div          = explode('.', $file_name);
                $file_ext     = strtolower(end($div));
                $unique_image = date('d-m-y') . '-' . time() . '.' . $file_ext;
                $upload_logo = "upload/logo/" . $unique_image;
                if ($file_size > 1048567) {
                    $msg = "Image size Should be less then 1MB";
                    return $msg;
                } elseif (in_array($file_ext, $permited) === FALSE) {
                    $msg = "You can upload only: " . implode(', ', $permited);
                    return $msg;
                } else {

                    if (!file_exists($upload_logo)) {
                        // mkdir("upload/logo", 0775, true);
                        // chmod('upload/logo', 0777);
                        // sudo chmod 777 "";
                    }
                    move_uploaded_file($file_temp, $upload_logo);
                }
            }

            $query = "UPDATE default_setting SET 
            title = '$title', 
            address = '$address',
            phone = '$phone',
            email = '$email',
            google = '$google',
            fb = '$fb',
            twitter = '$twitter',
            about = '$about',
            youtube = '$youtube',
            instagram = '$instagram',
            copyright = '$copyright',
            linkedin = '$linkedin',
            logo = '$upload_logo',
            fb_page = '$fb_page'
            where id = 1";
            $result = $this->db->update($query);
            if ($result) {
                $title = '';
                $address = '';
                $phone = '';
                $email = '';
                $google = '';
                $fb = '';
                $twitter = '';
                $instagram = '';
                $about = '';
                echo '<script type="text/javascript">toastr.success(`Update Successfully`)</script>';
                // session::set('success', 'Update Successfully');
            } else {
                echo '<script type="text/javascript">toastr.error(`There Was Something Wrong`)</script>';
                // session::set('warning', 'There Was Something Wrong');
            }
        }
    }

    public function showById($id)
    {
        $query = "SELECT * FROM default_setting LIMIT 1";
        $result = $this->db->select($query);
        return $result;
    }
}
?>