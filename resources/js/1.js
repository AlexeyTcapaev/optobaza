function counter()
{
   var num = 0;
   return function()
   {
      return ++num;
   }
}

var c = counter();

console.log(c()); 	:____________
console.log(c());	:____________
console.log(c());	:____________
