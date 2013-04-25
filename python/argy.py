import argparse

parser = argparse.ArgumentParser()
parser.add_argument("--test1", help="sdf", type=str)
parser.add_argument("--test2", help="sdfs", type=str)

args = parser.parse_args()

if args.test1 is not None:
    print "works"
if args.test2 is not None:
    print "workks2"
