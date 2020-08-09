package com.company;

public class Car
{
    public String color;
    private String make;
    private String model;
    private int year;

    public Car()
    {
        //空参数的构造函数调用有参数的构造函数 但是只有空参的构造函数可以
        this("红", "c100");
    }

    public Car(String color, String model)
    {
        this.color = color;
        this.model = model;

    }

    public void speed()
    {
        System.out.println("上劲了");
    }

    //向外界提供一个设置Make的访问方式
    public void setMake(String make)
    {
        this.make = make;
    }
    //向外界提供一个Make的访问方式
    public String getMake()
    {
        return this.make;
    }
}
