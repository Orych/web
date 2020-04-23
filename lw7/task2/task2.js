let n

function calc(n){
  n = n.split(" ")
  console.log(n)
  let b
  let c
  b = Number(n[1])
  c = Number(n[2])
  console.log(b,c)
   switch (n[0]){
    case "+":
      return b+c;
    case "-":
      return b-c;
    case "*":
      return b*c;
    case "/":
      if(c != 0) {
        return b/c; 
      }
      else{
        return "На ноль делить нельзя"
        }
  }
}