package demo;

//定义一个接口 就算不写public这些关键字也会自动添加
public interface CarInterface {
    //定义一个接口常量
    public static final String SPEED = "100";

    //定义一个接口的抽象方法
    public abstract void engineStart(String engineType, boolean isKeyless);
}
