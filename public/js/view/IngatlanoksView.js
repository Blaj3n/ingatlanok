import IngatlanokView from "./IngatlanokView.js";

class IngatlanoksView{
    constructor (tomb, szuloelem){
        console.log("IngatlanoksView hali!");
        szuloelem.html(`
        <div id="ingatlanok">
        </div>
        `)
        this.divElem = szuloelem.children("div:last-child");
        tomb.forEach(adat => {
            const adatom = new IngatlanokView(adat, this.divElem);
        });
    }
}

export default IngatlanoksView