function Change(){
    function textChange(event){
        document.querySelector('#status').textContent=event.target.value;
    }
    return (
        <>
            <h2>Text Box Change Event</h2>
            <label htmlFor="txt">Text Box</label>
            <input type="text" id="txt" name="txt" onChange={textChange} />
            <p id="status"></p>
        </>
    )
}
export default Change