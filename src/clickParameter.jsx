function ClickParamter(){
    function buttonClick(yearth,classname){
        const values=`Years : ${yearth},Class : ${classname}`;
        document.querySelector('#p1').textContent=values;
        document.querySelector('#btn2').textContent=`Button Clicked✌️`
    }
    return(
        <>
            <h2>Click Paramter</h2>
            <p id="p1"></p>
            <button id="btn2" onClick={()=>buttonClick(4,'E1')}>Click me😐</button>
        </>
    )
}
export default ClickParamter