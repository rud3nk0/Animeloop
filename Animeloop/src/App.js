import React from 'react';
import './App.css';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Header from './components/header';
import Wrapper from './components/Wrapper';
import PostDetail from './elements/PostDetails';
import Footer from "./components/Footer";
import Anime from "./elements/Anime";
import Manga from "./elements/Manga";

function App() {
    return (
        <Router>
            <div className="App">
                <Header />
                <Routes>
                    <Route path="/" element={<Wrapper />} />
                    <Route path="/anime" element={<Anime />} />
                    <Route path="/manga" element={<Manga />} />
                    <Route exact path="/post/:id" element={<PostDetail />} />
                </Routes>
                <Footer/>
            </div>
        </Router>
    );
}

export default App;