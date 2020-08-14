package selenium;

import org.openqa.selenium.Platform;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.DesiredCapabilities;

public class ChromeDriverDemo
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
    }
}
