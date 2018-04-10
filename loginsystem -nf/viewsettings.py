import re
e = open("../mail.py","r")
x=list()
fetchlist=list()
for line in e.readlines():
    if line.startswith("fromEmail"):
        fetchlist = re.findall('\s+\S\s\S([a-z 0-9].+@[a-z.]+)',line)
        '''x.append(fetchlist[0])
    if line.startswith("fromEmailPassword"):
        fetchlist = re.findall(["\S"],line)
        x.append(fetchlist[1])
    if line.startswith("toEmail"):
        fetchlist = re.findall('[a-z 0-9]+@[a-z]+)',line)
        x.append(fetchlist[2])
        break'''
print(len(fetchlist))
print(x)
