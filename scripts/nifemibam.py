import sys
import json

x = sys.argv[1]

def hngname(format):
    if format == 'html':
        response = "<h1>Hello world, this is nifemi with HNG ID 12345 using Python for task 2</h1>"
    elif format == 'json':
        data = {"details":"Hello world, this is nifemi with HNG ID 12345 using Python for task 2  "}
        response = json.dumps(data)
    print response

hngname(x)