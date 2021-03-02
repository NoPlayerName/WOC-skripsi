<?php
class Auth extends Controller
{
    private $db;

    public function __construct()
    {
        // code...
        $this->db = new Database;
    }

    public function index()
    {
        $username = @$_POST['username'];

        if (empty($username)) {
            # code...
            $data['title'] = "Login";
            $this->view('templates/header2', $data);
            $this->view('auth/login');
            $this->view('templates/footer2');
        } else {

            $this->login();
        }
    }

    public function login()
    {
        // session_start();

        $username = @$_POST['username'];
        $password = base64_encode($_POST['password']);
        // $password = password_hash(@$_POST['password'], PASSWORD_DEFAULT);

        $query = "SELECT * FROM user WHERE username= '$username' AND password= '$password' ";
        $this->db->query($query);

        if ($data2 = $this->db->single($query)) {

            if ($data2['role'] == "Admin") {
                $_SESSION["username"] =  $data2["username"];
                $_SESSION["role"] = $data2["role"];
                $_SESSION["id"] = $data2["id"];
                $data['osm'] = array();
                $data['osm2'] = array();
                $this->view('templates/header');
                $this->view('pencarian/index', $data);
                $this->view('templates/footer');
            } else {
                // var_dump($data);
                // die;
                $_SESSION['username'] =  $data2['username'];
                $_SESSION["role"] =  $data2["role"];
                $_SESSION["id"] = $data2["id"];
                $data['osm'] = array();
                $data['osm2'] = array();
                $this->view('templates/header_user');
                $this->view('pencarian/index', $data);
                $this->view('templates/footer');
            }
        } else {

            Flasher::setFlash('Username', 'Password', 'danger');
            header('Location: ' . BASEURL . '/auth');
            exit;
        }
    }


    public function register()
    {

        $data['title'] = "Form registrasi";
        $this->view('templates/header2', $data);
        $this->view('auth/register');
        $this->view('templates/footer2');
    }

    public function logout()
    {

        unset($_SESSION["username"]);
        header('location: ' . BASEURL . '/auth/');
    }
}
