import React, {useEffect, useState} from "react";
import onePiece_img from "../assets/OnePiece.png";
import VoiceActing from "./VoiceActing";
import {post} from "axios";
import {Link} from "react-router-dom";

function New (){
    const [posts, setPost] = useState([]);
    const [categories, setCategory] = useState([]);

    useEffect(() => {
        fetch(`http://127.0.0.1:8000/api/post`)
            .then(response => response.json())
            .then(data => {
                const filteredPosts = data.filter(post => post.category_id === 6);
                setPost(filteredPosts);
            })
            .catch(error => console.error(error));

        setTimeout(() => {
            fetch("http://127.0.0.1:8000/api/category")
                .then(res => res.json())
                .then(data => {
                    const filteredCategories = data.filter(category => category.name === "New");
                    setCategory(filteredCategories);
                })
                .catch(error => console.error(error));
        }, 1000);
    }, []);


    return(
        <div className="tableBlock">
            {categories.map(category => (
                <h2 className="table_name">{category.name}</h2>
            ))}

            {posts.map(post =>(
                <div className="table_Block">
                    <Link key={post.id} to={`/post/${post.id}`}>
                        <div className="table_image">
                            <img className='table_miniBlock_img' src={post.image} alt=""/>
                        </div>
                    </Link>

                    <div className="table_info">
                        <div className="block_name">
                            <p className="name">{post.name}</p>
                        </div>

                        <div className="voiceActings">
                            <VoiceActing/>
                        </div>
                    </div>
                </div>
            ))}


        </div>
    )
}

export default New