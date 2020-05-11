function play_game(element){

    var playing = document.getElementsByClassName("playing")
    if (playing.length > 0){
        for (let element of playing) {

            var clickme = document.createElement('img');
            clickme.src= "assets/imgs/play.png"
            clickme.setAttribute( "onClick", "play_game(this);")
            clickme.id = element.id
            element.parentNode.replaceChild(clickme, element);
            
        }
    }
    console.log("CLICKED : " + element.id)
    var e = document.getElementById(element.id)
    var game = document.createElement('iframe');
    game.classList.add("playing")
    game.src= getGameByID(element.id)
    game.height = 600
    game.width = 1000
    game.id = element.id
    
    element.parentNode.replaceChild(game, element);
}

function getGameByID(id){
    switch(id){
        case "clonergb":
            return "assets/games/clone_rgb/index.html";
        case "plasticboy":
            return "assets/games/plastic_boy/PlasticBoy-HTML.html"
        case "rex":
            return "assets/games/dont_steal_from_rex";
        case "virus":
            return "assets/games/virus/index.html";
        case "penguins":
            return "assets/games/penguins/index.html";
        default:
            return "assets/games/clone_rgb/index.html";
    }
}