<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>登录</title>
</head>
<body>
<h1>登录</h1>
    <form action="<?php echo base_url()?>/usercontroller/login"
        method="post">
        <table>
            <tr>
                <td>用户名</td>
                <td><input name="username"
                    value="<?php if (isset($_REQUEST)&&isset($_REQUEST['username'])) {
                        echo $_REQUEST['username'];
                    }?>"></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input name="password" value="<?php if (isset($_REQUEST)&&isset($_REQUEST['password'])) {
                        echo $_REQUEST['password'];
                    }?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>
</body>
</html>