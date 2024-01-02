 <?php

//   dispatch view

 function url($url = ''){
    return APP_URL . trim($url, '/');
 }

 function asset($path = '')
{
    return APP_URL . trim($path, '/');
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }