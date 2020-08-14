package overload;
/*
*   参数数据类型的顺序不同
* */
public class CarsOverLoading3
{
    public static void main(String[] args)
    {
        increaseSeatHeight(4, "文字");
        increaseSeatHeight("数字", 4);
    }

    public static void increaseSeatHeight(int height, String str)
    {
        System.out.printf("提高座椅高度为%d(%s)\n", height, str);
    }

    public static void increaseSeatHeight( String str, int height)
    {
        System.out.printf("提高座椅高度为%d(%s)\n", height, str);
    }
}
