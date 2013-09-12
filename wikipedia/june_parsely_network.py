import datetime

from pymongo import MongoClient, ASCENDING

mongo_connection = MongoClient()

db = mongo_connection['parsely_insights']
collection = db['refdomain_destinations']
collection.ensure_index([('date', ASCENDING),
                             ('referring_domain', ASCENDING),
                             ('hourly_pvs.total', ASCENDING),
                             ('num_unique_destinations.total', ASCENDING)])

june_start = datetime.datetime.strptime("2013-06-01", "%Y-%m-%d")
june_end = datetime.datetime.strptime("2013-06-30", "%Y-%m-%d")

print sum([x['hourly_pvs']['total'] for x in collection.find({"date": {"$gte": june_start, "$lte": june_end}, 'referring_domain': 'wikipedia.org'}, {'hourly_pvs.total': 1, '_id': 0})])
