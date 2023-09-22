import React, {useEffect, useState} from "react";

import './TableAnime.css'

import TopRated from "./TopRated";
import New from "./New";
import RecentlyCompleted from "./RecentlyCompleted";

function TableAnime(){




    return(
        <div className="table_app">
            <div className="table">
                <TopRated/>
                <New/>
                <RecentlyCompleted/>
            </div>
        </div>
    )
}

export default TableAnime