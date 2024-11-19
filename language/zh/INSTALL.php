<?php
// Translated into English by Yaro2709;
// All rights reserved from 2020;
// Company 1367.

//导航：
//{IDs_0001} 通用变量
//{IDs_0002} 介绍
//{IDs_0003} 更新
//{IDs_0004} 测试最低要求
//{IDs_0005} 连接到数据库
//{IDs_0006} 连接数据库的结果
//{IDs_0007} 数据库创建
//{IDs_0008} 创建账户
//{IDs_0009} 完成安装
//{IDs_0010} 安装总结
//{IDs_0011} 消息
//{IDs_0012} 轮播

//{IDs_0001} 通用变量
$LNG['game_name']                                    = 'New-Star';
$LNG['nav_lang']                                     = '语言';
$LNG['footer_up']                                    = '返回顶部';
$LNG['back']                                         = '返回';
$LNG['continue']                                     = '下一步';
$LNG['login']                                        = '登录到管理员面板';
$LNG['title_install']                                = '安装程序';
$LNG['previous']                                     = '';
$LNG['next']                                         = '';

//{IDs_0002} 介绍
$LNG['intro_install']                                = '安装';
$LNG['intro_welcome']                                = '欢迎来到 ' . $LNG['game_name'] . '！';
$LNG['intro_text']                                   = '' . $LNG['game_name'] . ' - 是一款基于2Moons v1.8的网页策略引擎。' . $LNG['game_name'] . ' 是目前最稳定和最具发展性的引擎。我们希望' . $LNG['game_name'] . '将超出您的期望。如果您有任何问题，请与我们联系。' . $LNG['game_name'] . '是一个开源项目，许可证为GNU GPL v3。在安装之前，将会进行一个小型的测试，以验证您的服务器是否符合最低要求。';

//{IDs_0003} 更新
$LNG['upgrade_title']                                = '更新';
$LNG['upgrade_header']                               = '数据库更新向导。';
$LNG['upgrade_text']                                 = '您已经安装了 ' . $LNG['game_name'] . '，只是想更新它吗？在这里，您可以通过几次点击更新旧的数据库！';
$LNG['upgrade_success']                              = '数据库已成功升级到版本 %s。';
$LNG['upgrade_nothingtodo']                          = '无需操作，数据库当前的版本状态为 %s。';
$LNG['upgrade_available']                            = '有可用的更新。数据库可以从当前版本 %s 升级到版本 %s。';
$LNG['upgrade_notavailable']                         = '数据库使用的是 %s 的最新版本。';

//{IDs_0004} 测试最低要求
$LNG['req_head']                                     = '所需模块';
$LNG['req_text']                                     = '在继续安装之前，' . $LNG['game_name'] . '将检查您的服务器配置文件是否符合' . $LNG['game_name'] . '所需的最低要求。请仔细阅读结果，完成所有验证后再继续安装。如果您希望使用以下列出的模块的任何功能，必须确保验证通过。';
$LNG['req_requirements']                             = '要求';
$LNG['req_status']                                   = '状态';
$LNG['reg_yes']                                      = '是';
$LNG['reg_no']                                       = '否';
$LNG['reg_writable']                                 = '(CHMOD 777)';
$LNG['reg_not_writable']                             = '没有写权限';
$LNG['reg_file']                                     = '文件 "%s" 是否可写？';
$LNG['reg_dir']                                      = '文件夹 "%s" 是否可写？';
$LNG['req_php_need']                                 = '安装的 "PHP" 版本';
$LNG['req_php_need_desc']                            = 'PHP是游戏的编写语言。' . $LNG['game_name'] . ' 使用 PHP v5.6-8.0 版本。';
$LNG['reg_gd_need']                                  = '安装的 "gdlib" 图形库版本';
$LNG['reg_gd_desc']                                  = ' "gdlib" 图形库负责动态生成图像。如果没有这个库，一些软件功能将无法使用。';
$LNG['reg_pdo_active']                               = '是否支持 "PDO" 扩展';
$LNG['reg_pdo_desc']                                 = '您必须在 PHP 中提供 PDO 支持。';
$LNG['reg_json_need']                                = '"JSON" 扩展是否可用？';
$LNG['reg_iniset_need']                              = 'PHP "ini_set" 函数是否启用？';
$LNG['reg_global_need']                              = '"register_globals" 参数是否禁用？';
$LNG['reg_global_desc']                              = '' . $LNG['game_name'] . ' 如果启用此选项会正常工作。但出于安全考虑，建议在 PHP 设置中禁用 register_globals。';

