package com.company;

public class String2
{
    //字符串方法
    public static void main(String[] args)
    {
        String str = " 这是一个字符串 ";
        String str1 = "这是一个字符串";
        //返回字符串长度 可以返回宽字符
        System.out.println(str.length());
        //指定索引处字符 可以返回宽字符
        System.out.println(str.charAt(2));
        //字符串连接
        System.out.println(str.concat("你知道不"));
        //查找是否存在一个字符串 如果存在则返回true
        System.out.println(str.contains("ss"));
        //查找是否以某个字符串开头 以空格划分 如果存在返回true
        System.out.println(str.startsWith("这是"));
        //查找是否以某个字符串结束 以空格划分 如果存在返回true
        System.out.println(str.endsWith("串"));
        //比较两个字符串的内容是否相等 相等返回true
        System.out.println(str.equals(str1));
        //查看字符串是否为空 为空则返回true
        System.out.println(str.isEmpty());
        //去除字符串前后的空格
        System.out.println(str.trim());
    }
}
