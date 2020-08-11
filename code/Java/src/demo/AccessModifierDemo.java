package demo;

public class AccessModifierDemo
{
    public static void main(String[] args)
    {
        int speed = 40;
        Cars c1 = new Cars(speed);
        c1.speed = 80;
        c1.increaseSpeed();
    }
}
