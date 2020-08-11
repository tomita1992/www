package demo;

public class Cars
{
    //无修饰符只能在包中访问
    int speed;
    //public可以被别的包和其他的类中被访问
    public int publicSpeed;
    //private只能在这个类中被访问
    private int privateSpeed;
    //protected 只能在同一个包中 或者其他包中的子类被访问
    protected int protectedSpeed;

    public Cars(int startSpeed)
    {
        this.speed = startSpeed;
    }
    public Cars()
    {

    }
    protected void increaseSpeed()
    {
        speed++;
        System.out.println("加速.........." + speed);
    }

    public void setPrivateSpeed(int privateSpeed) {
        this.privateSpeed = privateSpeed;
    }
}
