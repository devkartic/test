import React from 'react';
import './ninjas.css'

const Ninjas = ({ninjas, deleteNinja}) => {

    const ninjaList = ninjas.map(ninja => {
        if(ninja.age>30){
            return(
            <div className="Ninjas" key={ninja.id}>
                <div>Id : { ninja.id }</div>
                <div>Name : { ninja.name }</div>
                <div>Age : { ninja.age }</div>
                <div>Age : { ninja.job }</div>
                <button onClick={() => {deleteNinja(ninja.id)}}>Delete Ninja</button> 
            </div>
            )
        } else {
            return null;
        }
    });

    // Ternery Operator Use
    // const ninjaList = ninjas.map(ninja => {
    //     return (ninja.age>30) ? (
    //         <div className="Ninjas" key={ninja.id}>
    //             <div>Id : { ninja.id }</div>
    //             <div>Name : { ninja.name }</div>
    //             <div>Age : { ninja.age }</div>
    //             <div>Age : { ninja.job }</div>
    //         </div>
    //     ): null;
    // })

    return(
        <div className="ninjaList">
            { ninjaList }
        </div>
    )
    
}


export default Ninjas;
