<?php
class InstantVariable{
    function show_about_plugin() {
        $html = "<h1>カスタムバナー</h1>";
        $html .= "<p>トップページに表示するバナーを指定できます</p>";
  
        echo $html;
      }
  
      function show_config_form() {
  ?>
          <h1>カスタムバナーの設定</h1>
  <?php
      }
}
?>