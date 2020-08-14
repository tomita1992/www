package selenium.step6;

import org.openqa.selenium.By;
import org.openqa.selenium.Platform;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.DesiredCapabilities;

public class IdXpathDemo
{
    public static void main(String[] args)
    {
        // //input[@id="kw"]
        String url = "http://www.baidu.com";
        DesiredCapabilities caps = DesiredCapabilities.chrome();
        caps.setBrowserName("chrome");
        caps.setPlatform(Platform.WINDOWS);
        WebDriver driver = new ChromeDriver(caps);
        driver.manage().window().maximize();
        driver.get(url);
        //定位元素 在文本框输入
        driver.findElement(By.id("kw")).sendKeys("Selenium WebDriver");
        //定位按钮 点击
        driver.findElement(By.xpath("//input[@id='su']")).click();
    }
}
