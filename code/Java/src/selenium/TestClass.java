package selenium;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.firefox.FirefoxDriver;

public class TestClass
{
    public static void main(String[] args)
    {
        //FirefoxDriver是selenium里面封装好的类 可以用它自动化测试Web应用程序
        WebDriver driver = new FirefoxDriver();
        //WebElement代表了所有的HTML元素 需要做与页面元素交互的操作时 都是通过这个接口实现的
        WebElement element = driver.findElement(By.id(""));
    }
}
