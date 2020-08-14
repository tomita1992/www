package overload;
/*
*   参数数据类型不同
*
* */
public class CarsOverLoading2
{
    public static void main(String[] args)
    {
        increaseSeatHeight(4);
        increaseSeatHeight("4");
    }

    public static void increaseSeatHeight(int height)
    {
        System.out.printf("提高座椅高度为%d(数字)\n", height);
    }

    public static void increaseSeatHeight(String height)
    {
        System.out.printf("提高座椅高度为%s(文字)\n", height);
    }
}
