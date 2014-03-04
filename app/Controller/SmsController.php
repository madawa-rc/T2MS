<?php
App::uses('AppController', 'Controller');



class SmsController extends AppController{


	public function index() {
		$this->loadModel('Customer');
		if($this->request->is('get')&&$this->request->query!=null){
            //$this->Customer->create();
            /*$data = array("Customer"=>array("phone" => $this->request->data['Sms']['phone'], "name" => $this->request->data['Sms']['text'],
            "blacklisted"=>0,"maxFare" => 60));*/


            /*if ($this->Customer->save($data)) {

                $this->Session->setFlash(__('The SMS has been processed.'));
                $this->request->query=null;
                //return $this->redirect(array('action' => 'index','query'=>array()));
            } else {
                $this->Session->setFlash(__( 'The SMS could not be processed. Please, try again.'));
            }*/
            echo(json_encode($this->request->query));

            $phone = $this->request->query['phone'];
            $message = $this->request->query['text'];

            $this->decodeSms($message,$phone);
        }


	}

    /**
     * Decoding the sms message from the pre-defined message format
     * @param $message
     * @param $phone
     */
    private function decodeSms($message, $phone){
        $maxFair = null;
        $tripMessage = null;
        $regMessage = null;

        if(strpos($message,'FARE') !== false){
            $tokenized = explode('FARE',$message,2);
            $maxFair = $tokenized[1];
        }
        if(strpos($message,'TRIP') !== false){
            $tokenized = explode('TRIP',$tokenized[0],2);
            $tripMessage = $tokenized[1];
        }
        if(strpos($message,'REG') !== false)
            $regMessage = $tokenized[0];

        echo($maxFair.'<br>'.$tripMessage.'<br>'.$regMessage);
    }

    private function createCustomer($regMessage, $phone){

    }

    private function tripHandler($tripMessage, $maxFair, $phone){
        
    }
}

?>