package list;

import java.util.HashMap;
import java.util.LinkedHashMap;
import java.util.Map;
import java.util.TreeMap;

public class MapsDemo
{
    public static void main(String[] args)
    {
        //Maps会以键值对的方式存储元素 之所以会叫Map就是因为这种键值对的映射关系
        //Map.Entery存映射关系

        Map<Integer, String> map = new HashMap<>();

        //Map里添加元素用put方法
        map.put(1, "BMW");
        map.put(10, "Audi");
        map.put(20, "Honda");
        map.put(30, "Suzuki");
        map.put(40, "Subaru");
//        map.put(null, "破车");

        //同时输出键与值
        for(Map.Entry<Integer, String> entry: map.entrySet())
        {
            int key = entry.getKey();
            String value = entry.getValue();
            System.out.printf("键：%d----值：%s\n", key, value);
        }
        System.out.println("HashMap----------------------");
        //通过键取出所有值
        for(Integer key: map.keySet())
        {
            String value = map.get(key);
            System.out.printf("键：%d----值：%s\n", key, value);
        }
        System.out.println("HashMap----------------------");
        //LinkedHashMap 可以保证输出时与储存时的顺序相同
        Map<Integer, String> linkedHashMap = new LinkedHashMap<>();
        linkedHashMap.put(1, "BMW");
        linkedHashMap.put(3, "Audi");
        linkedHashMap.put(5, "Toyota");
        linkedHashMap.put(7, "破车");
//        linkedHashMap.put(null, "");
        System.out.println("LinkedHashMap----------------------");
        for(Map.Entry<Integer, String> entry : linkedHashMap.entrySet())
        {
            int key = entry.getKey();
            String value = entry.getValue();
            System.out.printf("键：%d----值：%s\n", key, value);
        }
        //TreeMap 是自然排序 输出时按照首字母大小写排序
        Map<Integer, String> treeMap = new TreeMap<>();
        treeMap.put(1, "BMW");
        treeMap.put(3, "Audi");
        treeMap.put(5, "Toyota");
        treeMap.put(7, "破车");
//        treeMap.put(null, "");
        System.out.println("TreeMap----------------------");
        for(Map.Entry<Integer, String> entry : treeMap.entrySet())
        {
            int key = entry.getKey();
            String value = entry.getValue();
            System.out.printf("键：%d----值：%s\n", key, value);
        }
    }
}
