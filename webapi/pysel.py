from selenium import webdriver
from selenium.webdriver.common.keys import Keys


browser = webdriver.Chrome(executable_path=r'C:\chromedriver.exe')
browser.get('https://thehackpack.azurewebsites.net/form')
#assert 'Nucleus' in browser.title
email = 'xxx@abcd.com'
elem = browser.find_element_by_name('vendoremail')  # Find the search box
elem.send_keys(email)
