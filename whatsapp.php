  <?php
// Fix Api Whatsapp on Desktops
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
  header('Location: https://api.whatsapp.com/send?phone=5522998118247&text=ol%C3%A1%2C%20tudo%20bem%20%3F');
  //OR
  echo "<script>window.location='https://api.whatsapp.com/send?phone=5522998118247&text=ol%C3%A1%2C%20tudo%20bem%20%3F'</script>";
}
// all others
else {
  header('Location: https://api.whatsapp.com/send?phone=5522998118247&text=ol%C3%A1%2C%20tudo%20bem%20%3F');
  //OR
  echo "<script>window.location='https://api.whatsapp.com/send?phone=5522998118247&text=ol%C3%A1%2C%20tudo%20bem%20%3F'</script>";
}
?>