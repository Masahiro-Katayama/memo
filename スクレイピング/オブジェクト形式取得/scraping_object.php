<?php
// phpQueryの読み込み
require_once("phpQuery-onefile.php");
// 取得したいwebサイトを読み込む
$htmlDst = file_get_contents("https://smp.his-j.com/" . $dstCode01 . "/tour/index.html");
// phpQueryのドキュメントオブジェクトを生成
$docDst = phpQuery::newDocument($htmlDst);

//dstページからデータを読み込み
foreach ($docDst[".ui-carousel-panel-block"]->find("a") as $slide) {
  //URL
  $href = pq($slide)->attr("href");
  //img
  $src = pq($slide)->find("img")->attr("src");

  $slideArray[] = ["href" => $href, "src" => $src];
}
