#!/usr/bin/python

print ('Content-type: text/html')
print ('')

import cgi
form = cgi.FieldStorage()

if "versuch" in form:
    versuch = form.getvalue("versuch")
else:
    versuch = ""    