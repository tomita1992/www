package list;

import java.util.*;

public class CollectionDemo
{
    public static void main(String[] args)
    {
        //Set
        Collection<Integer> hashSet = new HashSet<>();
        Collection<Integer> linkedHashSet = new LinkedHashSet<>();
        Collection<Integer> treeSet = new TreeSet<>();

        //List
        Collection<Integer> linkedList = new LinkedList<>();
        Collection<Integer> hashList = new HashSet<>();
        Collection<Integer> terrList = new TreeSet<>();

        runDuration(hashSet, "HashSet");
        runDuration(linkedHashSet, "LinkedHashSet");
        runDuration(treeSet, "TreeSet");

        runDuration(linkedList, "linkedList");
        runDuration(hashList, "hashList");
        runDuration(terrList, "TreeList");
    }
    public static void runDuration(Collection<Integer> list, String listType)
    {
        //从最后一位开始添加的时间
        System.out.printf("list的方法： %s\n", listType);
        long startTime = System.currentTimeMillis();
        for(int i = 0; i < 100000; i++)
        {
            list.add(i);
        }
        long endTime = System.currentTimeMillis();
        long duration = endTime - startTime;
        System.out.printf("最后一位开始添加的时间：%d毫秒\n", duration);

        //从第一位开始添加的时间
        startTime = System.currentTimeMillis();
        for(int i = 0; i < 100000; i++)
        {
            list.add(i);
        }
        endTime = System.currentTimeMillis();
        duration = endTime - startTime;
        System.out.printf("从第一位开始添加的时间：%d毫秒\n", duration);

        //从最后开始删除
        startTime = System.currentTimeMillis();
        for(int i = 90000; i < 92000; i++)
        {
            list.remove(i);
        }
        endTime = System.currentTimeMillis();
        duration = endTime - startTime;
        System.out.printf("从最后开始删除的时间：%d毫秒\n", duration);

        //从首位开始删除
        startTime = System.currentTimeMillis();
        for(int i = 0; i < 2000; i++)
        {
            list.remove(i);
        }
        endTime = System.currentTimeMillis();
        duration = endTime - startTime;
        System.out.printf("从第一位开始删除的时间：%d毫秒\n", duration);
        System.out.println("------------------------------------------------");
    }
}
