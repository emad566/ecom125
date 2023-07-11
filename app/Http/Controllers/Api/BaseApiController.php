<?php


namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;


class BaseApiController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

     public function sendResponse($status=true, $data=[], $message='' , $errors=[], $code=200)
     {
        $response = [
            'status' =>  $status,
            'message' => $message,
            'data'    => $data,
            'errors' => $errors,
            'response_code' => $code,
        ];

        return response()->json($response, $code);
    }

    public function sendServerError($msg='', $data=[], $th=false)
    {
        $thStr = $th? $th->getMessage() :'';
        return $this->sendResponse(false, $data, 'Server Technical Error: '.$msg . " $thStr");
    }

    public function checkValidator($validator, $data=[])
    {
        if($validator->fails()){
            $response = [
                'status' => false,
                'message' => 'Not Valid data',
                'data'    => $data,
                'errors'=>$validator->errors(),
                'response_code' => 200,
            ];

            return response()->json($response, 200);
        }else return false;
    }

}
