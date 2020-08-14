package list;

import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;

public class LinkedListDemo
{
    /**
     *  ArrayList是基于数组实现的{0, 1, 2, 3} 如果从最后的位置增删的话 就会很快
     *  LinkedList 如果从最开始的位置增删的话就会很快
     *
     */
    public static void main(String[] args)
    {
        //LinkedList与ArrayList的方法基本一样
        //LinkedList不可以直接指定大小
        List <Integer> llist = new LinkedList<Integer>();
        List <Integer> alist = new ArrayList<Integer>();

        runDuration(llist, "LinkedList");
        runDuration(alist, "ArrayList");
    }

    public static void runDuration(List<Integer> list, String listType)
    {
        System.out.println("\nduration方法的开始 用的集合是：" + listType);
        for(int i = 0; i < 100000; i++)
        {
            list.add(i);
        }
        int size = list.size();
        int elementToAdd = size + 100000;

        long startTime = System.currentTimeMillis();
//        for(int i = size; i < elementToAdd; i++)
//        {
//            //从最后一位100万个添加元素ArrayList为60毫秒左右 LinkedList为400毫秒左右
//            //list.add(i);
//            //从第一位添加10万个元素ArrayList为4000毫秒 LinkedList为15毫秒
//            list.add(0, i);
//        }
//        for(int i = 90000; i < 92000; i++)
//        {
////            list.remove(i);
//        }
        for(int i = 0; i < 10000; i++)
        {
            list.remove(i);
        }
        long endTime = System.currentTimeMillis();
        long duration = endTime - startTime;

        System.out.printf("操作时间为%d毫秒-----添加了%d个元素\n", duration, size);
    }
}
