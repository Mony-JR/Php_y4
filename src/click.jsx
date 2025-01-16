function Click(){
    function buttonClick(){
        document.querySelector('#btn').textContent=`Button Clicked`;

    }
    return (
        <>
            <h2>Click Event</h2>
            <button id="btn" onClick={buttonClick}>Click me!😒</button>
        </>
    );
}
export default Click