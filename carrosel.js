
const elm1 = document.getElementById("elm1");

const elm2 = document.getElementById("elm2");

const elm3 = document.getElementById("elm3");


const ant = document.getElementById("teste");
const dep = document.getElementById("dep");

btn_ant_clique = false;
btn_dep_clique = false;


ant.addEventListener("click", function() {
    btn_ant_clique = true;

    console.log("evento 1 ativado");
    console.log(btn_ant_clique);
});

dep.addEventListener("click", function() {
    btn_dep_clique = true;

    console.log("evento 2 ativado");
})

pos = 0;;

quadros = [elm1, elm2, elm3];

function principal() {
    contador = 0;

    if (btn_dep_clique) {
        quadros[pos].style.position = "absolute"

        while (contador < 400) {

            if (pos < 2) {
                future_pos = pos + 1;
            }
            else {
                future_pos = 0;
            }

            quadros[pos].style.right = "-" + contador + "px";

            quadros[future_pos].style.left = "" + (438 - contador) + "px";

            contador++;

            if(contador == 400) {
                quadros[future_pos].style.display = "inline";

                quadros[pos].style.display = "none";
            }

            console.log("laço de repetição ativo");

            setTimeout(() => {
                console.log("animacoes e tudo mais")
            }, 10);
        }

        if (pos < 2) {
            pos = pos + 1;
        }
        else {
            pos = 0;
        }

        btn_dep_clique = false;
    }

}


setInterval(principal, 1);

