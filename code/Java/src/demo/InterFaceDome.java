package demo;

//定义一个类用于实现接口的抽象方法
public class InterFaceDome implements CarInterface, BMWInterface {

    //虽然定义的是接口方法本身还是抽象方法 但是不叫覆盖而是实现
    @Override
    public void engineStart(String engineType, boolean isKeyless) {
        System.out.println(engineType);
    }
    public void Navigation()
    {
        System.out.println("这是BMW的接口");
    }
}
