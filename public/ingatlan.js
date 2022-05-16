$(function () {
    let token = $('meta[name="csrf-token"]').attr("content");
    let ajax = new Ajax(token);

    new Feladat(ajax).getKategoriak();
    new Feladat(ajax).getIngatlanok();
    new Feladat(ajax).sendIngatlan();
    let today = new Date();
    let nap = today.getDate();
    let honap = today.getMonth()+1;
    let ev = today.getFullYear();
    if ( nap < 10 ){
        nap= "0"+nap;
    }
    if(honap <10){
        honap="0"+honap
    }
    $("#datum").val(ev+"-"+honap+"-"+nap)
});

class Feladat {
    constructor(ajax) {
        this.ajax = ajax;
    }
    getKategoriak() {
        let kategoriak = $("#kategoriak");
        kategoriak.empty();
        this.ajax.ajaxApiGet("/kategoriak", (adat) => {
            adat.forEach((element) => {
                new Kategoria(kategoriak, element);
            });
        });
    }

    getIngatlanok() {
        let ingatlanok = $(".ingatlanok");
        ingatlanok.empty();
        this.ajax.ajaxApiGet("/ingatlanok", (adat) => {
            adat.forEach((element) => {
                new Ingatlan(ingatlanok, element);
            });
        });
    }

    sendIngatlan(){
        let kuldes = $(".kuldes");
        
        kuldes.on("click",(esemeny)=>{
            
            esemeny.preventDefault();
            let obj = {
                id:0,
                leiras:$("#leiras").val(),
                kep:$("#kep").val(),
                kategoria:$("#kategoriak").val(),
                tehermentes:$("#tehermentes").prop("checked")?1:0,
                hirdetesDatuma:$("#datum").val()
            };
            console.log(obj)
            this.ajax.ajaxApiPost('/ingatlanok', obj, ()=>{this.getIngatlanok();});
        })
    }
}

class Kategoria {
    constructor(szulo, adat) {
        this.szulo = szulo;
        this.adat = adat;
        this.szulo.append("<option value="+this.adat.id+"></option>");
        this.elem = this.szulo.find("option:last");
        this.elem.text(this.adat.nev);
    }
}

class Ingatlan {
    constructor(szulo, adat) {
        this.szulo = szulo;
        this.adat = adat;
        this.szulo.append(`<div class="ingatlan container"></div>`);
        this.elem = this.szulo.find("div:last");
   
        this.elem.append(`
        <div class="row">

            <div class="col">${this.adat.kategoria[0].nev}</div>
            <div class="col leiras">${this.adat.leiras}</div>
            <div class="col">${this.adat.hirdetesDatuma}</div>
            <div class="col">${this.adat.tehermentes?"Igen":"Nem"}</div>
            <div class="col kep"><img src ="${this.adat.kep}"/></div></div>
            <div><button class="erdekel btn-sm btn btn-info">Érdekel</button></div>
            </div>
        `);
        this.erdekel = this.elem.find(".erdekel");
        this.erdekel.on("click",()=>{
            let ki = "Kategória: "+this.adat.kategoria[0].nev+"\nLeírás: "+this.adat.leiras+"\n";
            alert(
                ki
                
            );
        })
    }
}
