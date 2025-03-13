
const titulo = document.getElementById("titulo");

const btn_fechar = document.getElementById("fechar");

const janela = document.getElementById("minhaJanela");

const cabelo = document.getElementById("cabelo");
const barba = document.getElementById("barba");
const combos = document.getElementById("combos");
const consultoria = document.getElementById("consultoria");
const planos = document.getElementById("planos");


const cabelo_ = [];

const barba_ = [];

const combos_ = [];

const consultoria_ = [];

const planos_ = []

function applicacao(Event) {

    console.log(Event.target.name);

    titulo.textContent = "" + Event.target.name;

    janela.style.visibility = "visible";

    document.body.style.overflow = "hidden";

}

function fechar() {
    janela.style.visibility = "hidden";

    document.body.style.overflow = "scroll";
}

cabelo.addEventListener("click", applicacao);
barba.addEventListener("click", applicacao);
combos.addEventListener("click", applicacao);
consultoria.addEventListener("click", applicacao);
planos.addEventListener("click", applicacao);

btn_fechar.addEventListener("click", fechar);
