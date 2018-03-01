<?php
/**
 * Created by 信磊.
 * Date: 2018/3/1 0001
 * Time: 下午 12:10
 */

namespace app\admin\controller;


class WechatApp extends Base
{
    public function index ()
    {
        $wxapps = M('wxapp_configs')->select();
        $this->assign('list', $wxapps);

        return $this->fetch();
    }
}