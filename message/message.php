<?php
 include './inc/style.php';
 include './inc/script.php';
     function showMessage($type, $message) {
      return
      
      '<div class="mt-5 alert alert-' . $type . ' alert-dismissible fade show" role="alert">
          <strong>' . $message . '</strong>
          <button type="button" class="btn-close" id = "buuutton" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
?>