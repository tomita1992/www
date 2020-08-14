package selenium.step6;

import org.openqa.selenium.By;
import org.openqa.selenium.Platform;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.DesiredCapabilities;

public class FindByLinkText
{
    public static void main(String[] args)
    {
        String baseUrl = "https://www.yahoo.com";
        DesiredCapabilities caps = DesiredCapabilities.chrome();
        caps.setBrowserName("chrome");
        caps.setPlatform(Platform.WINDOWS);

        WebDriver driver = new ChromeDriver();
        driver.manage().window().maximize();
        driver.get(baseUrl);

        //只限获取a链接内部的文本
//        driver.findElement(By.linkText("Mail")).click();
        //只限获取a链接内部的部分文本
        driver.findElement(By.partialLinkText("Sign")).click();
    }
}
