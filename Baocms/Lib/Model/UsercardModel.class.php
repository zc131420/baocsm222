<?php

/*
 * 软件为合肥生活宝网络公司出品，未经授权许可不得使用！
 * 作者：baocms团队
 * 官网：www.taobao.com
 * 邮件: youge@baocms.com  QQ 800026911
 */

class UsercardModel extends CommonModel {

    protected $pk = 'card_id';
    protected $tableName = 'user_card';

    
    public function checkCard($code) {
        $code = (int) $code;
        return $this->find(array('where' => array('card_num' => $code)));
    }

}
