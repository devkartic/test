import React from 'react';

const Ninjas = ({ninjas}) => {

    const ninjaList = ninjas.map(ninja => {
        if(ninja.age>30){
            return(
            <div className="Ninjas" key={ninja.id}>
                <div>Id : { ninja.id }</div>
                <div>Name : { ninja.name }</div>
                <div>Age : { ninja.age }</div>
                <div>Age : { ninja.job }</div>
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
