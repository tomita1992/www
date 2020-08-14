package overload;

public class CarsOverloadingQuestions
{
    public static void main(String[] args )
    {

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
