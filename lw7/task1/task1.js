let n;

function isPrimeNumber(n) {
  let isPrime;
  if (typeof n == 'number') {
    if (n != 1 && n != 0) {
      for (let i = 2; i <= n; i++) {
        isPrime = true;
        for (let j = 2; j < i; j++) {
          if (i % j == 0) {
            isPrime = false;
            break;
          }
        }
      }
      if (isPrime) {
        console.log(n + '-prime=true');
      } else {
        console.log(n + '-prime=false');
      }
    } else {
      console.log('exception');
    }
  }
  if (typeof n == 'object') {
    for (val of n) {
      if (val != 1 && val != 0) {
        for (let i = 2; i <= val; i++) {
          isPrime = true;
          for (let j = 2; j < i; j++) {
            if (i % j == 0) {
              isPrime = false;
              continue;
            }
          }
        }
        if (isPrime) {
          console.log(val + '-prime;');
        } else {
          console.log(val + '-not prime;');
        }
      } else {
        console.log('exception');
      }
    }
  }
}