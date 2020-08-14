package overload;
/*
*   参数列表中参数的数量不同
* */

public class CarsOverLoading
{
    public static void main(String[] args)
    {
        increaseSeatHeight(5);
        increaseSeatHeight(5, true);
    }

    public static void increaseSeatHeight(int height)
    {
        System.out.printf("提高座椅高度为%d\n", height);
    }
    public static void increaseSeatHeight(int height, boolean rememberHeight)
    {
        System.out.printf("提高座椅高度为%d\n", height);
        if(rememberHeight)
        {
            System.out.printf("你设置的高度已经保存");
        }
        else
        {
            System.out.printf("你设置的高度未保存");
        }

    }
}
