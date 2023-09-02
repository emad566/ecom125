<?php
namespace App\Http\Controllers\Traits;

trait ApiResponse{
    public function sendResponse($status=true, $data=[], $message='' , $errors=[], $code=200, $hashcode=200)
    {
        $response = [
            'status' =>  $status,
            'message' => $message,
            'data'    => $data,
            'errors' => $errors,
            'response_code' => $code,
            'hashcode' => $hashcode,
        ];

        return response()->json($response, $code);
    }

    public function sendServerError($msg='', $data=[], $th=false, $hashcode = 200)
    {
        $thStr = $th? $th->getMessage() :'';
        return $this->sendResponse(false, $data, 'Server Technical Error: '.$msg . " $thStr", $hashcode);
    }

    public function checkValidator($validator, $data=[], $hashcode = 200)
    {
        if($validator->fails()){
            $response = [
                'status' => false,
                'message' => 'Not Valid data',
                'data'    => $data,
                'errors'=>$validator->errors(),
                'response_code' => 200,
                'hashcode' => $hashcode,
            ];

            return response()->json($response, 200);
        }else return false;
    }
}
