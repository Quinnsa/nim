<?php
/**
 * Created by PhpStorm.
 * User: guoxiaoqiang
 * Date: 2017/6/8
 * Time: 下午4:19
 */

namespace nim;

class Api
{

    private $appKey;
    private $appSecret;
    private $nonce;
    private $curTime;
    private $checkSum;
    public  $header;

    public function __construct($appKey,$appSecret)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->makeCheckSum();
	$this->makeRequestHeader();
    }

    public function makeCheckSum(){
        $this->nonce = rand(0,1000000);
        $this->curTime = time();
        $this->checkSum = sha1($this->appSecret.$this->nonce.$this->curTime);
    }

    public function makeRequestHeader(){
        $this->header = array(
            'Content-Type: application/x-www-form-urlencoded;charset=utf-8',
            "AppKey: ".$this->appKey,
            "Nonce: ".$this->nonce,
            "CurTime: ".$this->curTime,
            "CheckSum: ".$this->checkSum,
            'Expect:'
        );
    }


    public function user(){
        return new UserPayload($this);
    }

    public function msg(){
        return new MsgPayload($this);
    }

    public function team(){
        return new TeamPayload($this);
    }


}
