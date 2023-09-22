import "./StatickBanner.css"
import React, { useState, useEffect } from 'react';

import VoiceActing from "./VoiceActing";

function StatickBanner(){

    const futureDate = new Date();
    futureDate.setDate(futureDate.getDate() + 658);

    const calculateTimeRemaining = () => {
        const currentTime = new Date();
        const timeDifference = futureDate - currentTime;

        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        return { days, hours, minutes, seconds };
    };

    const [timeRemaining, setTimeRemaining] = useState(calculateTimeRemaining());

    useEffect(() => {
        const timerInterval = setInterval(() => {
            setTimeRemaining(calculateTimeRemaining());
        }, 1000);

        return () => clearInterval(timerInterval);
    }, []);

    return(
        <div className="wrapper__statick">
            <div className="wrapper__statick__info">
                <h1 className="wrapper__statick__title">ATTACK ON<br/>
                    TITANS</h1>
                <p className="wrapper__statick__subtitle">Season 4</p>
                <p className="wrapper__statick__description">Dark fantasy, Post Apocalyptic</p>
                <div className="wrapper__statick__tags">
                    <VoiceActing/>
                </div>
                <p className="TimeRemeining">{timeRemaining.days} дней {timeRemaining.hours} часов {timeRemaining.minutes} минут {timeRemaining.seconds} секунд</p>
            </div>
        </div>
    )
}

export default StatickBanner;