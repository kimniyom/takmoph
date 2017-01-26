<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class photo extends CI_Controller {
    /*
     *  Creart Code By kimniyom
     *  Date 27/05/2556 | Time 22.26.00 
     * 
     */
    public function __construct() {
        parent::__construct();
            $this->load->model('takmoph_model','tak');
            $this->load->model('upload_model','upload');
            $this->load->helper('url');
            $this->load->library('session');   
    }

    public function output($deta = '',$page = '',$head = ''){
        $data['detail'] = $deta;
        $data['page'] = $page;
        $data['head'] = $head;

        $this->load->view('template',$data);
    }


    public function from_show_album(){
        $head = "อัลบั้มภาพทั้งหมด";
        $page = "web_page/from_show_album";
        $data['album'] = $this->upload->get_album_all();

        $this->output($data,$page,$head);
    }
   
    public function show_gallery($AlbumID = ''){
        $head = "";
        $page = "web_page/from_show_gallery";
        $data['album'] = $this->upload->get_album($AlbumID);
        $data['gallery'] = $this->upload->get_gallery($AlbumID);

        $this->output($data,$page,$head);
    }

    public function from_upload_gallery($AlbumID = ''){
        $head = "อัพโหลดรูปภาพ";
        $page = "photo/upload_gallery";
        $data['AlbumID'] = $AlbumID;

        $this->output($data,$page,$head);
    }

    public function upload_gallery($AlbumID = ''){
        $targetFolder = 'album/gallery'; // Relative to the root
        $toDatabase = true;
            if (!empty($_FILES)) {

            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $targetFolder;
            $targetFile = $targetFolder . '/' . $_FILES['Filedata']['name'];
            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            $GalleryShot = $_FILES['Filedata']['name'];
            if (in_array($fileParts['extension'], $fileTypes)) {
                $file_string = addslashes(fread(fopen($thefile[tmp_name], "r"), $thefile[size]));

                $data = array(
                                'AlbumID' => $AlbumID,
                                'GalleryName' => "0",
                                'GalleryShot' => $GalleryShot
                            );
                $this->db->insert('gallery',$data);
                //$query="INSERT INTO gallery (AlbumID,GalleryShot) VALUES ('$AlbumID','".$_FILES['Filedata']['name']."')";
                //$result = mysql_query($query);
                //mysql_free_result($result);
                move_uploaded_file($tempFile,$targetFile);
                echo '1';
            } else {
                echo 'Invalid file type.';
            }
        }
    }

    
   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */