#!/usr/bin/env python

fhand=open("./wificred.txt")
cred=fhand.read()
cred=cred.split("\n")
ssid=cred[0]
psk=cred[1]
fhand.close()

fhand=open("/etc/wpa_supplicant/wpa_supplicant.conf")
wpadata=fhand.read()
wpadata=wpadata.split("\n")
fhand.close()

for line in wpadata :
    if line.startswith("\tssid") :
        line="\tssid = "+ssid
    if line.startswith("\tpsk") :
        line="\tpsk = "+psk

fhand=open("/etc/wpa_supplicant/wpa_supplicant.conf", "w")

for line in wpadata :
    fhand.write(line+"\n")
fhand.close()

print("Settings Updated successfully")
