// function Test() {
//   const test = document.querySelector("#test");
//   if (test.textContent === "Hello World") {
//     test.textContent = "Javascript";
//   } else {
//     test.textContent = "Hello World";
//   }
//   const person = {
//     name: "Chanthat",
//     age: 24,
//     sayHello: function () {
//      const say=`Hello my name is ${this.name}, \nI'm ${this.age} years old.`;
//      return say;
//     },
//   };
//   alert(person.sayHello());
//   };
// const btnClick=document.querySelector("#btn");

// const person = {
//   name: "Chanthat",
//   age: 24,
//   sayHello: function () {
//    const say=`Hello my name is ${this.name},\nI'm ${this.age} years old.`;
//    return say;
//   },
// };
// console.log(person.sayHello());

// function ma(){
//   return (Math.floor(Math.random()*(6-1+1))+1);
// }
// console.log(ma());
let images=["buildinga.jpg","cameronyhall.jpg","ifl.jpg","cjcc.jpg","ckcc.jpg"];
let j=1;
const btn=document.querySelector("#btn");
const da=document.querySelector("#da");
function styleChange(){
  da.setAttribute("style","background-image: url('../image/"+images[j]+`');border: ${da.style.border}`);
  j=(j+1)%5;
};
let colors=[
  ["black","pink"],
  ["white","blue"],
  ["black","greenyellow"],
  ["white","red"],
  ["black","orange"],
  ["white","purple"],
  ["black","yellow"],
  ["white","black"]
  ];
  let k = 0;
  setInterval(()=>{
      da.style.border="5px solid "+colors[k][1];
      btn.style.color=colors[k][0];
      btn.style.backgroundColor=colors[k][1];
      k=(k+1)%8;
  },2000);
