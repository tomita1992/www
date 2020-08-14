package selenium.step6;

import org.openqa.selenium.By;
import org.openqa.selenium.Platform;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.DesiredCapabilities;

public class FindByClassName
{
    public static void main(String[] args)
    {
        String baseUrl = "https://world.taobao.com/";
        DesiredCapabilities caps = DesiredCapabilities.chrome();
        caps.setPlatform(Platform.WINDOWS);
        caps.setBrowserName("chrome");

        WebDriver driver = new ChromeDriver(caps);
        driver.manage().window().maximize();
        driver.get(baseUrl);

        //用classname来定位元素
//        driver.findElement(By.className("header_bar-locale dropdown")).click();
//        driver.findElement(By.xpath("//*[@class='header_bar-locale dropdown']")).click();
        driver.findElement(By.tagName("a")).click();
    }
}
