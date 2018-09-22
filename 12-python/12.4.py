#!/usr/bin/python

print 'Content-type: text/html'
print ''

for i in range(5, 11):
    print i
    
print "Denis"

lieblingsEssen = ["Pizza", "Schokolade", "Eis"]

for essen in lieblingsEssen:
    print "Ich mag " + essen + "."
    

x = 0
while x <=10:
    print x
    x += 1
    
# Dictionary mit 4 Namen (key) und dem Alter (values) von Personen
# Loop der z.b. ausgibt:  Denis ist 28

alter = {}
alter["Denis"] = 28
alter["Hans"] = 35
alter["Heidi"] = 80
alter["Michi"] = 50

for alt in alter:
    print alt + " ist " + str(alter[alt])
    
# IF-Statement
name = "Susi"
if name == "Susi":
    print "Hallo" + name
else:
    "Ich kenne dich nicht!"