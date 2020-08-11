package demo;

public class BMW extends Cars
{
    public BMW(int startSpeed)
    {
        super(startSpeed);
    }

    @Override
    public void increaseSpeed() {
        super.increaseSpeed();
        super.speed += 10;
    }
    public void bmwMethod()
    {
        protectedSpeed++;
        System.out.println("这是子类自己的方法");
    }
}
