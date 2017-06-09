<?php
/**
 * Created by PhpStorm.
 * User: guoxiaoqiang
 * Date: 2017/6/8
 * Time: 下午5:19
 */

namespace nim;


class TeamPayload
{

    private $api;


    function __construct($api)
    {
        $this->api = $api;
    }

    public function userJoined($data){
	$url = Constant::BASE_API.Constant::TEAM_USER_JOINED_ACTION;
	$result = Http::post($url,$data,$this->api->header);
	return $result;
    }

}
