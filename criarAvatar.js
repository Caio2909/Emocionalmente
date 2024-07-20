sombrancelhas = ["sadConcerned", "default", "angry"]
olhos = ["cry", "default", "squint"] // 0 - triste 1 - normal 2 - raiva
boca = ["screamOpen", "default", "grimace"]

const avatar = document.getElementById('avatar');
const skinButtons = document.querySelectorAll('.skinCorButton');
const hairButtons = document.querySelectorAll('.hairCorButton');
const usaOculos = document.querySelectorAll('.oculosInput')
const sentimento = document.querySelectorAll('.sentimentoInput')
const hairType = document.getElementById('hairType');

let selectedSkinColor = 'ffdbac'
let selectedHairColor = 'a2826D'
let selectedOculos = ''
let selectedSentimento = 1
let booleanOculos = 0
let selectedHairType = "curvy"

function updateAvatar() {
    const link = `https://api.dicebear.com/9.x/avataaars/svg?accessories=
${selectedOculos}
&hairColor=${selectedHairColor}
&skinColor=${selectedSkinColor}
&mouth=${boca[selectedSentimento]}
&eyes=${olhos[selectedSentimento]}
&accessoriesProbability=${booleanOculos}&accessoriesColor=262e33
&eyebrows=${sombrancelhas[selectedSentimento]}
&top=${selectedHairType}`;
    avatar.src = link;
}

hairType.addEventListener('change', (event) => {
    selectedHairType = event.target.value;
    updateAvatar();
});

sentimento.forEach(input => {
    input.addEventListener('click', (event) => {
        selectedSentimento = event.target.value;
        updateAvatar();
    })
})

usaOculos.forEach(input => {
    input.addEventListener('click', (event) => {
        selectedOculos = event.target.value;
        if (selectedOculos == ''){
            booleanOculos = 0
        }
        else{
            booleanOculos = 100
        }
        updateAvatar();
    })
})

skinButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        selectedSkinColor = event.target.value;
        updateAvatar();
    });
});
hairButtons.forEach(button =>{
    button.addEventListener('click', (event) => {
        selectedHairColor = event.target.value;
        updateAvatar();
    });
});
submitBtn.addEventListener('click', () => {
    //enviar para o banco de dados aqui
})

window.onload = updateAvatar;
