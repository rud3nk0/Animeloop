import './App.css';

import Header from './components/header';
import Banner from './components/Banner';
import RecentlyUpdate from "./components/RecentlyUpdate";

function App() {
  return (
    <div className="App">
        <Header/>
        <Banner/>
        <RecentlyUpdate/>
    </div>
  );
}

export default App;
