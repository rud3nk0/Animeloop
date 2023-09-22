import React from "react";

import {useEffect, useState} from "react";
import "./VoiceActing.css"

function VoiceActing(){

    const [voiceActings, setVoiceActing] = useState([]);

    useEffect( ()=> {
        fetch('http://127.0.0.1:8000/api/voiceActing')
            .then(response => response.json())
            .then(data=>setVoiceActing(data))
            .catch(error=>console.error(error));
    }, [])

    // Функция для выбора двух случайных элементов из массива
    const getRandomNames = () => {
        const shuffled = voiceActings.sort(() => 0.5 - Math.random()); // Перемешиваем массив случайным образом
        return shuffled.slice(0, 2); // Выбираем первые два элемента
    };

    const randomNames = getRandomNames(); // Получаем два случайных имени

    return(
        <>
            {randomNames.map(voiceActing =>(
                <div className="wrapper__recently__tags" key={voiceActing.id}>
                    <span>{voiceActing.name}</span>
                </div>
            ))}
        </>
    )
}

export default VoiceActing