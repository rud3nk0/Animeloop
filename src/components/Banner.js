import photo from '../assets/img-3.png'
import './banner.css'

function Banner(){
    return(
        <>
            <div className="wrapper">
                <div className="wrapper__banner">
                    <div className="wrapper__banner__miniInfo">
                        <h1 className="wrapper__banner__title">ONE PEICE</h1>
                        <p className="wrapper__banner__subtitle">SEASON 5</p>
                        <div className="tags">
                            <span>PG-13</span>
                            <span>DUB</span>
                            <span>SUB</span>
                        </div>
                        <div className="wrapper__banner__date">
                            <p>APRIL 07, 2015</p>
                        </div>
                        <p className="wrapper__description">At vero eos et accusamus et iusto odio dignissimos ducimus qui<br/>
                            blanditiis praesentium voluptatum deleniti atque corrupti quos<br/>
                            dolores et quas molestias excepturi sint occaecati cupiditate non<br/>
                            provident.</p>
                        <button className="wrapper__banner__btn">PLAY NOW</button>
                    </div>
                    <div className="wrapper__banner__img">
                        <img src={photo} alt=""/>
                    </div>

                </div>
            </div>
        </>
    )
}

export default Banner;