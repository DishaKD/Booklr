function changequantity(id){
    console.log("hello",id);
    // console.log("hello",document.querySelector(`.${id}`).value);

    // total-ammount
    document.querySelector(`.total${id}`).innerText=document.querySelector(`.price${id}`).innerText * document.querySelector(`.quantity${id}`).value
    
    const totals=document.querySelectorAll(".total-price-ammount")
    let total=0
    totals.forEach((element)=>{
        total+=Number(element.innerText)
    })
    document.querySelector(`.total-ammount`).innerText=total+60
    document.querySelector(`.subtotal-ammount`).innerText=total
    console.log("tot",totals)
}