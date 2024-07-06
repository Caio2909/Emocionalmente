const avatar = document.getElementById('avatar');
const skinButtons = document.querySelectorAll('.skinCorButton');
const hairButtons = document.querySelectorAll('.hairCorButton');
const hairColor = document.getElementById('hairCor');
let selectedSkinColor = 'ffdbac'; 
let selectedHairColor = 'a2826D'
function updateAvatar() {
    const link = `https://api.dicebear.com/9.x/avataaars/svg?skinColor=${selectedSkinColor}&hairColor=${selectedHairColor}`;
    avatar.src = link;
}

// Adiciona evento de clique a cada botão de cor da pele
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
// Inicializa o avatar na carga da página
window.onload = updateAvatar;
