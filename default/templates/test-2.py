import requests

results = requests.get("http://twitter.com/login")
print results.text