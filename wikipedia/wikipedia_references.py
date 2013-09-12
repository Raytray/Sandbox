import wikipedia
import tldextract
import pprint

from collections import defaultdict

reference_list = []
count = 0

reference_dict = defaultdict(int)


while len(reference_list) < 1000 or count < 200:
    try:
        random_page = wikipedia.page(wikipedia.random())
        print random_page.title
        count += 1
        try:
            reference_list.extend(random_page.references)

        except:
            continue

    except:
        continue

print "total refs:", len(reference_list), "total pages:", count


for ref in reference_list:
    reference_dict[tldextract.extract(ref).domain] += 1

pprint.pprint(dict(reference_dict))
