package com.company;

public class String3
{
    //字符串方法
    public static void main(String[] args)
    {
        String str = "这是一个字符串";
        String str1 = "这是一个字符串";

        //字符串替换 第一个参数为要替换的字符串 第二个参数为替换后的字符串
        System.out.println(str.replace("这是一个字符串", "aaa"));
        //截取字符串其中的一部分 宽字符要注意
        System.out.println(str.substring(1, 5));
        //将字符串转成一个数组
        char[] arr = str.toCharArray();
        for(char i = 0; i < arr.length; i++)
        {
            System.out.println(arr[i]);
        }

        char i = 0;
        for(char key : arr)
        {
            String index = String.valueOf(Integer.valueOf(i));
            System.out.println(key + ":" + index);
            i++;
        }
    }
}
