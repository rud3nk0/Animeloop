import React, {useEffect, useState} from "react";

import './Anime.css'
import {Link} from "react-router-dom";
import VoiceActing from "./VoiceActing";

function Anime(){
    const [posts, setPost] = useState([]);

    useEffect( ()=> {
        fetch('http://127.0.0.1:8000/api/post')
            .then(response => response.json())
            .then(data=>setPost(data))
            .catch(error=>console.error(error));
    }, [])

    return(
        <div className="table_all_anime">
            <div className="table_post">
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
    )
}

export default Anime