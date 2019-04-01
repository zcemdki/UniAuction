from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.common.exceptions import NoSuchElementException
from selenium.webdriver.support.ui import Select

import bs4
from bs4 import BeautifulSoup

import sched, time
import datetime
from tqdm import tqdm

import re
import csv
from strgen import StringGenerator


email = 'km@gmail.com'
password = 'password'
item_name = "MacBook Pro"
price = StringGenerator('[0-9]{0:3}').render()
searchname = "MacBook"
desc = "slight dent"


def logIn():
	#EMAIL INPUT
	email_ = driver.find_element_by_id('email_login')
	email_.click()
	email_.send_keys(email)
	print("Inputting Email")


	#PASSWORD INPUT
	pass_ = driver.find_element_by_id('password_login')
	pass_.click()
	pass_.send_keys(password)
	print("Inputting Password")

	#LOGGING IN
	pass_.send_keys(Keys.RETURN)
	print("Logging In")

	#WAITING
	print("Waiting")


def sellItem():
		print("Inputting Item Name")
		itemname = driver.find_element_by_xpath("""/html/body/div/form/div[1]/input""")
		itemname.send_keys(item_name)

		print("Inputting Item Category")
		select = Select(driver.find_element_by_xpath("""/html/body/div/form/div[2]/select"""))
		# select by visible text
		select.select_by_visible_text('Electronics & Computers')

		print("Inputting Item Price")
		itemprice = driver.find_element_by_xpath("""/html/body/div/form/div[3]/input""")
		itemprice.click()
		itemprice.send_keys(price)		

		print("Inputting Item Description")
		itemdesc = driver.find_element_by_xpath("""/html/body/div/form/div[5]/input""")
		itemdesc.click()
		itemdesc.send_keys(desc)	

		print("Inputting Item Condition")
		select = Select(driver.find_element_by_xpath("""/html/body/div/form/div[6]/select"""))
		# select by visible text
		select.select_by_visible_text('New')

		print("Uploading Image")
		uploadImage = driver.findElement_by_xpath("""/html/body/div/form/div[7]/input""");
		uploadImage.sendKeys("C:\\Users\\tariq\\Desktop\\500NCentre.png");
		
		print("Submitting Item")
		submitbutton = driver.find_element_by_xpath("""//*[@id="addItem"]""")
		submitbutton.click()


		


print("Starting Tool at: " + datetime.datetime.now().strftime("%H:%M:%S"))

driver = webdriver.Chrome()

driver.get("http://uniauction.co.uk/login.php")
print("Opening site")		

#Run Login Function
logIn();

#CHECK IF SUCCESSFUL
try:
    #SELL ITEM
	sell_ = driver.find_element_by_xpath("""/html/body/nav/div/div[2]/ul[1]/li[3]/a""")
	sell_.click()
	print("Opening Sell Item Page")

	try:
		element=driver.find_element_by_xpath("""/html/body/div/h2""")
		print("On the Sell Item Page")

		#Run Sell Item Function
		sellItem();

	except: NoSuchElementException
	print("Couldn't Open Sell Item Page")

except NoSuchElementException:

	print("Logging In Failed")
