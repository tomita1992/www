package com.company;

public class Main {

    public static void main(String[] args)
    {
        //定义字符串的两种方法
        String str1 = "Hello";
        String str2 = "Hello";
        System.out.println(str1 == str2);
        System.out.println(str1.equals(str2));
        System.out.println("----------------------------------");
        //由于是两个不同的对象 所以结果为false
        String str3 = new String("你好啊");
        String str4 = new String("你好啊");
        //两个都指向常量池中的同一个字符串 结果为true
        System.out.println(str3 == str4);
        System.out.println(str3.equals(str4));
    }
}
