<?php 
require_once 'MenuController.php';

if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$currenMenu = $menu->edit($menuId);

if(isset($_POST['submit'])){
    $menu->update($_POST, $menuId);
}
?>

<form method="post">
    <input type="text" name="Firstname" value="<?php echo $currenMenu['Firstname']; ?>">
    <br>
    <input type="text" name="Lastname" value="<?php echo $currenMenu['Lastname']; ?>">
   
   
    <br>
    <input type="text" name="Email" value="<?php echo $currenMenu['Email']; ?>">
    <br>
    <input type="text" name="Password" value="<?php echo $currenMenu['Password']; ?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>