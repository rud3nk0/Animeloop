import Banner from '../elements/Banner';
import RecentlyUpdate from "../elements/RecentlyUpdate";
import StatickBanner from "../elements/StatickBanner";
import PopularAnime from "../elements/PopularAnime";
import TableAnime from "../elements/TableAnime";

function Wrapper(){
    return(
        <>
            <Banner/>
            <RecentlyUpdate/>
            <StatickBanner/>
            <PopularAnime/>
            <TableAnime/>
        </>
    )
}

export default Wrapper;