#!/usr/bin/python

print 'Content-type: text/html'
print ''

alter = 28

print alter

pi = 3.14

print pi * alter

name = "Denis"

print name

print alter /pi

nummer = "5.5"

print float(nummer) * alter

str = "Mein Name ist "

print str[0]
print str[0:7]
print str[7]

print str + name

meineListe = ["Denis", "Hans", "Sissy", "Heidi"]

print meineListe

print meineListe[1]
print meineListe[2:4]

myTuple = (1,2,2,4)

print myTuple
print myTuple[2]

meineListe[2] = 5

print meineListe


dict = {}
dict["Vater"] = "Denis"
dict["Mutter"] = "Nasrin"
dict[1] = "Michi"
dict[2] = "Sissi"

print dict["Vater"]

print dict.keys()
print dict.values()






















