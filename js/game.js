
/*********************************/
// global
/*********************************/
var playerChooseButton=0;
var randomNumber;

function onbtpressed(chooseButton)
{
    switch(chooseButton){
        case 'b1':
            playerChooseButton=1;
            document.getElementById('button1').disabled=true;
            document.getElementById('button2').style.display='none';
            document.getElementById('button3').style.display='none';
            break;
        case 'b2':
            playerChooseButton=2;
            document.getElementById('button2').disabled=true;
            document.getElementById('button1').style.display='none';
            document.getElementById('button3').style.display='none';
            break;
        case 'b3':
            playerChooseButton=3;
            document.getElementById('button3').disabled=true;
            document.getElementById('button1').style.display='none';
            document.getElementById('button2').style.display='none';
            break;
    }

    luckyMaschine();
}

function luckyMaschine(){
    randomNumber=rand(1,3);

    //win or loss?
    if(randomNumber===playerChooseButton){
        createaudio('320739__druki__yeah.mp3');
    }
    else
    {
        createaudio('159408__noirenex__life-lost-game-over.wav');
    }

    document.getElementById('card'+randomNumber).src='images/joker.png';

    var timer = setInterval(() => {
        document.getElementById("buttonrestart").style.display='block';
        clearInterval(timer)
    },1400);
}

function rand (min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function restartGame()
{
    document.getElementById('button1').style.display='block';
    document.getElementById('button2').style.display='block';
    document.getElementById('button3').style.display='block';

    document.getElementById('button1').disabled=false;
    document.getElementById('button2').disabled=false;
    document.getElementById('button3').disabled=false;

    document.getElementById('card'+randomNumber).src='images/back.png';

    document.getElementById("buttonrestart").style.display='none';
}

function createaudio(audio_title)
{
    let audio = document.createElement("audio");
    audio.src="./sounds/"+audio_title;
    audio.addEventListener("ended", function () {
        document.getElementById("soundfiles").removeChild(this);
    }, false);
  
    document.getElementById("soundfiles").appendChild(audio);
    audio.play(); 
}

//Add Eventlistener
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("button1").addEventListener("click",() => onbtpressed('b1'));
    document.getElementById("button2").addEventListener("click",() => onbtpressed('b2'));
    document.getElementById("button3").addEventListener("click",() => onbtpressed('b3'));

    document.getElementById("buttonrestart").addEventListener("click",restartGame);
    
});