import math


a = "Hello, World"

print(a[1])

#looping through a string

for x in "banana":
    print(x)

a = "Hello World"
print(len(a))
print("Hello" in a)
print(a[2:5])
print(a[-5:-2])

def printElections(votesA , votesB , votesC):
    total = votesA + votesB + votesC

    if votesA > 0.5 * total:
        print("Cantidate A wins the elections!")
    elif votesB > 0.5 * total:
        print("Cantidate B wins the elections!")
    elif votesC > 0.5 * total:
        print("Cantidate B wins the elections!")
    elif votesA > votesC and votesB > votesC:
        print("Cantidate A and B go through second round of elections!")
    elif votesA > votesB and votesC > votesB:
        print("Cantidate A and C go through second round of elections!")
    elif votesC > votesA and votesB > votesA:
        print("Cantidate B and C go through second round of elections!")

printElections(20000, 25000 , 1700)


c=" Hello, World!"
print(c.upper())
print(c.lower())
print(c.strip())
print(a.split(","))

quantity = 3
itemno = 567
price = 49.95
myorder = "I want {} pieces of item {} for {} dollars."
print(myorder.format(quantity, itemno, price))


def sumOfSeries(n):
    s = 0
    for i in range(1 , 3*n , 3):
        s += i / ((i+1) * (i+2))
    return s

s = sumOfSeries(100)
print(s)


def f(n):
    res=0
    for i in range(n , 0 , -1):
        res = math.sqrt(i**3 + res)
    return res

print(f(100))

def representativeValue(list):
    avg = sum(list) / len(list)
    return min(list , key = lambda x : abs(x-avg))
L1 = [9, 12.75, 14.25, 6.3, 15.2, 8.5, 20.5, 5.9, 7.8, 16.4]
print(representativeValue(L1))

def cumulativeAvg(list2):
    return[sum(list2[0:k])/ k for k in range(1, len(list2)+1)]

L1 = [6, 7, 2, 4, 3]
print(cumulativeAvg(L1))