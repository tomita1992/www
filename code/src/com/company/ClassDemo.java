package com.company;

public class ClassDemo
{
    public static void main(String[] args)
    {
        Car bmw = new Car();
        bmw.setMake("BMW");
        System.out.println(bmw.getMake());

        Car benz = new Car("白", "c300");
        System.out.println(benz.color);

        Car benz1 = new Car();
        System.out.println(benz1.color);
    }
}
