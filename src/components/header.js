import "./header.css"
import logo from "../assets/logo.png"

function Header(){
    return(
        <>
            <header className="header">
                <div className="header__container">
                    <div className="header__logo">
                        <img src={logo} alt=""/>
                    </div>
                    <div className="header__nav">
                        <a className="header__nav__link" href="#">Anime</a>
                        <a className="header__nav__link" href="#">Movie</a>
                        <a className="header__nav__link" href="#">Manga</a>
                        <a className="header__nav__link" href="#">Pages</a>
                    </div>
                    <div className="header__auth">
                        <button className="header__auth_button">Sign Up</button>
                        <button className="header__auth_button">Log In</button>
                    </div>
                </div>
            </header>
        </>
    )
}

export default Header