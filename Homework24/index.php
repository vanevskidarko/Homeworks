<?php

$content = 'content';
$class = 'paragraph';

echo '<p class="' . $class . '">' . $content . '</p>';
echo '<br>';
echo '<br>';
function outputParagraph($class, $content)
{
    echo '<p class="' . $class . '">' . $content . '</p>';
}
outputParagraph('someclass', 'lorem15');

echo '<br>';
echo '<br>';

$arr = [
    'username' => 'username',
    'password' => 'password',
    'email' => 'email',
];

?>
<form>
    <input name="<?php echo $arr['username']; ?>">
    <input name="<?php echo $arr['password']; ?>">
    <input name="<?php echo $arr['email']; ?>">
</form>

<form>
    <?php
    foreach ($arr as $v) {
        echo '<input name ="' . $v . '">';
    }
    ?>
</form>

<?php

function createInput($type, $name, $value, $id, $label)
{

    echo '<input type="' . $type . '"name="' . $name . '" value="' . $value . '"id ="' . $id . '" label="' . $label . '">';
}
?>

<form>
    <?php
    createInput('text', 'false', 'id', 'label', 'name') ?>
</form>
<?php
session_start();
?>
<form action="process.php" method="POST">
    <label for="username"><input type="text" name="username"></label>
    <label for="password"><input type="password" name="password"></label>
    <input type="submit" value="submit" name="submit">
</form>

<?php
if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
    echo $_SESSION['success'];
}
if (isset($_SESSION['error']) && strlen(($_SESSION['error'])) < 6) {
    echo $_SESSION['error'];
}
if (isset($_SESSION['error']) && empty($_SESSION['error'])) {
    echo $_SESSION['error'];
}
session_destroy();
?>
<br>
<br>
<br>
<br>
<br>
<?php
session_start();
?>
<form action="process2.php" method="$_GET">
    <label for="username"><input type="text" name="username"></label>
    <label for="password"><input type="password" name="password"></label>
    <input type="submit" value="submit" name="submit">
</form>

<?php
if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
    echo $_SESSION['success'];
}
if (isset($_SESSION['error']) && strlen(($_SESSION['error'])) < 6) {
    echo $_SESSION['error'];
}
if (isset($_SESSION['error']) && empty($_SESSION['error'])) {
    echo $_SESSION['error'];
}
session_destroy();
?>