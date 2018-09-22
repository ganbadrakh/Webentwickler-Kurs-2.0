#!usr/bin/python

print ('Content-type: text/html')
print ('')

def sageHallo():
    print ("Hallo!")

sageHallo()

def sageEtwas(etwas):
    print (etwas)

sageEtwas("Wie geht es dir?")

def multiplikationVonZwei(x,y):
    return x * y

print (multiplikationVonZwei(4,6))

# Funktion von hoechsten gemeinsamen nenner

def hoechsterGemeinsamerNenner(x,y):
    for i in range (1, x+1):
        if x % i == 0 and y % i == 0:
            hgn = i
    return hgn
print (hoechsterGemeinsamerNenner(15,10))

# globale Variable vs. lokale Variable

a = 5
b = 6

def addiereZweiZahlen():
    a = 10
    c = 7
    return a+ b

print (addiereZweiZahlen())

print (a) 

print (c)

# c wird nicht ausgegeben