<?php
/**
 * Created by PhpStorm.
 * User: guoxiaoqiang
 * Date: 2017/6/8
 * Time: 下午5:18
 */

namespace nim;


class UserPayload
{

    private $api;


    function __construct($api)
    {
        $this->api = $api;
    }

    /**
     * @param $accids 用户账号，json格式 最多查询200
     * @return json
     */
    public function getInfo($accids){
        $url = Constant::BASE_API.Constant::USER_GET_INFO_ACTION;
        $data['accids'] = $accids;
        $result = Http::post($url,$data,$this->api->header);
	    return $result;
    }


    /**
     * @param $data
     * @return string
     */
    public function updateInfo($data){
        $url = Constant::BASE_API.Constant::USER_UPDATE_INFO_ACTION;
        $result = Http::post($url,$data,$this->api->header);
        return $result;
    }

}