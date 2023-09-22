import React, {useEffect, useState} from "react";
import {Link} from "react-router-dom";

import './Manga.css'

function Manga(){
    const [posts, setPost] = useState([]);
    const [categories, setCategory] = useState([]);

    useEffect(() => {
        fetch(`http://127.0.0.1:8000/api/post`)
            .then(response => response.json())
            .then(data => {
                const filteredPosts = data.filter(post => post.category_id === 8);
                setPost(filteredPosts);
            })
            .catch(error => console.error(error));

        setTimeout(() => {
            fetch("http://127.0.0.1:8000/api/category")
                .then(res => res.json())
                .then(data => {
                    const filteredCategories = data.filter(category => category.name === "Manga");
                    setCategory(filteredCategories);
                })
                .catch(error => console.error(error));
        }, 1000);
    }, []);


    return(
        <div className="table_all_manga">
            {categories.map(category => (
                <h2 className="table_name">{category.name}</h2>
            ))}

            <div className="row_manga">
                {posts.map(post => (
                    <div className="recently__card" >
                        <Link key={post.id} to={`/post/${post.id}`}>
                        <div className="card__img">
                            <img className="card__image" src={post.image} alt=""/>
                        </div>
                        </Link>

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

export default Manga