<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;


class QiniuController extends Controller
{
    public function radioUpload(Request $request){
//        $accessKey ="6uRB0cKNqK8Y-da8AlV7L5EvKt_bpeGXWcP9on3x";
        $accessKey ="-cPkNshaC3txFX84Q_R9OoanMWd24QfHa8tvcS9G";
//        $secretKey = "hj0GN95V_b-wt5t06To7MEx2aE6UHHRC_QhuDvL6";
        $secretKey = "osdchuL7-bx7PNbwM0RQ1d26H_L1t9GWgX6IYzof";
//        $bucket = "shifangyunshui";
        $bucket = "myself";
        // 构建鉴权对象
        $auth = new Auth($accessKey, $secretKey);
        // 生成上传 Token
        $token = $auth->uploadToken($bucket);
        // 要上传文件的本地路径
//        $filePath = './img/ceshi.mp3';
        // 上传到七牛后保存的文件名
        $key = '笑傲江湖.mp3';
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $request->file('img'));
//        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        echo "\n====> putFile result: \n";
        if ($err !== null) {
            var_dump($err);
        } else {
            var_dump($ret);
        }
    }

    public function qiniuCallback(){
        echo 'huidiao';
    }
}
