class car:

    wheels = 4 #Class Variable

    def __init__(self,name):
        self.name = name #instance varibale


#object create
o1 = car("Audi")
print(o1.wheels)
o2 = car("BMW")
print("old:",end="")
print(o2.wheels)
o2.wheels = 3
print(o2.wheels)
print(car.wheels)