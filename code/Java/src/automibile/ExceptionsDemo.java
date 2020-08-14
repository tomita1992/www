package automibile;

import java.sql.SQLException;

public class ExceptionsDemo
{
    public static void main(String[] args)
    {
        Account acc = new Account();
        try
        {
            System.out.println("第一行");
            acc.withdraw(100);
            System.out.println("第二行");
        }
        catch(SQLException e)
        {
 //            e.printStackTrace();
//            System.out.println(e.getMessage());
            System.out.println("服务器暂时不可用，请稍后重试");
        }finally
        {
            System.out.println("正在连接服务器");
        }
    }
}
