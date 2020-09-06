<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    //一覧表示（トップページ）
    $app->get('/memos',function(Request $request, Response $response){
    });

    //新規作成
    $app->get('/memo/new',function(Request $request, Response $response){
        $subject=$request->getParsedBodyParam('subject');
        //以下、DBへの保存
        $sql = 'INSERT INTO memo (subject) values (:subject)';
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(['subject'=>$subject]);
        if(!$result){
            throw new \Exception('メモを保存出来ませんでした。');
        }

        //保存出来た場合、一覧ページへリダイレクトする
        return $response->withRedirect("/memos");
    });

    //詳細ページ（以下、特定の投稿に対しての処理になるので、「array $args」でidを指定する。）
    $app->get('/memo/{id}',function(Request $request, Response $response, array $args){
    });

    //編集
    $app->get('/memo/edit/{id}',function(Request $request, Response $response, array $args){
    });

    //更新（機能自体は「保存」と同じだが、部分的な変更に対して実行される為、「patch」を使う。）
    $app->patch('/memo/update/{id}',function(Request $request, Response $response, array $args){
    });

    //削除
    $app->delete('/memo/{id}',function(Request $request, Response $response, array $args){
    });



    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });
};
