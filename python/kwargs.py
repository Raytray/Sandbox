def test(the_string, **kwargs):
    return_string = []
    return_string.append(the_string)
    for arg in kwargs:
        return_string.append(arg)
        return_string.append(kwargs[arg])
    print ' '.join(return_string)

test("awesome", Me="you", tv="on")
