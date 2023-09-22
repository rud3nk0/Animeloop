import React from "react";

import "./Footer.css"
import logo from "../assets/logo.png"


function Footer(){
    return(
        <div className="footer">
            <div className="footer_first_info">
                <div className="footer_logo">
                    <img src={logo} alt=""/>
                </div>
                <div className="social_icon">
                    <a href="https://instagram.com/rud3nk0?igshid=NTc4MTIwNjQ2YQ==" target="_blank"><i className="fa-brands fa-instagram"></i></a>
                    <a href="https://t.me/rud3nk0" target="_blank"><i className="fa-brands fa-telegram"></i></a>
                </div>
            </div>

            <div className="footer_contact_form">
                <h3 className="footer_contact_title">get notification</h3>
                <p className="footer_contact_subtitle">Get emails for latast news about anime, and more.</p>
                <div className="footer_navigation">
                    <input className="footer_navigation_inputEmail" type="text" placeholder="your email"/>
                    <input className="footer_navigation_inputSubmit" type="submit" value="submit"/>
                </div>
                <p className="footer_contact_subtitle">By subscribing you agree to our terms and conditions</p>
            </div>
        </div>
    )
}

export default Footer