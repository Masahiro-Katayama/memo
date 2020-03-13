<?php
(function () {
  $html = "https://smp.his-j.com/cmn/js/dst_bnr_minor.js";
  $html = file_get_contents($html);

  $hrefBeforeText = "href=\"";
  $srcBeforeText = "src=\"";

  for ($i = 0;; $i++) {
    if (!mb_strpos($html, $hrefBeforeText)) {
      break;
    }

    $href = mb_substr($html, mb_strpos($html, $hrefBeforeText) + mb_strlen($hrefBeforeText));
    $href = mb_substr($href, 0, mb_strpos($href, "\""));

    $src = mb_substr($html, mb_strpos($html, $srcBeforeText) + mb_strlen($srcBeforeText));
    $src = mb_substr($src, 0, mb_strpos($src, "\""));

    global $itemArray;
    $itemArray[] = ["href" => $href, "src" => $src];

    $html = mb_substr($html, mb_strpos($html, "</li>") + mb_strlen($hrefBeforeText));
  }

  echo "<pre>";
  var_dump($itemArray);
  echo "</pre>";
})();
