import subprocess
import shlex

fmailpy=open("mail.py")
fmainpy=open("main.py")
finputdata=open("inputdata.txt")
inputdata=finputdata.read()
inputdata=inputdata.split()
finputdata.close()

mailpy=fmailpy.read()
fmailpy.close()
mailpy=mailpy.split("\n")
mainpy=fmainpy.read()
fmainpy.close()
mainpy=mainpy.split("\n")

mailpy[6]="fromEmail = "+"\'"+inputdata[1]+"\'"
mailpy[9]="fromEmailPassword = "+"\'"+inputdata[2]+"\'"
mailpy[12]="toEmail = "+"\'"+inputdata[3]+"\'"
mainpy[8]="email_update_interval = "+inputdata[0]+" # sends an email only once in this time interval"

fmailpy=open("mail.py",'w')
for item in mailpy :
    fmailpy.write(item+"\n")
fmailpy.close()

fmainpy=open("main.py",'w')
for item in mainpy :
    fmainpy.write(item+"\n")
fmainpy.close()

subprocess.call(shlex.split('./restartprocess.sh'))
