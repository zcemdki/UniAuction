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


email = 'km@gmail.com'
password = 'password'

searchname = "MacBook"

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


def searchItem():
		print("Searching for Item")
		searchbar = driver.find_element_by_xpath("""//*[@id="item"]""");
		searchbar.click()
		searchbar.send_keys(searchname)
		searchbar.send_keys(Keys.RETURN)

def addToCart():
		print("Adding to Cart")
		cartbutton = driver.find_element_by_xpath("""/html/body/div/div/section/div/div/div[1]/div/div/div[2]/div[2]/a""");
		cartbutton.click()
		print("Item Added To Cart")



print("Starting Tool at: " + datetime.datetime.now().strftime("%H:%M:%S"))

driver = webdriver.Chrome()

driver.get("https://www.uniauction.co.uk/login.php")
print("Opening site")	

#Run Login Function
logIn();

#CHECK IF SUCCESSFUL

print("Logged In")

#Run Sell Item Function
searchItem();

try:
	element=driver.find_element_by_xpath("""/html/body/div/div/nav/div/div/label""")
	print("Search Successful")


	try:
	addToCart();

	print("Item Added To Cart Successfully")

	except:NoSuchElementException
	print("Couldn not add item to cart")

except: NoSuchElementException
print("Could not execute search")
