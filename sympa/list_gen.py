import csv

response_file = "responses.csv"
out_file = "emaillist.txt"

mydict = {}

with open(response_file, 'rb') as csvfile:
    response_reader = csv.reader(csvfile, delimiter=",")
    for row in response_reader:
        mydict[row[0]] = row[1]

with open(out_file, 'wb') as outfile:
    for key in mydict:
        outfile.write("{} {}".format(key, mydict[key]))
