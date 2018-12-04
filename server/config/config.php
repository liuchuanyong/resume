<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 常用设置
// +----------------------------------------------------------------------
// $basePath=json_decode(file_get_contents(dirname(Env::get('ROOT_PATH')).'/config.json'),true);
return [
    'mail' => [
        'host' => 'md-hk-3.webhostbox.net',
        'smtpauth' => TRUE,
        'username' => 'smtp@kooa.ai',
        'from' => 'smtp@kooa.ai',
        'fromname' => 'sales.kooa.ai',
        'password' => 'i&mVKH6FT2pc',//邮箱授权码
        'charset' => 'utf-8',
        'ishtml' => TRUE,
        'port'=>465,
        'smtpsecure'=>'ssl',
        'smtpdebug'=>4,
    ],
    'sendMessage'=>[
        'accessKeyId'=>'LTAI3NfY6JVzdFI7',
        'accessKeySecret'=>'uyAiiBCMMBAyDmkjo59TZOXhrhHNHP',
        'signName'=>'魔方科技',
        'templateCode'=>'SMS_137865176',
    ],
    'level' => 1,
    //推广会员层级
    'api_token' => 'GbwS8JFxJfW3uj86S',

    'redis'=>[
        'host'=>'127.0.0.1',
        'port'=>'6379',
        'author'=>'',
        'db_index'=>0,
    ],
    // 'api_key' => $basePath['api_key']
    'resume_title' => [
        '基本资料' => 'basicData',
        '求职意向'  =>  'jobIntention',
        '工作经历'  =>  'workExperience',
        '工作经验'  =>  'workExperience',
        '教育经历'  =>  'educationalBackground',
        '教育背景'  =>  'educationalBackground',
        '项目经验'  =>  'projectExperience',
        '项目经历'  =>  'projectExperience',
        '简历内容'  =>  'projectExperience',
        '自我评价'  =>  'selfEvaluation',
        '技能特长'  =>  'skillExpertise',
        '专业技能'  =>  'skillExpertise',
        '技能专长'  =>  'skillExpertise',
        '目前状况'  =>  'nowStatus',
    ],

    'basicData' => [
        'sex' => "/(男|女)/",
        'age' => "/\d{2}岁/",
        'phone' => "/0?(13|14|15|17|18|19)[0-9]{9}/",
        'email' => "/\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}/",
        'work_year' => "/(\d{1,2}|\d{1,2}.\d+|[\x{4e00}-\x{9fa5}]+)(年|年以上)工作经验/u",
        'hight' => "/\d{3}(cm|CM)/",
        'birthday' => "/\d{4}(年|\.|\/|\-)\d{1,2}(月|\.|\/|\-)\d{1,2}(日)?/",
        'political' => "/(党员|群众|普通公民|团员)/",
        'nation' => "/民族:?(汉(族)?|蒙古(族)?|回(族)?|藏(族)?|维吾尔(族)?|苗(族)?|彝(族)?|壮(族)?|布依(族)?|朝鲜(族)?|满(族)?|侗(族)?|瑶(族)?|白(族)?|土家(族)?|哈尼(族)?|哈萨克(族)?|傣(族)?|黎(族)?|僳僳(族)?|佤(族)?|畲(族)?|高山(族)?|拉祜(族)?|水(族)?|东乡(族)?|纳西(族)?|景颇(族)?|柯尔克孜(族)?|土(族)?|达斡尔(族)?|仫佬(族)?|羌(族)?|布朗(族)?|撒拉(族)?|毛南(族)?|仡佬(族)?|锡伯(族)?|阿昌(族)?|普米(族)?|塔吉克(族)?|怒(族)?|乌孜别克(族)?|俄罗斯(族)?|鄂温克(族)?|德昂(族)?|保安(族)?|裕固(族)?|京(族)?|塔塔尔(族)?|独龙(族)?|鄂伦春(族)?|赫哲(族)?|门巴(族)?|珞巴(族)?|基诺(族)?)/",

        'domicile' => "/(北京(市)?|天津(市)?|上海(市)?|重庆(市)?|河北(省)?|山西(省)?|辽宁(省)?|吉林(省)?|黑龙江(省)?|江苏(省)?|浙江(省)?|安徽(省)?|福建(省)?|江西(省)?|山东(省)?|河南(省)?|湖北(省)?|湖南(省)?|广东(省)?|海南(省)?|四川(省)?|贵州(省)?|云南(省)?|陕西(省)?|甘肃(省)?|青海(省)?|西藏自治(区)?|广西壮族自治(区)?|内蒙古自治(区)?|宁夏回族自治(区)?|新疆维吾尔自治(区)?|香港特别行政(区)?|澳门地(区)?|台湾(省)?)(\-|市|区)([\x{4e00}-\x{9fa5}]+)(\-|区)?([\x{4e00}-\x{9fa5}]+)?/u",

        'native_place' => "/(籍贯|户口)(:|：)([\x{4e00}-\x{9fa5}]+)/u",
        'expected_money' => "/(期望薪水|期望薪资|期望月薪)(:|：)?(\d+\-\d+|\d+(万以上)?)/",

    ],

    // 'selfEvaluation' => [ 'self_evaluation' => "/\+/" ],
    'jobIntention' => [

        'expected_money' => "/(期望薪水|期望薪资|期望月薪)(:|：)?(\d+\-\d+|\d+(万以上)?)/",
        'expected_industry'  =>  "/(希望行业|期望行业|意向行业)(:|：)?(.*)?/u",
        'expected_address'  =>  "/(目标地点|期望地点|地点|工作地点|意向地区)(:|：)?(.*)?/u",
        'expected_job'  =>  "/(目标职能|职位|意向岗位)(:|：)?(.*)?/u",
        'domicile' => "/(目前所在地)(:|：)?(.*)?/u",
        'native_place' => "/(籍贯|户口|户口所在地)(:|：)([\x{4e00}-\x{9fa5}]+)/u",
    ],
        
    
];

