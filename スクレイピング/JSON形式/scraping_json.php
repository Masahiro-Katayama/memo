<?php
$jsonUrl = "https://www.his-j.com/kaigai/json/dst/banner_2.json";
$json = file_get_contents($jsonUrl);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$obj = json_decode($json, true);

foreach ($obj as $key => $value) {
  $slideArray[] = ["href" => "https://www.his-j.com" . $value["link"], "src" => "https://www.his-j.com" . $value["pc"]];
}
