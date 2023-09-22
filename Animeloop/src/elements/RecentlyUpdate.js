import "./RecentlyUpdate.css"

import React, {useEffect, useState} from "react";
import {Link} from 'react-router-dom';

import VoiceActing from "./VoiceActing";


function RecentlyUpdate() {

    const [posts, setPost] = useState([]);
    const [categories, setCategory] = useState([]);

    useEffect(() => {
        fetch(`http://127.0.0.1:8000/api/post`)
            .then(response => response.json())
            .then(data => {
                const filteredPosts = data.filter(post => post.category_id === 1);
                setPost(filteredPosts);
            })
            .catch(error => console.error(error));

        setTimeout(() => {
            fetch("http://127.0.0.1:8000/api/category")
                .then(res => res.json())
                .then(data => {
                    const filteredCategories = data.filter(category => category.name === "Recently Updated");
                    setCategory(filteredCategories);
                })
                .catch(error => console.error(error));
        }, 1000);
    }, []);

    // Show Update Day
    const [dateTime, setDateTime] = useState('');

    useEffect(() => {
        const now = new Date();
        const day = now.getDate();
        const monthAbbreviation = now.toLocaleString('en-US', { month: 'short' }).toUpperCase();
        const year = now.getFullYear();
        const dayOfWeek = now.toLocaleString('en-US', { weekday: 'long' }).toUpperCase();

        const formattedDate = `${dayOfWeek} ${day} ${monthAbbreviation} ${year}`;

        setDateTime(formattedDate);
    }, []);



    return (
        <>
            <div className="wrapper__recently">
                <div className="wrapper__title">
                    {categories.map(category => (
                        <h1 className="title" key={category.id}>
                            {category.name}
                        </h1>
                    ))}
                    <p className="subTitle">
                        {dateTime}
                    </p>
                </div>
                <div className="wrapper__recently_scrollSection">
                    <div className="wrapper__recently__row">
                        {posts.map(post => (

                            <div className="recently__card" >
                                <Link key={post.id} to={`/post/${post.id}`}>
                                    <div className="card__img">
                                        <img className="card__image" src={post.image} alt=""/>
                                    </div>
                                </Link>
                                    <div className="card__miniNav">
                                       <VoiceActing/>
                                    </div>
                                    <div className="animeName">
                                        <p className="title__anime">
                                            {post.name}
                                        </p>
                                    </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        </>
    )
}

export default RecentlyUpdate