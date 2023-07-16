import "./RecentlyUpdate.css"

import CardImg from '../assets/img-2.png'
import FavoriteIcon from '../assets/Frame.png'


function RecentlyUpdate(){

    return(
        <>
            <div className="wrapper__recently">
                <div className="wrapper__title">
                    <h1 className="title">Recently Updated</h1>
                    {/* We need to set the updated date, but for now we will
                        leave the static one */}
                    <p className="subTitle">Sunday 01 Jan 2023</p>
                </div>

                <div className="wrapper__recently__row">
                    <div className="recently__card">
                        <div className="card__img">
                            {/* Letter need make follow link on posts
                                with content */}
                            <a href="#">
                                <img src={CardImg} alt=""/>
                            </a>
                        </div>
                        <div className="card__miniNav">

                            <div className="tags">
                                <span>DUB</span>
                                <span>SUB</span>
                                <p>TV</p>
                            </div>

                            <div className="addToFavorite">
                                <img src={FavoriteIcon} alt=""/>
                            </div>

                        </div>
                        <div className="animeName">
                            <p className="title__anime">My Hero Academia</p>
                        </div>
                    </div>
                    <div className="recently__card">
                        <div className="card__img">
                            {/* Letter need make follow link on posts
                                with content */}
                            <a href="#">
                                <img src={CardImg} alt=""/>
                            </a>
                        </div>
                        <div className="card__miniNav">

                            <div className="tags">
                                <span>DUB</span>
                                <span>SUB</span>
                                <p>TV</p>
                            </div>

                            <div className="addToFavorite">
                                <img src={FavoriteIcon} alt=""/>
                            </div>

                        </div>
                        <div className="animeName">
                            <p className="title__anime">My Hero Academia</p>
                        </div>
                    </div>
                    <div className="recently__card">
                        <div className="card__img">
                            {/* Letter need make follow link on posts
                                with content */}
                            <a href="#">
                                <img src={CardImg} alt=""/>
                            </a>
                        </div>
                        <div className="card__miniNav">

                            <div className="tags">
                                <span>DUB</span>
                                <span>SUB</span>
                                <p>TV</p>
                            </div>

                            <div className="addToFavorite">
                                <img src={FavoriteIcon} alt=""/>
                            </div>

                        </div>
                        <div className="animeName">
                            <p className="title__anime">My Hero Academia</p>
                        </div>
                    </div>
                    <div className="recently__card">
                        <div className="card__img">
                            {/* Letter need make follow link on posts
                                with content */}
                            <a href="#">
                                <img src={CardImg} alt=""/>
                            </a>
                        </div>
                        <div className="card__miniNav">

                            <div className="tags">
                                <span>DUB</span>
                                <span>SUB</span>
                                <p>TV</p>
                            </div>

                            <div className="addToFavorite">
                                <img src={FavoriteIcon} alt=""/>
                            </div>

                        </div>
                        <div className="animeName">
                            <p className="title__anime">My Hero Academia</p>
                        </div>
                    </div>
                </div>

            </div>
        </>
    )
}

export default RecentlyUpdate