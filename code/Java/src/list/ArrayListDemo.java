package list;

import java.util.ArrayList;

public class ArrayListDemo
{
    public static void main(String[] args)
    {
        ArrayList<String> cars = new ArrayList<>(10);
        cars.add("BMW");
        cars.add("Honda");
        cars.add("Audi");

        int size = cars.size();
        //打印List的大小
        System.out.println(size);
        //获取某一个元素
        System.out.println("1索引为上的元素为" + cars.get(1));
        //遍历集合元素
        for(int i = 0; i < cars.size(); i++)
        {
            System.out.printf("索引位%d上的元素为%s\n",i, cars.get(i));
        }
        //删除集合元素
        cars.remove(size-1);
        //高级for遍历集合
        for(String car: cars)
        {
            System.out.println(car);
        }
    }
}
