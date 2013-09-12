import wikipedia
import tldextract

reference_list = []
count = 0

while len(reference_list) < 500 or count < 100:
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
