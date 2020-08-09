package com.company;

public class Array
{
    //定义数组
    public static void main(String[] args)
    {
        int[] array = new int[10];

        String[] stringArray = {"abc", "def", "haha"};
        char i = 0;
        //遍历字符串数组
        for(String value : stringArray)
        {
            String index = String.valueOf(Integer.valueOf(i));
            System.out.println(index + "：" + value);
            i++;
        }
        for(String value : stringArray)
        {

            System.out.println(i + "：" + value);
            i++;
        }

    }
}
