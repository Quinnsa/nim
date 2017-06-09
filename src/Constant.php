<?php
/**
 * Created by PhpStorm.
 * User: guoxiaoqiang
 * Date: 2017/6/8
 * Time: 下午4:20
 */

namespace nim;


class Constant
{
    const BASE_API  =   'https://api.netease.im/nimserver/';
    const USER_CREATE_ACTION = 'user/create.action';
    const USER_UPDATE_ACTION = 'user/update.action';
    const USER_TOKEN_REFRESH_ACTION = 'user/refreshToken.action';
    const USER_BLOCK_ACTION = 'user/block.action';
    const USER_UNBLOCK_ACTION = 'user/unblock.action';
    const USER_UPDATE_INFO_ACTION = 'user/updateUinfo.action';
    const USER_GET_INFO_ACTION = 'user/getUinfos.action';

    const MSG_SEND_ACTION = 'msg/sendMsg.action';
    const MSG_SEND_BATCH_MSG_ACTION = 'msg/sendBatchMsg.action';


    const TEAM_CREATE_ACTION = 'team/create.action';
    const TEAM_ADD_USER_ACTION = 'team/add.action';
    const TEAM_KICK_USER_ACTION = 'team/kick.action';
    const TEAM_REMOVE_ACTION = 'team/remove.action';
    const TEAM_UPDATE_ACTION = 'team/update.action';
    const TEAM_QUERY_ACTION = 'team/query.action'; //群信息与成员列表查询
    const TEAM_OWNER_CHANGE_ACTION = 'team/changeOwner.action';//移交群主
    const TEAM_ADD_MANAGER_ACTION = 'team/addManager.action';
    const TEAM_REMOVE_MANAGER_ACTION = 'team/removeManager.action';
    const TEAM_USER_JOINED_ACTION = 'team/joinTeams.action';
    const TEAM_UPDATE_NICKNAME_ACTION = 'team/updateTeamNick.action';
    const TEAM_MUTE_ACTION = 'team/muteTeam.action';
    const TEAM_MUTE_USER_ACTION = 'team/muteTlist.action';
    const TEAM_USER_LEAVE = 'team/leave.action';
    const TEAM_MUTE_ALL_ACTION = 'team/muteTlistAll.action';
    const TEAM_MUTE_LIST_ACTION = 'team/listTeamMute.action';



    const HTTP_GET = 'GET';
    const HTTP_POST = 'POST';
    const HTTP_DELETE = 'DELETE';
    const HTTP_PUT = 'PUT';

}