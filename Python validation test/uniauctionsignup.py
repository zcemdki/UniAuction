from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.common.exceptions import NoSuchElementException

import bs4
from bs4 import BeautifulSoup

import sched, time
import datetime
from tqdm import tqdm

import re
import csv
from strgen import StringGenerator

#SIGNUP TESTING
def typer():
	csvFile = open('uniauctiontesting.csv', 'a+', newline='')
	writer = csv.writer(csvFile)
	writer.writerow((firstname, lastname, email, password, state))
	csvFile.close()

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

for i in range(1):

	firstname = StringGenerator('[\c]{0:8}').render()
	lastname = StringGenerator('[\c]{0:8}').render()
	email = StringGenerator('([\c]{2:8}@[\c]{3:8}.(com|net|org|co.uk))|([\c]{3:8}@[\c]{2:4}.(ac.uk))').render()
	password = StringGenerator('[\w\p]{1:8}&[\p]{0:2}').render()

	print("firstname = " + firstname)
	print("lastname = " + lastname)
	print("email = " + email)
	print("password = " + password)


	print("Starting Tool at: " + datetime.datetime.now().strftime("%H:%M:%S"))

	#writer.writerow(('Date', 'Time', 'Population', ))

	driver = webdriver.Chrome()

	driver.get("www.uniauction.co.uk/register.php")

	#FIRSTNAME INPUT
	first_name = driver.find_element_by_xpath("""//*[@id="home"]/div/div[1]/article/form/div/div[1]/input""")
	first_name.click()
	first_name.send_keys(firstname)
	print("Signup Firstname inputted")

	#LASTNAME INPUT
	last_name = driver.find_element_by_id("""//*[@id="home"]/div/div[1]/article/form/div/div[2]/input""")
	last_name.click()
	last_name.send_keys(lastname)
	print("Signup Lastname inputted")

	#EMAIL INPUT
	email_ = driver.find_element_by_id("""//*[@id="home"]/div/div[1]/article/form/div/div[3]/input""")
	email_.click()
	email_.send_keys(email)
	print("Signup Email inputted")


	#PASSWORD INPUT
	pass_ = driver.find_element_by_id("""//*[@id="home"]/div/div[1]/article/form/div/div[4]/input""")
	pass_.click()
	pass_.send_keys(password)
	print("Signup Password inputted")

	#CONFIRM PASSWORD INPUT
	confpass_ = driver.find_element_by_id("""//*[@id="home"]/div/div[1]/article/form/div/div[5]/input""")
	confpass_.click()
	confpass_.send_keys(password)
	print("Signup Confirm Password inputted")

	#SIGNING UP
	print("Signing Up")
	pin.send_keys(Keys.RETURN)

	#WAITING
	print("Waiting")
	time.sleep(5)

	#CHECK IF SUCCESSFUL
	try:
		element=driver.find_element_by_xpath("""...""")

		#Calls Login Function
		logIn();

		try:
			element=driver.find_element_by_xpath("""/html/body/nav/div/div[2]/ul[1]/li[3]/a""")
			state = "signup & login"
			typer();
			print("Successfully signed up and logged in!")

		except: NoSuchElementException
		state = "signup"
		typer();
		print("Log in Failed")


	except NoSuchElementException:
		state = "failed"
		typer();
		print("Sign up Failed")


