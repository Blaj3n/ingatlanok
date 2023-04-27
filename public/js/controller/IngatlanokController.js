import AdatFeldolgozModel from "../model/AdatFeldolgozModel.js";
import IngatlanoksView from "../view/IngatlanoksView.js";

class IngatlanokController{
    constructor(){
        console.log("IngatlanokController Hali!");
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel;
        this.vegpont = "/ingatlanoks";
        adatFeldolgozModel.adatBe(this.vegpont, this.ingatlanAdatok);
    }
    ingatlanAdatok(tomb){
        const szuloelem = $("article")
        new IngatlanoksView(tomb, szuloelem);
    }
}

export default IngatlanokController