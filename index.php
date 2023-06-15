<!DOCTYPE html>
<html>
<head>
    <title>時鐘和 IP</title>
    <style>
        .clock {
            font-size: 48px;
            text-align: center;
            margin-top: 100px;
        }
        .ip {
            font-size: 24px;
            text-align: center;
        }
    </style>
    <script>
        // 使用 JavaScript 定時器每秒更新時間
        setInterval(updateTime, 1000);

        function updateTime() {
            var currentTime = new Date();
            var formattedTime = currentTime.getFullYear() + "-" + padZero(currentTime.getMonth() + 1) + "-" + padZero(currentTime.getDate()) + " " + padZero(currentTime.getHours()) + ":" + padZero(currentTime.getMinutes()) + ":" + padZero(currentTime.getSeconds());
            document.getElementById("clock").innerText = "當前時間：" + formattedTime;
        }

        // 補零函數，用於確保時間格式一致
        function padZero(num) {
            return (num < 10 ? "0" : "") + num;
        }
    </script>
</head>
<body>
    <div class="clock" id="clock">
        <!-- 時間將由 JavaScript 更新 -->
    </div>
    <div class="ip">
        <?php echo "IP Address：" . $_SERVER['HTTP_X_FORWARDED_FOR']; ?>
    </div>
</body>
</html>

