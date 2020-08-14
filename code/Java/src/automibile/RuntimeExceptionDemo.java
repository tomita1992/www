package automibile;

public class RuntimeExceptionDemo
{
    public static void main(String[] args)
    {
        int a = 10;
        int b = 0;
        int[] num = {1, 2, 3};

//        try
//        {
//            int c = a / b;
//            System.out.println(c);
//        }
//        catch(ArithmeticException e)
//        {
//            System.out.println(e.getMessage());
//        }
        try
        {
            for(int i = 0; i < 3; i++)
            {
                System.out.println(num[i]);
            }
        }
        catch(ArrayIndexOutOfBoundsException e)
        {
            //只会打印有问题的角标
            System.out.println(e.getMessage() + "以后的角标不存在");
        }
    }
}
