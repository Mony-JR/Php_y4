import React from 'react'

const FrontEnd = () => {
    const front_ends=['HTML','CSS','Javascript','Bootstrap','React(JS)'];

  return (
    <ul>
      {front_ends.map((front_ends,index)=>{
        <li key={index}>{front_ends}</li>
      })}
    </ul>
  )
}

export default FrontEnd
