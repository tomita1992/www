package demo;

public class AbstractBMW extends AbstractCars
{
    //由于抽象类不可以直接创建对象 所以需要用子类来继承 然后访问抽象类的方法及属性
    public void setPrivateSpeed(int pSpeed)
    {
        super.setPrivateSpeed(pSpeed);
    }

    //在抽象类里定义共性的方法 在子类里用重写的方式定义自己的方法
    @Override
    public void engineStart(String keyType, int num)
    {
        System.out.println("这是BMW的启动方式");
    }
}
