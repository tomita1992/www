package com.company;

import demo.BMW;
import demo.Cars;

public class Inheritance {
    public static void main(String[] args)
    {
        int speed = 40;
        Cars c1 = new Cars(speed);

        BMW c2 = new BMW(speed);
        c2.increaseSpeed();
        c2.bmwMethod();
    }
}
