import urllib2
response = urllib2.urlopen('https://twitter.com/login')
# print response.info()
html = response.read()
# print html
# do something
#begin = html.find('authenticity')
#print begin
#begin = begin - 1000
#print begin

str1 = "authenticity"
str2 = 'value="'
begin = html.find(str1)
print begin
end = html.find(str2,begin)
print end

auth = html[end+7:end+47]
print auth
#end2 = html.find(str1,begin)
#begin2 = html.find(str2,begin-200)

#auth2 = html[begin2+7:begin2+47]
#print auth2


#file = open("newfile.txt", "w")

#file.write(html)

#file.close()
#response.close()  # best practice to close the file
