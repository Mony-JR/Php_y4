
function Greeting(props){
    return (
        <>
            <h2>Greeting to React JS</h2>
            <p>{`I'm a ${props.name}`}</p>
            <p>{`I'm a ${props.title}`}</p>

        </>
    )
}
export default Greeting