//{IDs_0005} 连接到数据库
$LNG['step1_head']                                   = '设置数据库访问';
$LNG['step1_text']                                   = '' . $LNG['game_name'] . ' 可以在您的服务器上安装，但您必须指定数据库访问设置。如果您不知道连接到数据库的访问设置，请从您的主机提供商处获取，或者联系' . $LNG['game_name'] . '的技术支持以进行咨询。输入数据时，请仔细检查后再继续。';
$LNG['step1_mysql_server']                           = '数据库服务器名称';
$LNG['step1_mysql_port']                             = '数据库服务器端口';
$LNG['step1_mysql_dbuser']                           = '数据库用户登录';
$LNG['step1_mysql_dbpass']                           = '数据库用户密码';
$LNG['step1_mysql_dbname']                           = '数据库名称';
$LNG['step1_mysql_prefix']                           = '表前缀';

//{IDs_0006} 连接数据库的结果
$LNG['step2_prefix_invalid']                         = '数据库前缀只能包含字母数字字符和下划线。';
$LNG['step2_db_no_dbname']                           = '没有指定数据库名称。';
$LNG['step2_db_too_long']                            = '指定的表前缀太长。最大长度为 36 个字符。';
$LNG['step2_db_con_fail']                            = '数据库连接失败。以下是详细信息。';
$LNG['step2_config_exists']                          = 'config.php 已经存在。';
$LNG['step2_conf_op_fail']                           = '没有为 config.php 设置写权限。';
$LNG['step2_db_done']                                = '数据库连接已建立。';

//{IDs_0007} 数据库创建
$LNG['step3_head']                                   = '创建数据库表';
$LNG['step3_text']                                   = '数据库表已创建并填充。继续下一步以完成 ' . $LNG['game_name'] . ' 的安装。';
$LNG['step3_db_error']                               = '未能在数据库中创建以下表：';

//{IDs_0008} 创建账户
$LNG['step4_head']                                     = '管理员账户';
$LNG['step4_text']                                     = '安装向导将为您创建一个管理员账户。请输入用户名、密码和电子邮件。';
$LNG['step4_admin_name']                             = '管理员用户名：';
$LNG['step4_admin_name_desc']                         = '请输入用户名，长度为 3 到 20 个字符';
$LNG['step4_admin_pass']                             = '管理员密码：';
$LNG['step4_admin_pass_desc']                         = '请输入密码，长度为 6 到 30 个字符';
$LNG['step4_admin_mail']                             = '联系电子邮件：';

//{IDs_0009} 完成安装
$LNG['step6_head']                                   = '恭喜！您已成功设置 ' . $LNG['game_name'] . ' :)';
$LNG['step6_text']                                   = '如果您点击下面的按钮，您将被重定向到管理员面板。请花些时间熟悉可用的设置。在使用游戏之前，请删除或重命名 "includes/ENABLE_INSTALL_TOOL" 文件。只要这个文件存在，您的游戏就有潜在的黑客风险！';
$LNG['step8_need_fields']                            = '您必须填写所有字段。';

//{IDs_0010} 安装总结
$LNG['sql_close_reason']                             = '服务器当前不可用';
$LNG['sql_welcome']                                  = '欢迎来到 ' . $LNG['game_name'] . ' v';

//{IDs_0011} 消息
$LNG['locked_upgrade']                               = '需要更新数据库！要启动更新过程，您必须在 "include" 文件夹中创建一个名为 "ENABLE_INSTALL_TOOL" 的文件。文件名必须大写。文件本身可以为空。';
$LNG['locked_install']                               = '安装程序已锁定！在 "includes" 文件夹中创建一个名为 "ENABLE_INSTALL_TOOL" 的文件。文件名必须大写。文件本身没有扩展名且可以为空。出于安全原因，强烈建议在安装完成后重命名或删除该文件。为了安全起见，您可以删除整个 install 文件夹。';

//{IDs_0012} 轮播
$LNG['carousel_project_head']                        = '项目。';
$LNG['carousel_project_text']                        = '该游戏基于 2Moons v1.8。我们通过重写超过 30% 进行了改进！';
$LNG['carousel_mods_head']                           = '修改。';
$LNG['carousel_mods_text']                           = '我们开发了超过 15 个新修改，并重写了超过 10 个！';
$LNG['carousel_design_head']                         = '响应式设计。';
$LNG['carousel_design_text']                         = '我们使用了著名的 Bootstrap 框架。';
$LNG['carousel_support_head']                        = '活跃支持。';
$LNG['carousel_support_text']                        = '支持基于 2Moons 论坛和 GitHub 项目。';
$LNG['carousel_version_info_head']                   = '有什么新东西？';
$LNG['carousel_version_info_text']                   = '当然有！但要了解详情，您需要安装游戏 :)';
