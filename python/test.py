test = "a"

def noglob():
    print test

def setnoglob():
    test = "b"
    print test

def yesglob():
    global test
    test = "c"
    print test

noglob()
setnoglob()
noglob()
yesglob()
noglob()
