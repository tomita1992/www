package demo;

public class InterfaceDemo1
{
    public static void main(String[] args)
    {
        //新建一个接口
        //现在的形式就叫多态 是对象的多态性的一种表现

        //类型需要写接口类型（CarInterface）
        CarInterface myCar = new InterFaceDome();   //可以新建（new）的一定是实现了接口的子类

        //也可以写成InterfaceDemo
        InterFaceDome myCar1 = new InterFaceDome();
        myCar.engineStart("不需要钥匙", true);
        myCar1.engineStart("需要钥匙", false);

        //BMW的接口类型
        BMWInterface myCar3 = new InterFaceDome(); //new的对象不变
        myCar3.Navigation();
    }
}
