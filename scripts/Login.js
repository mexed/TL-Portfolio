
async function goLogin(){
    localStorage.setItem('username', document.getElementById('username').value);
    localStorage.setItem('password', document.getElementById('password').value);
}

async function startProgressbarSkills(breite,skill){

    const neuerSkill = document.createElement('div');
    neuerSkill.innerHTML = `<div id="${breite}" class="progress hidden" role="progressbar" aria-label="Animated striped example" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"><div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%, color=red;"></div></div>`;
    const SkillBar = document.getElementById(`${skill}`);
    SkillBar.appendChild(neuerSkill);


    var ProgressBarS = document.getElementById(`${breite}`);
    ProgressBarS.classList.remove('hidden');   
    console.log(breite);

    breite = Math.round(breite);
    console.log(`Variable ist ${breite}`);
    $(".progress-bar", neuerSkill).text(`${breite}` + "%");
    $(".progress-bar", neuerSkill).animate(
        {
            width: `${breite}%`,
        },
        {
            duration: 4000, function(){
                // Dauer der Animation in Millisekunden
                

            }
        }
    );

}



async function startProgressbar(index){
    let actionExecuted = false;
    var ProgressBar = document.getElementById('PB');
  
    ProgressBar.classList.remove('hidden');     


    $(".progress-bar").animate({ 
        width: "300%", 
    }, {
        duration: 1200,
        step: function(now, fx) {
            if (now >= 299.5) {
                if (index === 1){
                    window.location.href = "http://localhost:3000/xampp/htdocs/test/index.php";
                }
                if (index === 2){
                    if (!actionExecuted) {
                        alert("Vielen Dank für Ihre Nachricht");
                        
                        ProgressBar.classList.add('hidden');
                        actionExecuted = true; // Setze die Variable, um anzuzeigen, dass die Aktion ausgeführt wurde
                        window.location.href = "index.php";
                    }
                }
            }
        }
    });
    
}
