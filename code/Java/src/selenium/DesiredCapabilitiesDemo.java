package selenium;


import org.openqa.selenium.Platform;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.remote.DesiredCapabilities;

public class DesiredCapabilitiesDemo
{
    public static void main(String[] args)
    {
        WebDriver driver;
        //设置网址
        String baseUrl = "http://www.baidu.com";
        //创建一个DesiredCapabilities的实例
        DesiredCapabilities caps = DesiredCapabilities.firefox();
        //设置系统的属性
        System.setProperty("webdriver.gecko.driver", "C:\\Selenium\\geckodriver.exe");
        //设置浏览器的名字
        caps.setBrowserName("firefox");
        //设置平台
        caps.setPlatform(Platform.WINDOWS);
        //创建一个FirefoxDriver的实例 相当于打开火狐浏览器
        driver = new FirefoxDriver(caps);
        //窗口最大化
        driver.manage().window().maximize();
        driver.get(baseUrl);
    }
}
