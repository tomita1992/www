package com.expedia.flightsbooking;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.safari.SafariDriver;
import org.testng.annotations.AfterClass;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.Test;

import pageclasses.SearchPage;

public class TestNG_TestSuite {
	private WebDriver driver;
	private String baseUrl;
//	private static final Logger log = LogManager.getLogger(TestNG_TestSuite.class.getName());

	@BeforeClass
	public void beforeClass() {
//		System.setProperty("webdriver.chrome.driver", "/Users/gaoyan/eclipse-workspace/driver/chromedriver");
		driver = new ChromeDriver();
		baseUrl = "https://www.expedia-cn.com/";

		// Maximize the browser's window
		driver.manage().window().maximize();
		driver.manage().timeouts().implicitlyWait(15, TimeUnit.SECONDS);
		driver.get(baseUrl);
	}

	@Test
	public void fillBasicInfo() throws Exception {
		SearchPage.navigateToFlightsTab(driver);
		SearchPage.fillOriginTextBox(driver, "New York");
		SearchPage.fillDestinationTextBox(driver, "Chicago");
		SearchPage.fillDepartureDateTextBox(driver, "10/30/2018");
		SearchPage.fillReturnDateTextBox(driver, "10/30/2018");
	}

	@AfterClass
	public void afterClass() {
//		driver.quit();
	}

}
