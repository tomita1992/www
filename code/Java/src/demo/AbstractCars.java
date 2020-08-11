package demo;

//定义抽象类
public abstract class AbstractCars
{
    //无修饰符只能在包中访问
    int speed;
    //public可以被别的包和其他的类中被访问
    public int publicSpeed;
    //private只能在这个类中被访问
    private int privateSpeed;
    //protected 只能在同一个包中 或者其他包中的子类被访问
    protected int protectedSpeed;
    //定义抽象方法
    public abstract void engineStart(String keyType, int num);

    public AbstractCars(int startSpeed)
    {
        this.speed = startSpeed;
    }
    public AbstractCars()
    {
        this(0);
    }
    public void setPrivateSpeed(int privateSpeed) {
        this.privateSpeed = privateSpeed;
    }

}
