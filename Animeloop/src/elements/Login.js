import React from "react";
import './Login.css'
import Login_photo from '../assets/login.png'

function Login() {
    return (
        <div className="wrapper__login">
            <div className="login-page">

                <div className="form">
                    <div className="form__title">
                        <img className="form__login_image" src={Login_photo} alt=""/>
                        <p className="form__title_underImage">Log In</p>
                    </div>

                    <form className="login-form">
                        <input type="text" placeholder="email"/>
                        <input type="password" placeholder="password"/>
                        <button className="form__button">login</button>
                        <p className="message">Not registered? <br/>
                            <a className="message_auth" href="#">Create an account</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    )
}

export default Login