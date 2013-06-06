import facebook
import requests
import pprint #Only needed for debugging, remove later.

APP_ID = "secret"
APP_SECRET = "secret"
MY_ID = "secret"

def get_url_for_access():
    pass
    #return proper url for requesting all the needed permissions. --read_stream, --post on wall.

def get_token():
    request_url = "https://graph.facebook.com/oauth/access_token?client_id=" + APP_ID + "&client_secret=" + APP_SECRET + "&grant_type=client_credentials"
    token = requests.get(request_url)
    token = token.text.split("=")[1]
    return token

def main():
    token = get_token()
    graph = facebook.GraphAPI(token)

    profile = graph.get_object(MY_ID)
    friends = graph.get_connections(MY_ID, "friends")
    pp = pprint.PrettyPrinter(indent=4)

    pp.pprint(friends)

if __name__ == "__main__":
    main()
