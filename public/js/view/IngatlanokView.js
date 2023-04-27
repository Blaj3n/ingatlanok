class IngatlanokView {
    #elem;
    constructor(elem, szuloelem) {
        console.log("IngatlanokView Hali!", elem);
        this.#elem = elem;
        szuloelem.append(`
        <div class="ingatlan">
            <h2> ID: ${elem.id}</h2>
            <h2> Kategória: ${elem.Kategória}</h2>
            <h2> Leírás: ${elem.Leírás}</h2>
            <h2> Hírdetés dátuma: ${elem.hirdetesDatuma}</h2>
            <h2> Tehermentes: ${elem.tehermentes}</h2>
            <h2>Fénykép: </h2><img src="${elem.fenykep}">
        </div>
        `);
    }
}

export default IngatlanokView;