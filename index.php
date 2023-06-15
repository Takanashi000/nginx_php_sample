<!DOCTYPE html>
<html>
<head>
    <title>Takanashi php</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    <script>
        // 使用 JavaScript 定時器每秒更新時間
        setInterval(updateTime, 1000);

        function updateTime() {
            var currentTime = new Date();
            var formattedTime = currentTime.getFullYear() + "-" + padZero(currentTime.getMonth() + 1) + "-" + padZero(currentTime.getDate()) + " " + padZero(currentTime.getHours()) + ":" + padZero(currentTime.getMinutes()) + ":" + padZero(currentTime.getSeconds());
            document.getElementById("clock").innerText = "TimeNow： " + formattedTime;
        }

        // 補零函數，用於確保時間格式一致
        function padZero(num) {
            return (num < 10 ? "0" : "") + num;
        }
    </script>
</head>
<body>
    <table>
        <tr>
            <td id="clock">TimeNow： <!-- 時間將由 JavaScript 更新 --></td>
        </tr>
        <tr>
            <td><?php echo "Nginx Version: " . $_SERVER['SERVER_SOFTWARE']; ?></td>
        </tr>
        <tr>
            <td><?php echo "PHP Version: " . phpversion(); ?></td>
        </tr>
        <tr>
            <td><?php echo gmdate('Y-m-d H:i:s'); ?></td>
        </tr>
        <tr>
            <td><?php echo "Server Public IP: " . shell_exec("curl ifconfig.me"); ?></td>
        </tr>
        <tr>
            <td><?php echo "Server Private IP: " . $_SERVER['SERVER_ADDR'] . ": " .$_SERVER['SERVER_PORT']; ?></td>
        </tr>
        <tr>
            <td><?php echo "Client Public IP: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . ": " . $_SERVER["REMOTE_PORT"]; ?></td>
        </tr>
    </table>
</body>
</html>

<?php
phpinfo();
?>
