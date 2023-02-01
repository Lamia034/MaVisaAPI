<?php
        header("Access-Control-Allow-Origin:*");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods:*");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers");

class Posts extends Controller {
    public $postModel;
        public function __construct() {
            $this->postModel = $this->model('Post');
        }

        public function index(){}


        
              public function getVisas() {
                // Get all visas from the model
                // die("success");
            
                $visas = $this->postModel->getAllVisas();
                $respons = [] ;
                if($visas ){
                // Format the data as JSON
                // header('Content-Type: application/json');
                $respons = [
                  'visa' => $visas
                ];
                http_response_code(200);
                echo json_encode($respons);
        
              }else{
                $respons = [
                    'message' => "Failed"
                  ];
                  echo json_encode($respons);
              }
            }




}