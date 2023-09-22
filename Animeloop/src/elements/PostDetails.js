import React, { useState, useEffect } from 'react';
import { useParams } from 'react-router-dom';

import "./PostDetail.css"
import CommentSection from "./CommentSection";

function PostDetail() {
    const { id } = useParams();
    const [post, setPost] = useState({});

    useEffect(() => {
        fetch(`http://127.0.0.1:8000/api/post?id=${id}`)
            .then(res => res.json())
            .then(data => setPost(data))
            .catch(error => console.error(error));
    }, [id]);

    return (
        <div className="post_detail" key={id}>
            <div className="post_details_watch">
                <div className="post_section_about">
                    <div className="post_section_image">
                        <img className="post_image" src={post.image} alt=""/>
                    </div>
                    <div className="post_section_summary">
                        <p className="post_summary_title">{post.name}</p>
                        <p className="post_summary_subtitle">Plot Summary :</p>
                        <p className="post_summary_description">{post.description}</p>
                    </div>
                </div>
                <div className="post_section_comments">
                    <CommentSection/>
                </div>
            </div>
        </div>
    );
}

export default PostDetail;