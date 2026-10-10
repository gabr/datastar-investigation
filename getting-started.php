<?php
  if (isset($_GET["action"])) {
    if ($_GET["action"] === "reset") {
      echo '<div id="hal"></div>';
    }
    if ($_GET["action"] === "open-pad-bay-doors") {
      ?>
        <div id="hal">
          I'm sorry, Dave. I'm araid I can't do that
          <button data-on:click="@get('/getting-started.php?action=reset')">
            reset
          </button>
        </div>
      <?php
    }
  }
  else if (isset($_GET["json"])) {
    if ($_GET["json"] === "hal") {
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode(array(
        "hal" => "Affirmative, Dave. I read you."
      ));
    }
  }
  else if (isset($_GET["js-alert"])) {
    $msg = $_GET["js-alert"];
    header('Content-Type: text/javascript; charset=utf-8');
    echo "alert('" . $msg . "')";
  }
?>

