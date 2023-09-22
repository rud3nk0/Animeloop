import React,{ useState, useEffect } from "react";

import "./header.css"
import logo from "../assets/logo.png"

import {Link} from 'react-router-dom';

function Header() {

    return (
        <>
            <header className="header">
                <div className="header__container">
                    <div className="header__logo">
                        <a href="http://localhost:3000/">
                            <img src={logo} alt=""/>
                        </a>
                    </div>
                    <div className="header__nav">
                        <Link to={'/anime'}>
                            <a className="header__nav__link" href="#">Anime</a>
                        </Link>

                        <Link to={'/manga'}>
                            <a className="header__nav__link" href="#">Manga</a>
                        </Link>

                    </div>
                    <div className="header__auth">
                        <button className="header__auth_button">
                            <a className="header__auth_button_link" href="http://127.0.0.1:8000/login">
                                Log In
                            </a>
                        </button>

                        <button className="header__auth_button">
                            <a className='header__auth_button_link' href="http://127.0.0.1:8000/register">
                                Sign Up
                            </a>
                        </button>


                    </div>
                </div>
            </header>
        </>
    )
}

export default Header;