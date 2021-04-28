function bmi_cal(){
var weight =parseInt(document.getElementById("kg").value);
var height =parseInt(document.getElementById("cm").value);

if(weight>1 && height>22)
{
    if(height<271||weight<635){
        
        var new_h= parseFloat(height/100);
        var bmi= weight/(new_h*new_h);
        bmi=bmi.toFixed(1);


        if(bmi < 18.5)
        {
        document.getElementById("result").innerHTML = "<h2>You are too thin<h2>";
        }
        if(bmi > 18.5 && bmi < 25){

        document.getElementById("result").innerHTML = "<h2>You are healthy<h2>";
        const timeline = new mojs.Timeline({
        repeat:1
        }).add(burst,burst2).play();
        }
        if(bmi > 25){
        document.getElementById("result").innerHTML = "<h2>You have overweight<h2>";
        }
        }
    else{
        alert("Hamse na ho paayega");
    }
}
else{
alert("Invalid Weight/Height");
}
}


const burst= new mojs.Burst({
radius:{0:300},
count:20,
// duration:1000,
children:{
shape:'cross',
stroke:{'orange':'yellow'},
scale:{2:0},
angle:{360:0},
duration:2000
}
});
const burst2= new mojs.Burst({
radius:{0:300},
count:20,
// duration:1000,
children:{
shape:'cross',
stroke:{'red':'magenta'},
scale:{2:0},
angle:{0:360},
duration:4000
}
});
