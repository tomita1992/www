package automibile;

//可以将java.sql.Connection 换成 java.sql.* 这样就可以访问sql下面所有的类
import java.sql.*;

public class Account
{
    //Connection是与特定数据库的连接 java里已经描述好了它的功能
    public Connection getConn() throws SQLException
    {
        Connection conn = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/", "root", "cui02093920");
        return conn;
    }
    public void withdraw(int money) throws SQLException
    {
        getConn();
    }
}
