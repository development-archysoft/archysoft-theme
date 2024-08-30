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
        driver.get("https://www.archysoft.com")
        self.assertIn("Low-Code/No-Code Development Services", driver.title)

    def test_login(self):
        driver = self.driver
        driver.get("https://www.archysoft.com/wp-login.php")
        elem = driver.find_element(By.NAME, "log")
        elem.send_keys("Elena")
        elem = driver.find_element(By.NAME, "pwd")
        elem.send_keys("F2s28OsW6t67N5PUWw4NOI")
        elem.send_keys(Keys.RETURN)
        self.assertIn("Dashboard", driver.title)

    def test_vacancies_forms_on_child_pages(self):
        driver = self.driver
        driver.get("https://www.archysoft.com/vacancies/")

        child_links = driver.find_elements(By.CSS_SELECTOR, "a[href*='/vacancies/']")

        for link in child_links:
            child_url = link.get_attribute("href")
            if child_url and "https://www.archysoft.com/vacancies/" in child_url:
                driver.get(child_url)

                try:
                    name_input = driver.find_element(By.NAME, "name")
                    email_input = driver.find_element(By.NAME, "email")
                    message_input = driver.find_element(By.NAME, "message")

                    name_input.send_keys("Test User")
                    email_input.send_keys("testuser@example.com")
                    message_input.send_keys("This is a test message.")

                    submit_button = driver.find_element(By.NAME, "submit")
                    submit_button.click()

                    success_message = driver.find_element(By.ID, "success-message")
                    self.assertIn("Thank you", success_message.text)

                except Exception as e:
                    print(f"Form on page {child_url} not found or error occurred: {str(e)}")

    def tearDown(self):
        self.driver.quit()

if __name__ == "__main__":
    unittest.main()
