<?php
//POSTリクエストの場合のみ受付
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //アクセストークン
//   $access_token = "2027009889.86d051f.10943558883141458d46de4378041957";
    $access_token = "2079068620.86d051f.dd947c99b38a45bcb90598249ab2537b";
    $hashtag = array (
      "アスラン",
    );

    $count  = count($hashtag);
    $random = rand(0, $count - 1);
    $instagram_url = "https://api.instagram.com/v1/tags/$hashtag[$random]/media/recent/?access_token={$access_token}";

    //JSONデータを取得して出力
    echo @file_get_contents("https://api.instagram.com/v1/users/2079068620/media/recent/?access_token={$access_token}");
//    echo @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token={$access_token}");
//    echo @file_get_contents($instagram_url);

    //終了
    exit;
}
?>