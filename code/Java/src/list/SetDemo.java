package list;

import java.util.*;

public class SetDemo
{
    public static void main(String[] args)
    {
        //Set是单列集合的根接口Collection 的其中一个子接口
        Collection<String> set = new HashSet<>();
        //Collection是单列集合的根接口
        Collection<String> list = new ArrayList<>();

        //
        Collection<Integer> hashSet = new HashSet<>();
        Collection<Integer> linkedHashSet = new LinkedHashSet<>();
        Collection<Integer> treeSet = new TreeSet<>();

        Collection<Integer> linkedList = new LinkedList<>();
        Collection<Integer> hashList = new HashSet<>();
        Collection<Integer> terrList = new TreeSet<>();



        set.add("BMW");
        set.add("Audi");
        set.add("Honda");
        set.add("Toyota");
        set.add("Suzuki");
        System.out.println("这是HahSet--" + set);
        //HashSet不会保证存和取的顺序是一样的
        for(String item: set)
        {
            System.out.println(item);
        }

        //LinkedHashSet

        Set <String> LHSet = new LinkedHashSet<>();
        LHSet.add("BMW");
        LHSet.add("Audi");
        LHSet.add("Honda");
        LHSet.add("Toyota");
        LHSet.add("Suzuki");
        System.out.println("这是LinkedHahSet--" + LHSet);

        //TreeSet
        Set <String> Tset = new TreeSet<>();
        Tset.add("BMW");
        Tset.add("Audi");
        Tset.add("Honda");
        Tset.add("Toyota");
        Tset.add("Suzuki");
        System.out.println("这是TreeSet-------" + Tset);
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
        System.out.printf("list的方法： %s\n", listType);
        startTime = System.currentTimeMillis();
        for(int i = 0; i < 100000; i++)
        {
            list.add(i);
        }
        endTime = System.currentTimeMillis();
        duration = endTime - startTime;
        System.out.printf("从第一位开始添加的时间：%d毫秒", duration);

        //从最后开始删除
        System.out.printf("list的方法： %s\n", listType);
        startTime = System.currentTimeMillis();
        for(int i = 90000; i < 92000; i++)
        {
            list.remove(i);
        }
        endTime = System.currentTimeMillis();
        duration = endTime - startTime;
        System.out.printf("从第一位开始添加的时间：%d毫秒\n", duration);

        //从首位开始删除
        System.out.printf("list的方法： %s\n", listType);
        startTime = System.currentTimeMillis();
        for(int i = 0; i < 2000; i++)
        {
            list.remove(i);
        }
        endTime = System.currentTimeMillis();
        duration = endTime - startTime;
        System.out.printf("从第一位开始添加的时间：%d毫秒\n", duration);
        System.out.println("------------------------------------------------");
    }
}
