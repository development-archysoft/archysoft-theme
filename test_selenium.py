from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import unittest

class WordPressTest(unittest.TestCase):
    def setUp(self):
        chrome_options = Options()
        chrome_options.add_argument("--headless")
        chrome_options.add_argument("--no-sandbox")
        chrome_options.add_argument("--disable-dev-shm-usage")
        chrome_options.add_argument("--remote-debugging-port=9222")

        self.driver = webdriver.Chrome(options=chrome_options)

    def test_home_page(self):
        driver = self.driver
        driver.get("http://stage.archysoft.com.ua")
        self.assertIn("Stage", driver.title)

    def test_login(self):
        driver = self.driver
        driver.get("http://stage.archysoft.com.ua/wp-login.php")
        elem = driver.find_element(By.NAME, "log")
        elem.send_keys("admin")
        elem = driver.find_element(By.NAME, "pwd")
        elem.send_keys("z9EkDYv792")
        elem.send_keys(Keys.RETURN)
        self.assertIn("Консоль", driver.title)

    def tearDown(self):
        self.driver.quit()

if __name__ == "__main__":
    unittest.main()
