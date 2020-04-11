let n
let isPrime
 function isPrimeNumber(n)
 {
   if (typeof n == 'number')
   {
     for (let i = 2; i <= n; i++)
     {
       isPrime = true
       for (let j = 2; j < i; j++) 
       {
         if (i % j == 0) 
         {
           isPrime = false
           break
         }
       }
     }
     if (isPrime)
     {
       console.log(n+'-prime=true')
     }
     else
     {
       console.log(n+'-prime=false')
     }
   }
   if (typeof n == 'object')
   {
     for (val of n)
     {
       for (let i = 2; i <= val; i++)
       {
         isPrime = true
         for (let j = 2; j < i; j++) 
         {
           if (i % j == 0) 
           {
             isPrime = false
             continue
           }
         }
       }
       if (isPrime)
       {
         console.log(val+'-prime')
       }
       else
       {
         console.log(val+'-not prime')
       } 
     }
   }
 }