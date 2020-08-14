package override;

public class CarsOverridingParent
{
    public void engineStart(CarsOverridingParent num)
    {
        System.out.printf("这是父类还有子类的参数\n");
    }
    public static void increaseSpeed()
    {
        System.out.println("这是increaseSpeed的方法");
    }
}
