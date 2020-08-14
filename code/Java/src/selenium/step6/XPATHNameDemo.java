package selenium.step6;

import org.openqa.selenium.By;
import org.openqa.selenium.Platform;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.DesiredCapabilities;

public class XPATHNameDemo
{
    public static void main(String[] args)
    {
        String url = "http://www.baidu.com";
        DesiredCapabilities caps = DesiredCapabilities.chrome();
        caps.setBrowserName("chrome");
        caps.setPlatform(Platform.WINDOWS);

        WebDriver driver = new ChromeDriver(caps);
        driver.manage().window().maximize();
        driver.get(url);

        driver.findElement(By.name("wd")).sendKeys("乘风破浪的姐姐");
        driver.findElement(By.xpath("//input[@id=su]")).click();
    }
}
