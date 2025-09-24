def fibonacci_while(nterms):
    a, b = 0, 1
    count = 0
    if nterms <= 0:
        print("Please enter a positive integer.")
    elif nterms == 1:

        print("Fibonacci sequence up to", nterms, ":")
        print(a)
    else:
        print("Fibonacci sequence:")
        while count < nterms:
            print(a, end=" ")
            nth = a + b
            a = b
            b = nth
            count += 1

# Example usage:
fibonacci_while(10)
