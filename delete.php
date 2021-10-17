<?php

/**
 * DB接続のため、secure, connect, queryArticle, articleを宣言
 */
    include 'lib/secure.php';
    include 'lib/connect.php';
    include 'lib/queryArticle.php';
    include 'lib/article.php';
    /**
     * idをgetで取得して、idが存在した場合、QueryArticleをインスタンス化
     * idをfindメソッドのidで取得して自分自身(article)にセットし、削除処理を実行
     * つまりdelete.phpで該当レコードを取得したのち、Articleを経由してQueryArticleの削除処理を呼ぶ
     */
    if (!empty($_GET['id'])) {
        $queryArticle = new QueryArticle();
        $article = $queryArticle->find($_GET['id']);
        if ($article) {
            $article->delete();
        }
    }
    header('Location: backend.php');
?>