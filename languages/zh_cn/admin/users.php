<?php

/**
 * ECSHOP 会员账号管理语言文件
 * ============================================================================
 * 版权所有 (C) 2005-2006 康盛创想（北京）科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * 这是一个免费开源的软件；这意味着您可以在不用于商业目的的前提下对程序代码
 * 进行修改、使用和再发布。
 * ============================================================================
 * $Author: fenghl $
 * $Date: 2007-12-07 10:46:27 +0800 (星期五, 07 十二月 2007) $
 * $Id: users.php 13825 2007-12-07 02:46:27Z fenghl $
*/
/* 列表页面 */
$_LANG['label_user_name'] = '会员名称';
$_LANG['label_pay_points_gt'] = '会员积分大于';
$_LANG['label_pay_points_lt'] = '会员积分小于';
$_LANG['label_rank_name'] = '会员等级';
$_LANG['all_option'] = '所有等级';

$_LANG['view_order'] = '查看订单';
$_LANG['view_deposit'] = '查看账目明细';
$_LANG['username'] = '会员名称';
$_LANG['email'] = '邮件地址';
$_LANG['reg_date'] = '注册日期';
$_LANG['button_remove'] = '删除会员';
$_LANG['users_edit'] = '编辑会员账号';
$_LANG['goto_list'] = '返回会员账号列表';
$_LANG['username_empty'] = '会员名称不能为空！';

/* 表单相关语言项 */
$_LANG['password'] = '登录密码';
$_LANG['confirm_password'] = '确认密码';
$_LANG['question'] = '密码提示问题';
$_LANG['answer'] = '密码提示问题答案';
$_LANG['gender'] = '性别';
$_LANG['birthday'] = '出生日期';
$_LANG['sex'][0] = '保密';
$_LANG['sex'][1] = '男';
$_LANG['sex'][2] = '女';
$_LANG['pay_points'] = '消费积分';
$_LANG['rank_points'] = '等级积分';
$_LANG['user_money'] = '可用资金';
$_LANG['frozen_money'] = '冻结资金';
$_LANG['credit_line'] = '信用额度';
$_LANG['user_rank'] = '会员等级';
$_LANG['not_special_rank'] = '非特殊等级';
$_LANG['view_detail_account'] = '查看明细';
$_LANG['parent_user'] = '推荐人';
$_LANG['parent_remove'] = '脱离推荐关系';

$_LANG['msn'] = 'MSN';
$_LANG['qq'] = 'QQ';
$_LANG['home_phone'] = '家庭电话';
$_LANG['office_phone'] = '办公电话';
$_LANG['mobile_phone'] = '手机';

$_LANG['notice_pay_points'] = '消费积分是一种站内货币，允许用户在购物时支付一定比例的积分。';
$_LANG['notice_rank_points'] = '等级积分是一种累计的积分，系统根据该积分来判定用户的会员等级。';
$_LANG['notice_user_money'] = '用户在站内预留下的金额';

/* 提示信息 */
$_LANG['username_exists'] = '已经存在一个相同的用户名。';
$_LANG['email_exists'] = '该邮件地址已经存在。';
$_LANG['edit_user_failed'] = '修改会员资料失败。';
$_LANG['invalid_email'] = '输入了非法的邮件地址。';
$_LANG['update_success'] = '编辑用户信息已经成功。';
$_LANG['remove_confirm'] = '您确定要删除该会员账号吗？';
$_LANG['remove_order_confirm'] = '该会员账号已经有订单存在，删除该会员账号的同时将清除订单数据。<br />您确定要删除吗？';
$_LANG['remove_order'] = '是，我确定要删除会员账号及其订单数据';
$_LANG['remove_cancel'] = '不，我不想删除该会员账号了。';
$_LANG['remove_success'] = '会员账号 %s 已经删除成功。';
$_LANG['add_success'] = '会员账号 %s 已经添加成功。';
$_LANG['batch_remove_success'] = '已经成功删除了 %d 个会员账号。';
$_LANG['no_select_user'] = '您现在没有需要删除的会员！';
$_LANG['register_points'] = '注册送积分';

/* 地址列表 */
$_LANG['address_list'] = '收货地址';
$_LANG['consignee'] = '收货人';
$_LANG['address'] = '地址';
$_LANG['link'] = '联系方式';
$_LANG['other'] = '其他';
$_LANG['tel'] = '电话';
$_LANG['mobile'] = '手机';
$_LANG['best_time'] = '最佳送货时间';
$_LANG['sign_building'] = '标志建筑';

/* JS 语言项 */
$_LANG['js_languages']['no_username'] = '没有输入用户名。';
$_LANG['js_languages']['invalid_email'] = '没有输入邮件地址或者输入了一个无效的邮件地址。';
$_LANG['js_languages']['no_password'] = '没有输入登录密码。';
$_LANG['js_languages']['no_confirm_password'] = '没有输入确认密码。';
$_LANG['js_languages']['password_not_same'] = '输入的密码和确认密码不一致。';
$_LANG['js_languages']['invalid_pay_points'] = '消费积分数不是一个整数。';
$_LANG['js_languages']['invalid_rank_points'] = '等级积分数不是一个整数。';
?>
