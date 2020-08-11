package com.company;

import demo.Cars;

public class Honda extends Cars {
    public void increaseHondaSpeed()
    {
        int hondaSpeed = 40;
        Cars c1 = new Cars();
        //被public修饰的属性可以直接访问
        c1.publicSpeed = 1;
        //被private修饰的属性只能用set方法来设置
        c1.setPrivateSpeed(hondaSpeed);
        //被protected修饰的属性可以直接设置 但是仅限同一个包中或者继承了父类的成员访问
        protectedSpeed = 100;
    }
}
