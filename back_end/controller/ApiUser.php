<?php

class ApiUser
{

    public function __construct(){

    }
    public function index()
    {
        // header('Location:')
        echo ("it should be redirected to the home page");
    }

    public function getUserInfos($id)
    {
        // headers

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User object
        $user = new Users($db);

        // user informations
        $user_array = array();

        // get user id
        $user->userId = $id;

        // user read query
        $result = $user->read_single();

        if ($result) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            extract($row);


            $user_array = array(
                'userId' => $userId,
                'userFirstName' => $userFirstName,
                'userLastName' => $userLastName,
                'userCIN' => $userCIN,
                'userEmail' => $userEmail,
                'Reference' => $Reference
            );

            echo json_encode(
                array($user_array)
            );
        } else {
            echo json_encode(
                array('message' => 'user not inserted')
            );
        }
    }


    public function read()
    {

        // headers

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User object
        $user = new Users($db);

        // user read query
        $result = $user->read();

        // get row count 
        $num = $result->rowCount();

        // check if there is a user 
        if ($num > 0) {
            // user array
            $users_arr = array();
            $users_arr['data'] = array();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $user_arr = array(
                    'userId' => $userId,
                    'userFirstName' => $userFirstName,
                    'userLastName' => $userLastName,
                    'userEmail' => $userEmail,
                    'userCIN' => $userCIN
                );
                array_push($users_arr['data'], $user_arr);
            }
            // Turn to JSON & output
            echo json_encode($users_arr);
        } else {
            // No Users
            echo json_encode
            (
                array('message' => 'No Users found')
            );
        }
    }
    public function sign_up(){

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User object
        $user = new Users($db);

        // get raw posted data
        $data = json_decode(file_get_contents("php://input"));

        $user->email = $data->email;
        $user->password = $data->password;

        $user->firstName = $data->firstName;
        $user->lastName = $data->lastName;
        $user->cin = $data->cin;
        $user->gender = $data->gender;
        $user->job = $data->job;
        $user->phoneNumber = $data->phoneNumber;
        $user->address = $data->address;

        $u_arr = array();
        if ($user->create()) {   
        $u_arr = array(
        'message' => 'user iserted',
        'state' => true);
    
        echo json_encode($u_arr);
    
        } else {
    
        $u_arr = array('message' => 'user not iserted',
            'state' => false);

        echo json_encode($u_arr);
        
            }

    }

    public function sign_in(){

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User object
        $user = new Users($db);

        // get raw posted data
        $data = json_decode(file_get_contents("php://input"));

        $user->email = $data->email;
        $user->password = $data->password;

        $result = $user->login_check();

        if ($result){
            
            extract($result);
            $u = array( 'user_id' => $id,
                        'firstName' => $firstName,
                        'lastName' => $lastName,
                        'email' => $email,
                        'status' => true);

            echo json_encode($u);

        }else {

            $u = array('message' => "email or password incorrect",
                        'status' => false);

            echo json_encode($u);

        }
    }

    public function create()
    {

        // headers
        

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User object
        $user = new Users($db);

        // get raw posted data
        $data = json_decode(file_get_contents("php://input"));

        if(!empty($data->userFirstName) && !empty($data->userLastName) && !empty($data->userCIN) && !empty($data->userEmail) ){

            $user->email = $data->email;
            $user->password = $data->password;
            $user->role = $data->role;

            $user->firstName = $data->firstName;
            $user->lastName = $data->lastName;
            $user->birthdate = $data->birthdate;
            $user->cin = $data->cin;
            $user->gender = $data->gender;
            $user->job = $data->job;
            $user->phoneNumber = $data->phoneNumber;
            $user->address = $data->address;
            
            /* $user->userPassword = $data->userPassword; */
    
            // split string
            $arr1 = str_split($data->userFirstName, 2);
            $arr2 = str_split($data->userLastName, 2);
            $arr3 = str_split($data->userCIN, 2);
    
            //Generate a random string.
            $token = openssl_random_pseudo_bytes(10);
    
            //Convert the binary data into hexadecimal representation.
            $token = bin2hex($token);
    
            // generate custom token
            $user->Reference = $arr1[0] . $arr2[0] . $arr3[0] . $token;
    
            $u_arr = array();
            if ($user->create()) {
    
                $u_arr = array(
                'message' => 'user iserted',
                'state' => true);
    
                echo json_encode($u_arr);
    
            } else {
    
                $u_arr = array('message' => 'user not iserted',
                'state' => false);
    
                echo json_encode($u_arr);
            }

        }else{
            $msg = array('message' => 'please fill all the fields');
            echo json_encode($msg);
        }
        
    }

    public function checkUser()
    {
        // headers

        // instantiate Database
        $database = new Database();
        $db = $database->connect();

        // instantiate User Object
        $user = new Users($db);

        // get raw posted data
        $data = json_decode(file_get_contents("php://input"));

        $user->Reference = $data->Reference;
        // check if the token is valid or not 
        $userInfo = $user->checkUserExistence();
        
        // get the resuslt as [$userInfo]
        
        if ($userInfo != false) {
            
            $u = array('userInfo' => $userInfo,
                        'status' => true);

            echo json_encode($u);
        } else {

            $u = array('message' => "there's no id",
                        'status' => false);

            echo json_encode($u);
        }
    }
}
