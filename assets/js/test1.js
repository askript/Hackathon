"use strict"; 

let text1 = '<a href="https://example.com">Website</a>';
let text2 = '<a href="https://example.com">Website</a>';
let text3 = '<a href="https://example.com">Website</a>';
let text4 = '<a href="https://example.com">Website</a>';
let text5 = '<a href="https://example.com">Website</a>';
let text6 = '<a href="https://example.com">Website</a>';
let text7 = '<a href="https://example.com">Website</a>';

let currentText  = [text1,text2,text3,text4,text5,text6];


    let n = 0;
    let x = 0;
    let count=0;
    let correction = "";
    
    let numberQuestion = document.getElementsByName('choix'+n);
   
    
    let b1=document.getElementsByName('q'+x);

    let b2=document.getElementsByName('q');
    
    let score1 = 0;





function test(f) {
    const values3 = [];
    console.log(b2.length)
    while(x < b2.length) {

        let values2= "";
        let values = [];
        let rep;
        let t1=document.getElementsByName('choix'+n);

        let t2= t1.length;
        let b1=document.getElementsByClassName('q');
        let d1=document.getElementsByClassName('q'+n);
        console.log(d1);
      
        
        
        console.log(b1[0])
        



    for (let i=0; i<t2; i++) { 
        let c1 =document.getElementById(n+"l"+i)
        
        if (t1[i].value==1 && t1[i].checked==false) {

            console.log('bouuh');
            console.log(c1);
                       c1.style.cssText="color:red;"
                       rep = false;
        }   else if (t1[i].value==0 && t1[i].checked==true) {
                    c1.style.cssText="color:red;"
                    rep = false;
            }   else {
                console.log('baaaah');
                console.log(n);
                console.log(i);
                console.log(c1);
                 c1.style.cssText="color:green;"
                 rep = true;   
                } 
                console.log(rep);
        if (rep == true) {
            console.log("hey");

            correction = 1;
            
      
        }   else {

            console.log("h");
                correction = 0;
                // b1[x].style.cssText="color:green;"
                //css red on question
            }

        if (correction == 1) {
        values.push('1');


        } else { 
        values.push('0');
        
        // push inner HTML lien cours specifique 
        }

        
        
    } 


    for (let i=0; i<= values.length; i++) { 

        if (values[i] == 0){
            values2=0
        } 
    }

    
    if (values2 === 0 ) {
        let newlabel = document.createElement("label");
        
           
        b1[x].appendChild(newlabel);
        newlabel.innerHTML = currentText[x];
        values3.push('0');
    } else {
        values3.push('1')
        
    }

 
    n++;
   
//    t1 = document.getElementsByName('choix'+n);
//    t2= t1.length;
   x++;
//    b1=document.getElementsByName('q'+x);
//    console.log(values3);
//    values = [];
    }

    
for(let i = 0 ; i < values3.length ; i++ )
    if (values3[i] == 1){
     score1 += 1
    
}
let doc = document.getElementById("scoreX");
console.log(doc)
doc.classList.toggle("scoreX");
document.getElementById("total").innerHTML=values3.length;
document.getElementById("sum").innerHTML=score1;

//

document.getElementById("earned_SQL").value = score1;
document.getElementById("max_SQL").value = values3.length;

let submit_SQL = document.querySelector('#submit_SQL')
document.querySelector("#result_SQL").style.display = 'block'
submit_SQL.addEventListener('click', () => submit_SQL.style.display = 'none')
}
