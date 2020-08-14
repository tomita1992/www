package override;

public class CarsOverridingChildBMW extends CarsOverridingParent
{
    public int bmw = 10;
    public static void main(String[] args)
    {
        CarsOverridingParent c1 = new CarsOverridingParent();
        CarsOverridingChildHonda c2 = new CarsOverridingChildHonda();
        CarsOverridingChildBMW c3 = new CarsOverridingChildBMW();
        CarsOverridingChildToyota c4 = new CarsOverridingChildToyota();

        c3.engineStart(c3);
        //可以对父类类型指向子类对象进行类型转换
        ((CarsOverridingChildBMW) c1).engineStop(c2);

    }

    @Override
    public void engineStart(CarsOverridingParent Child)
    {

        System.out.printf("子类重写的方法与honda的参数%d\n");
    }
    public void engineStop(CarsOverridingParent honda)
    {
        System.out.printf("这是子类的另一个方法与honda的参数%d\n");
    }

}