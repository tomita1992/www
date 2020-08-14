package selenium;

//导入WebDriver的包之后需要设置系统的属性
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;

public class FireFoxDriver
{
    public static void main(String[] args)
    {
        //定义WebDriver类型的引用
        WebDriver driver;
        //设置系统的属性 参数是键值对类型 需要注意大小写 值为geckodriver.exe的路径
        //使用火狐浏览器时需要设置webdriver.gecko.driver 使用其他浏览器的时候也要设置相对应的键
        System.setProperty("webdriver.gecko.driver", "C:\\Selenium\\geckodriver.exe");
        //创建一个FirefoxDriver的实例 相当于打开火狐浏览器
        driver = new FirefoxDriver();
        //传入网站的url
        String baseUrl = "http://www.baidu.com";
        //用get方法打开这个网站 打开网址所指向的应用程序 相当于打开网页
        driver.get(baseUrl);
        //运行就可以打开网站
    }
}
