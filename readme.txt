本地有一个mysql使用的默认端口 
由于axmpp也有一个mysql文件 修改了mysql的端口为3316 
所以运行的时候需要把数据库用户名，密码，端口改成与本机一致的用户名，密码，端口号，
需要修改php文件中数据库连接的代码
$link = new mysqli("localhost","root","","test_yhf",3316);

//github_url:https://github.com/yuhongfeizstu/test_yhf.git